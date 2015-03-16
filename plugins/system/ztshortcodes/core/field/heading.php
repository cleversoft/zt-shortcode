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
if (!class_exists('ZtShortcodesFieldHeading'))
{

    /**
     * 
     */
    class ZtShortcodesFieldHeading extends ZtShortcodesField
    {

        public function render()
        {
            $html [] = '<div class="form-group">';
            $html [] = '<div class="form-field-heading">'. $this->_getLabel() .'</div>';
            $html [] = '</div>';
            return implode(PHP_EOL, $html);
        }

    }

}