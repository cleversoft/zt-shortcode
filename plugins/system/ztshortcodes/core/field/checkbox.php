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
if (!class_exists('ZtShortcodesFieldCheckbox'))
{

    /**
     * 
     */
    class ZtShortcodesFieldCheckbox extends ZtShortcodesField
    {

        /**
         * 
         * @return string
         */
        public function render()
        {

            $html [] = '<div class="form-group">';
            $html [] = '<input '
                    . 'class="zt-input form-control"'
                    . 'type="checkbox" '
                    . 'data-property="' . $this->get('name') . '" '
                    . 'data-event="' . $this->get('event', 'click') . '"> ';
            $html [] = $this->get('label');
            $html [] = '</div>';
            return implode(PHP_EOL, $html);
        }

    }

}