<?php

/**
 * ZT Shortcodes
 * A powerful Joomla plugin to help effortlessly customize your own content and style without HTML code knowledge
 *
 * @version     1.0.0
 * @author      ZooTemplate 
 * @email       support@zootemplate.com 
 * @link        http://www.zootemplate.com 
 * @copyright   Copyright (c) 2015 ZooTemplate
 * @license     GPL v2
 */
defined('_JEXEC') or die('Restricted access');

/**
 * Class exists checking
 */
if (!class_exists('ZtShortcodesHelperCommon'))
{

    /**
     * 
     */
    class ZtShortcodesHelperCommon
    {

        /**
         * 
         * @staticvar boolean $ids
         * @param type $prefix
         * @param int $length
         * @param type $seed
         * @return boolean|string
         */
        public static function getUniqueString($prefix, $length = 5, $seed = '')
        {
            static $ids;
            // Generate seed
            if ($seed == '')
            {
                $seed = uniqid($prefix, true);
            }
            $microtime = microtime() + rand();
            // Generate unique id
            $id = md5(microtime() . $seed . $prefix);
            // Cut string
            $id = substr($id, 0, $length);
            // Final string
            $str = $prefix . $id;
            // Make sure this string is not generated before            
            if (empty($ids[$str]))
            {
                $ids[$str] = true;
                return $str;
            } else // This tring already generated before than we try to regenerate it
            {
                return self::getUniqueString($prefix, $length, $id . $microtime++);
            }
        }

    }

}