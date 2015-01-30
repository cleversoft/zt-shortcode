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
if (!class_exists('ZtShortcodesImager'))
{

    /**
     * Image process class
     */
    class ZtShortcodesImager
    {

        /**
         *
         * @var object 
         */
        private $_adapter;

        /**
         * 
         * @param string $adapterName
         */
        public function __construct($adapterName)
        {
            $this->_adapter = $this->_createAdapter($adapterName);
        }

        /**
         * Get adapter
         * @param type $adapterName
         * @return \ZtShortcodesImagerImagick|\ZtShortcodesImagerGd
         */
        private function _createAdapter($adapterName)
        {
            switch ($adapterName)
            {
                case 'gd':
                    return new ZtShortcodesImagerGd ();
                case 'imagick':
                    return new ZtShortcodesImagerImagick ();
                default :
                    return new ZtShortcodesImagerGd ();
            }
        }

        /**
         * Execute adapter method
         * @param type $name
         * @param type $arguments
         * @return type
         */
        public function __call($name, $arguments)
        {
            if (method_exists($this->_adapter, $name))
            {
                return call_user_func_array(array($this->_adapter, $name), $arguments);
            }
        }

    }

}