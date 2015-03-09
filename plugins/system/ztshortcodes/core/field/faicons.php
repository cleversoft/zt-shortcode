<?php
/**
 * @name        Zt Shortcodes
 * @package     Plugin
 * @subpackage  System
 * @author      Viet Vu <info@jooservices.com>
 * @link        http://jooservices.com
 * @copyright   JOOservices Ltd
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * 
 * @version    1.0.2
 * @since      1.0.0
 */
defined('_JEXEC') or die('Restricted access');

/**
 * Class exists checking
 */
if (!class_exists('ZtShortcodesFieldFaicons'))
{

    /**
     * 
     */
    class ZtShortcodesFieldFaicons extends CrexShortcodesField
    {

        /**
         * 
         * @return string
         */
        public function render()
        {

            $html [] = '<div class="form-group">';
            $html [] = $this->_getLabel();
            $html [] = $this->_getLatestIcons();
            $html [] = '<input class="fa-icon" name="icon" type="hidden" value=""/>';
            if ($this->get('required'))
            {
                $html[] = 'required';
            }
            $html [] = '</div>';
            return implode(PHP_EOL, $html);
        }

        /**
         * 
         * @return string
         */
        private function _getLatestIcons()
        {
            $html = '
                <div class="row-fluid fontawesome-icon-list">
                    <div class="fa-hover fa-icon span1"><i class="fa fa-bed"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-buysellads"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-cart-arrow-down"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-cart-plus"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-connectdevelop"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-dashcube"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-diamond"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-facebook-official"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-forumbee"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-heartbeat"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-hotel"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-leanpub"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-mars"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-mars-double"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-mars-stroke"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-mars-stroke-h"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-mars-stroke-v"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-medium"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-mercury"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-motorcycle"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-neuter"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-pinterest-p"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-sellsy"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-server"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-ship"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-shirtsinbulk"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-simplybuilt"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-skyatlas"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-street-view"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-subway"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-train"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-transgender"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-transgender-alt"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-user-plus"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-user-secret"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-user-times"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-venus"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-venus-double"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-venus-mars"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-viacoin"></i></div>    
                    <div class="fa-hover fa-icon span1"><i class="fa fa-whatsapp"></i></div>    
                </div>';
            return $html;
        }

    }

}