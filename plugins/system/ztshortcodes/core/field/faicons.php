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
    class ZtShortcodesFieldFaicons extends ZtShortcodesField
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
            $path = ZtShortcodesPath::getInstance();
            $jsonAwesome = $path->getUrl('Shortcodes://assets/font-awesome/awesome.json');
            $bufferAwesome = file_get_contents($jsonAwesome);
            $listAwesome = json_decode($bufferAwesome);

            $html = '';
            $html .= '<div class="list-awesome-font"><ul>';
            foreach($listAwesome as $key => $fontName){
                $html .= '<li><a href="#"><i class="fa '. $key .'"></i></a></li>';
            }

            $html .= '</ul></div>';

            return $html;
        }

    }

}