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
if (!class_exists('ZtShortcodesFieldList'))
{

    /**
     * 
     */
    class ZtShortcodesFieldList extends ZtShortcodesField
    {

        public function render()
        {

            $html [] = '<div class="form-group">';
            $html [] = $this->_getLabel();
            $html [] = '<select name="' . $this->get('name') . '">';
            foreach ($this->get('options', array()) as $option)
            {
                $html [] = '<option value="' . $option['value'] . '">' . $option['label'] . '</option>';
            }
            $html [] = '</select>';
            $html [] = '</div>';
            return implode(PHP_EOL, $html);
        }

    }

}