<?php

/**
 * @package    ZtShortcodes
 * @author     Viet Vu <info@crefly.com>
 * @copyright  JOOservices Ltd
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * 
 * @version    0.5.0
 * @since      0.5.0
 */
defined('_JEXEC') or die;

/**
 * Class exists checking
 */
if (!class_exists('ZtShortcodesImagerAbstract'))
{

    /**
     * Image process abstract class
     */
    abstract class ZtShortcodesImagerAbstract extends JObject
    {

        /**
         *
         * @var image resource 
         */
        protected $_resource;

        /**
         * Original image width
         * @var float 
         */
        protected $_imageWidth;

        /**
         * Original image height
         * @var float
         */
        protected $_imageHeight;

        /**
         * Image mime
         * @var string
         */
        protected $_imageMime;

        /**
         * Image physical path
         * @var string
         */
        protected $_imageFile;

        /**
         *
         * @var array
         */
        protected $_allowExtensions = array('jpg', 'jpeg', 'gif', 'png');

        /**
         * 
         * @param type $properties
         */
        public function __construct($properties = null)
        {
            parent::__construct($properties);
            /* Default properties */
            $this->def('transparent', true);
        }

        public function loadFromUrl($url, $overwrite = false, $tempFolder = null)
        {
            if (is_null($tempFolder))
            {
                $tempFolder = JPATH_ROOT . '/tmp/crex/media';
            }
            if (!JFolder::exists($tempFolder))
            {
                JFolder::create($tempFolder);
            }
            $fileExtension = JFile::getExt($url);
            $filePath = $tempFolder . '/' . md5($url) . '.' . $fileExtension;
            if (!JFile::exists($filePath) || $overwrite == true)
            {
                $fileHandeler = fopen($filePath, 'w+');
                $curlHandeler = curl_init(str_replace(" ", "%20", $url));
                curl_setopt($curlHandeler, CURLOPT_TIMEOUT, 50);
                curl_setopt($curlHandeler, CURLOPT_FILE, $fileHandeler);
                curl_setopt($curlHandeler, CURLOPT_FOLLOWLOCATION, true);
                curl_exec($curlHandeler);
                curl_close($curlHandeler);
                fclose($fileHandeler);
            }
            if (JFile::exists($filePath))
            {
                $this->loadFile($filePath);
            } else
            {
                $this->setError(JText::_('CREX_ERROR_FILE_NOT_FOUND'));
            }
            return $this;
        }

        /**
         * Get ZtShortcodesImageSizer
         * We will use it calc new image size
         * @return \ZtShortcodesImagerSizer
         */
        public function getImageSizer()
        {
            $resizer = new ZtShortcodesImagerSizer($this->getWidth(), $this->getHeight());
            return $resizer;
        }

        /**
         * Load image from physcial file
         * @uses For GD we can use loadFromString
         */
        abstract public function loadFile($imageFile);

        /**
         * Get original width
         * @return float
         */
        public function getOriginalWidth()
        {
            return $this->_imageWidth;
        }

        /**
         * Get current width
         * @return float
         */
        abstract public function getWidth();

        /**
         * Get original height
         * @return float
         */
        public function getOriginalHeight()
        {
            return $this->_imageHeight;
        }

        /**
         * Get current height
         * @return float
         */
        abstract public function getHeight();

        /**
         * Extract exif data
         * @return array
         */
        abstract public function getExif();

        abstract protected function _setWatermark($imager, $options = array());

        /**
         * Do image resize with sizer input
         */
        abstract protected function _resize($sizer);

        abstract protected function _crop($sizer);

        /**
         * Resize image to fit with maxWidth & maxHeight
         */
        abstract public function fit($maxWidth, $maxHeight);

        abstract public function ratio($newWidth, $newHeight);

        abstract public function resize($newWidth, $newHeight);

        abstract public function crop($newWidth, $newHeight, $options = array());

        abstract public function thumbnail($newWidth, $newHeight);

        abstract public function addWatermark($imageFile, $options = array());

        abstract public function addText($text, $options = array());

        /**
         * Apply effect to image resource
         */
        abstract function effect($type, $times = 1);

        abstract function saveToFile($saveFile, $type, $quality);

        abstract function render($type, $quality);

        /**
         * Resource manager
         */
        abstract function getResource();

        protected function _isError()
        {
            if (count($this->_errors) > 0)
                return true;
            else
                return false;
        }

        /**
         * 
         * @param type $imageFile
         * @return type
         */
        protected function _isAllowedExtensions($imageFile)
        {
            $ext = strtolower(JFile::getExt($imageFile));
            return in_array($ext, $this->_allowExtensions);
        }

        /**
         * 
         * @return boolean
         */
        protected function _isValidResource()
        {
            $stupidPHP = $this->getResource();
            return (!empty($stupidPHP));
        }

        abstract function closeResource();

        /**
         * Release memory by destroy image resource
         */
        public function __destruct()
        {
            $this->closeResource();
        }

    }

}