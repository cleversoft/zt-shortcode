<?php

/**
 * @name        Crex Shortcodes
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
if (!class_exists('ZtShortcodesField'))
{

    /**
     * Field base class
     */
    class ZtShortcodesField extends JObject
    {

        /**
         * 
         * @param type $data
         * @return string
         */
        public static function _($data)
        {
            $className = 'ZtShortcodesField' . ucfirst($data['type']);
            $class = new $className($data);
            return call_user_func(array($class, 'render'));
        }

        /**
         * 
         * @return type
         */
        protected function _getLabel($class = '')
        {
            return '<label'
                    . ' class="' . $class . ' hasTooltip"'
                    . ' data-toggle="tooltip"'
                    . ' title="' . $this->get('description') . '" '
                    . '>'
                    . $this->get('label')
                    . '</label>';
        }

        protected function _getValidator()
        {
            $validator = $this->get('validator');

            if (is_array($validator))
            {
                $data = array();
                foreach ($validator as $key => $value)
                {
                    if ($key == 'required')
                    {
                        $data [] = 'required';
                    } else
                    {
                        $data [] = $key . '="' . $value . '"';
                    }
                }
                return trim(implode(' ', $data));
            }
        }

    }

}