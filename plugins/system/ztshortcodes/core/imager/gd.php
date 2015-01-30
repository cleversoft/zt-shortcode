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
if (!class_exists('ZtShortcodesImagerGd'))
{

    /**
     * Image gd processor class   
     * @link http://stackoverflow.com/questions/18004702/php-imagecopyresized-vs-imagecopyresampled-vs-imagecopy-pros-cons
     */
    class ZtShortcodesImagerGd extends ZtShortcodesImagerAbstract
    {

        /**
         * Load image from physical file
         * @param string $imageFile
         * @return \ZtShortcodesImagerGd
         */
        public function loadFile($imageFile)
        {
            if (JFile::exists($imageFile) && $this->_isAllowedExtensions($imageFile))
            {
                $this->_imageFile = $imageFile;

                $this->_imageInfo = getimagesize($imageFile);
                $this->_imageWidth = $this->_imageInfo[0];
                $this->_imageHeight = $this->_imageInfo[1];
                $this->_imageMime = $this->_imageInfo['mime'];
                /**
                 * @todo support another imagecreatefrom*
                 */
                if (!empty($this->_imageMime))
                {
                    switch ($this->_imageMime)
                    {
                        case 'image/jpeg':
                            $this->_resource = imagecreatefromjpeg($imageFile);
                            break;
                        case 'image/gif':
                            $this->_resource = imagecreatefromgif($imageFile);
                            break;
                        case 'image/png':
                            $this->_resource = imagecreatefrompng($imageFile);
                            break;
                        default:
                            $this->setError(JText::_('CREX_ERROR_IMAGE_INVALID_FORMAT'));
                    }
                }
            } else
            {
                $this->setError(JText::_('CREX_ERROR_IMAGE_FILE_INVALID'));
            }
            return $this;
        }

        /**
         * 
         * @param string $string
         * @param string $imageType
         * @return \ZtShortcodesImagerGd
         */
        public function loadFromString($string, $imageType = 'image/png')
        {
            $resource = imagecreatefromstring($string);
            $this->_resource = $resource;
            $this->_imageType = $imageType;
            return $this;
        }

        /**
         * Create color from R/B/G value
         * @param type $r
         * @param type $g
         * @param type $b
         */
        public function RBG($r, $g, $b)
        {
            if ($this->_isValidResource())
            {
                return imagecolorallocate($this->_resource, $r, $g, $b);
            }
        }

        /**
         * Get width of current image resource
         * @return float
         */
        public function getWidth()
        {
            if ($this->_isValidResource())
            {
                return imagesx($this->_resource);
            }
        }

        /**
         * Get height of current image resource
         * @return float
         */
        public function getHeight()
        {
            if ($this->_isValidResource())
            {
                return imagesy($this->_resource);
            }
        }

        /**
         * 
         * @return string
         */
        public function getMime()
        {
            return $this->_imageMime;
        }

        /**
         * @link http://php.net/manual/en/function.exif-read-data.php
         * @return array
         */
        public function getExif()
        {
            if ($this->_imageMime == 'image/jpeg' || $this->_imageType == 'image/png')
            {
                return exif_read_data($this->_imageFile);
            }
        }

        /**
         * Internal method to set watermark into exists resource
         * @link http://php.net/manual/en/function.imagecopy.php
         * @param type $imager
         * @param type $options
         * @return \ZtShortcodesImagerGd
         */
        protected function _setWatermark($waterMarkImager, $options = array())
        {
            /* Make sure we have valid resource before any process */
            if ($this->_isValidResource())
            {
                /* Do calc & apply watermark with cmd position */
                if (isset($options['position']))
                {
                    $parentImageSizer = $this->getImageSizer();
                    $parentImageSizer->getWatermarkPosition($waterMarkImager, $options['position']);
                    if (!imagecopy($this->_resource, $waterMarkImager->getResource(), $parentImageSizer->getX(), $parentImageSizer->getY(), 0, 0, $waterMarkImager->getWidth(), $waterMarkImager->getHeight()))
                    {
                        $this->setError('CREX_ERROR_IMAGE_WATERMARK_ERROR');
                    }
                } else
                {
                    if (!imagecopy($this->_resource, $waterMarkImager->getResource(), $options['x'], $options['y'], 0, 0, $waterMarkImager->getWidth(), $waterMarkImager->getHeight()))
                    {
                        $this->setError('CREX_ERROR_IMAGE_WATERMARK_ERROR');
                    }
                }
            }
            return $this;
        }

        /**
         * Internal method to do image resize
         * @param type $sizer
         * @return \ZtShortcodesImagerGd
         */
        protected function _resize($sizer)
        {
            /* Make sure we have valid resource before any process */
            if ($this->_isValidResource())
            {
                /* Create new source to do resize */
                $destResource = $this->_createImageResource($sizer->getWidth(), $sizer->getHeight());
                if (!empty($destResource) && (is_resource($destResource)))
                {
                    /**
                     * Copy source to destination
                     * @link http://php.net/manual/en/function.imagecopyresized.php
                     */
                    if (!imagecopyresampled($destResource, $this->_resource, 0, 0, $sizer->getX(), $sizer->getY(), $sizer->getWidth(), $sizer->getHeight(), $this->getWidth(), $this->getHeight()))
                    {
                        $this->setError('CREX_ERROR_IMAGE_RESIZE_ERROR');
                    }
                    $this->_closeResource($this->_resource); /* Close old resource */
                    $this->_resource = $destResource;
                } else
                {
                    $this->setError(JText::_('CREX_ERROR_IMAGE_INVALID_RESOURCE'));
                }
            }
            return $this;
        }

        /**
         * Internal method to do image cropping
         * @param ZtShortcodesImageSizer $sizer
         * @return \ZtShortcodesImagerGd
         */
        protected function _crop($sizer)
        {
            /* Make sure we have valid resource before any process */
            if ($this->_isValidResource())
            {
                /* Create new destination resource with new width & height */
                $destResource = $this->_createImageResource($sizer->getWidth(), $sizer->getHeight());
                if (!empty($destResource) && (is_resource($destResource)))
                {
                    if (!imagecopy($destResource, $this->_resource, 0, 0, $sizer->getX(), $sizer->getY(), $sizer->getWidth(), $sizer->getHeight()))
                    {
                        $this->setError('CREX_ERROR_IMAGE_CROP_ERROR');
                    }
                    $this->_closeResource($this->_resource); /* Close old resource */
                    $this->_resource = $destResource;
                } else
                {
                    $this->setError(JText::_('CREX_ERROR_IMAGE_INVALID_RESOURCE'));
                }
            }
            return $this;
        }

        /**
         * Resize image to fit $maxWidth & $maxHeight
         * @param type $maxWidth
         * @param type $maxHeight
         */
        public function fit($maxWidth, $maxHeight)
        {
            /* Already fits */
            if ($this->getWidth() <= $maxHeight && $this->getHeight() <= $maxHeight)
            {
                return $this;
            }
            /* Get fit sizer */
            $sizer = $this->getImageSizer();
            $sizer->fit($maxWidth, $maxHeight);
            /* Do resize */
            $this->_resize($sizer);
            return $this;
        }

        /**
         * Do resize by follow source ratio
         * @param type $newWidth
         * @param type $newHeight
         * @return \ZtShortcodesImagerGd
         */
        public function ratio($newWidth = 0, $newHeight = 0)
        {
            $sizer = $this->getImageSizer();
            $sizer->ratio($newWidth, $newHeight);
            $this->_resize($sizer);
            return $this;
        }

        public function resize($newWidth, $newHeight)
        {
            $sizer = $this->getImageSizer();
            $sizer->resize($newWidth, $newHeight);
            $this->_resize($sizer);
            return $this;
        }

        public function crop($newWidth, $newHeight, $options = array())
        {
            $sizer = $this->getImageSizer();
            if (isset($options['position']))
            {
                $sizer->getPosition($newWidth, $newHeight, $options['position']);
            } else
            {
                $sizer->crop($newWidth, $newHeight, $options['x'], $options['y']);
            }
            $this->_crop($sizer);

            return $this;
        }

        public function thumbnail($newWidth, $newHeight)
        {
            if ($this->getWidth() > $this->getHeight())
            {
                $this->ratio(0, $newHeight);
            } else
            {
                $this->ratio($newWidth, 0);
            }
            $this->crop($newWidth, $newHeight, array('position' => 'center'));
            return $this;
        }

        public function addWatermark($imageFile, $options = array())
        {
            if (JFile::exists($imageFile))
            {
                $watermark = new ZtShortcodesImagerGd();
                $watermark->loadFile($imageFile);
                $this->_setWatermark($watermark, $options);
                $watermark->closeResource();
            }
            return $this;
        }

        public function addText($text, $options = array())
        {
            $sizer = $this->getImageSizer();
            if ($this->_isValidResource())
            {
                if (isset($options['position']))
                {
                    $sizer->getPosition((($options['size'] * 4) / 3) * strlen($text), (($options['size'] * 4) / 3), $options['position']);
                    imagettftext($this->_resource, $options['size'], 0, $sizer->getX(), $sizer->getY(), $options['color'], $options['font'], $text);
                } else
                {
                    imagettftext($this->_resource, $options['size'], 0, $option['x'], $option['y'], $options['color'], $options['font'], $text);
                }
            }
            return $this;
        }

        public function effect($type, $times = 1)
        {
            
        }

        /**
         * 
         * @param type $saveFile
         * @param type $type
         * @param type $quality
         * @return type
         */
        public function saveToFile($saveFile, $type = null, $quality = 100)
        {
            /**
             * @todo Check target directory exists and create it if needed
             */
            return $this->_output($saveFile, $type, $quality);
        }

        /**
         * 
         * @param type $type
         * @param type $quality
         * @return type
         */
        public function render($type = null, $quality = 100)
        {
            return $this->_output(null, $type, $quality);
        }

        /**
         * Create new GD resource
         * @return GD resource
         */
        private function _createImageResource($width = null, $height = null)
        {
            if ($width === null)
                $width = $this->getWidth();
            if ($height === null)
                $height = $this->getHeight();
            $resource = imagecreatetruecolor($width, $height);
            if ($this->get('transparent'))
            {
                imagealphablending($resource, false);
                imagesavealpha($resource, true);
            }
            return $resource;
        }

        /**
         * Render image to memmory
         * @param string $filename
         * @param string $type
         * @param integer $quality
         * @return boolean
         */
        private function _output($filename = null, $type = null, $quality = 100)
        {
            $returnVal = false;
            if ($this->_isError())
            {
                return $this;
            }
            (is_null($type)) ? $this->_imageMime : $type;
            if (is_null($filename))
            {
                header('Content-Type: ' . $type);
            }
            switch ($this->_imageMime)
            {
                case 'image/jpeg':
                    $returnVal = imagejpeg($this->_resource, $filename, $quality);
                    break;
                case 'image/gif':
                    $returnVal = imagegif($this->_resource, $filename);
                    break;
                case 'image/png':
                    $returnVal = imagepng($this->_resource, $filename);
                    break;
            }
            return $this;
        }

        /**
         * 
         * @return image resource
         */
        public function getResource()
        {
            return $this->_resource;
        }

        /**
         * Close image resource
         * @return boolean
         */
        public function closeResource()
        {
            return $this->_closeResource($this->_resource);
        }

        /**
         * Make sure resource is created correctly
         */
        protected function _isValidResource()
        {
            return parent::_isValidResource() && is_resource($this->_resource);
        }

        /**
         * Destroy resource to release memory
         * @param type $resource
         * @return boolean
         */
        private function _closeResource($resource)
        {
            if (is_resource($resource))
            {
                return imagedestroy($resource);
            }
            return false;
        }

    }

}        