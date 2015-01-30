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
if (!class_exists('ZtShortcodesImagerSizer')) {

    /**
     * Image sizer class
     * Used to calc new width & height and X/Y values from source
     */
    class ZtShortcodesImagerSizer {

        private $_srcWidth;
        private $_srcHeight;
        private $_srcRatio;
        private $_newWidth;
        private $_newHeight;
        private $_srcX;
        private $_srcY;

        public function __construct($width, $height) {
            $this->_srcWidth = $width;
            $this->_srcHeight = $height;
            /* By default we init new width & height same with source */
            $this->_newWidth = $width;
            $this->_newHeight = $height;
            $this->_srcX = 0;
            $this->_srcY = 0;
            $this->_srcRatio = $this->_srcWidth / $this->_srcHeight;
        }

        /**
         * Force to resize with new width & height
         * @param type $newWidth
         * @param type $newHeight
         * @return \ZtShortcodesImagerSizer
         */
        public function resize($newWidth, $newHeight) {
            if ($this->_isValid()) {
                $this->_newWidth = $newWidth;
                $this->_newHeight = $newHeight;
            }
            return $this;
        }

        /**
         * Do resize to fit max width & height
         * @param type $maxWidth
         * @param type $maxHeight
         * @return \ZtShortcodesImagerSizer
         */
        public function fit($maxWidth, $maxHeight) {
            if ($this->_isValid()) {
                if ($this->_newWidth > $maxWidth) {
                    $this->ratio($maxWidth, 0);
                    $this->fit($this->_newWidth, $maxHeight);
                }
                if ($this->_newHeight > $maxHeight) {
                    $this->ratio(0, $maxHeight);
                    $this->fit($maxWidth, $this->_newHeight);
                }
            }
            return $this;
        }

        /**
         * Do resize by follow source ratio
         * @param type $newWidth
         * @param type $newHeight
         */
        public function ratio($newWidth, $newHeight) {
            if ($this->_isValid()) {
                /* Keep image size */
                if ($newWidth == 0 && $this->_isUnit($newHeight)) {
                    $this->_newWidth = $newHeight * $this->_srcRatio;
                    $this->_newHeight = $newHeight;
                } else if ($newHeight == 0 && $this->_isUnit($newWidth)) {
                    $this->_newHeight = $newWidth / $this->_srcRatio;
                    $this->_newWidth = $newWidth;
                }
            }
            return $this;
        }

        /**
         * Crop source image from XY with new size
         * @param type $newWidth
         * @param type $newHeight
         * @param type $srcX
         * @param type $srcY
         */
        public function crop($newWidth, $newHeight, $srcX = 0, $srcY = 0) {
            if ($this->_isValid()) {
                if ($this->_isUnit($newWidth) && $this->_isUnit($newHeight) && $this->_isUnit($srcX) && $this->_isUnit($srcY) && $srcX < $this->_srcWidth && $srcY < $this->_srcHeight) {
                    /**
                     * @todo Make sure new width & new height from X/Y will not over than source width & height
                     */
                    $this->resize($newWidth, $newHeight);
                    $this->_srcX = $srcX;
                    $this->_srcY = $srcY;
                }
            }
            return $this;
        }

        public function getPosition($width, $height, $cmd) {
            if ($this->_isValid()) {
                $x = 0;
                $y = 0;
                switch ($cmd) {
                    case 'center':
                        $x = $this->_srcWidth / 2 - $width / 2;
                        $y = $this->_srcHeight / 2 - $height / 2;
                        break;
                    case 'top-left':
                        //Nothing
                        break;
                    case 'top-middle':
                        $x = $this->_srcWidth / 2 - $width / 2;
                        break;
                    case 'top-right':
                        $x = $this->_srcWidth - $width;
                        break;
                    case 'left-middle':
                        $y = $this->_srcHeight / 2 - $height / 2;
                        break;
                    case 'right-middle':
                        $x = $this->_srcWidth - $width;
                        $y = $this->_srcHeight / 2 - $height / 2;
                        break;
                    case 'bottom-left':
                        $y = $this->_srcHeight - $height;
                        break;
                    case 'bottom-middle':
                        $x = $this->_srcWidth / 2 - $width / 2;
                        $y = $this->_srcHeight - $height;
                        break;
                    case 'bottom-right':
                        $x = $this->_srcWidth - $width;
                        $y = $this->_srcHeight - $height;
                        break;
                }
                $this->resize($width, $height);
                $this->_srcX = $x;
                $this->_srcY = $y;
            }
            return $this;
        }

        /**
         * Get get position in current image
         * @param type $newImager
         * @param type $cmd
         * @return type
         */
        public function getWatermarkPosition($imager, $cmd) {
            if ($this->_isValid()) {
                $this->getPosition($imager->getWidth(), $imager->getHeight(), $cmd);
            }
            return $this;
        }

        /**
         * Check a value is valid width/height unit
         * @param any $value
         * @return boolean
         */
        private function _isUnit($value) {
            return is_numeric($value) && $value > 0;
        }

        /**
         * Check image size is valid
         * @return boolean
         */
        private function _isValid() {
            return $this->_isUnit($this->_srcWidth) && $this->_isUnit($this->_srcHeight);
        }

        /**
         * Get width
         * @return float
         */
        public function getWidth() {
            return $this->_newWidth;
        }

        /**
         * Get height
         * @return float
         */
        public function getHeight() {
            return $this->_newHeight;
        }

        /**
         * Get source X
         * @return float
         */
        public function getX() {
            return $this->_srcX;
        }

        /**
         * Get source Y
         * @return float
         */
        public function getY() {
            return $this->_srcY;
        }

    }

}