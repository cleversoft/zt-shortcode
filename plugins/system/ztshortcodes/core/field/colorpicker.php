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
if (!class_exists('ZtShortcodesFieldColorpicker'))
{

    /**
     * 
     */
    class ZtShortcodesFieldColorpicker extends ZtShortcodesField
    {

        public function render()
        {
            $html [] = '<div class="form-group">';
            $html [] = $this->_getLabel();
            $html [] = '<input'
                    . ' class="form-control bootstrapColorPicker"'
                    . ' type="text"'
                    . ' value="' . $this->get('value') . '"'
                    . ' data-property="' . $this->get('name') . '"'
                    . ' data-event="' . $this->get('event', 'change') . '"'
                    . ' style="background-color:' . $this->get('value', '#fff') . ';"';
                    
            if ($this->get('required'))
            {
                $html[] = 'required';
            }
            $html [] = ' >';
            $html [] = '</div>';
            return implode(PHP_EOL, $html);
        }

    }

}