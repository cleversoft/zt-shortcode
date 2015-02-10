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

        public static function getUniqueString($prefix, $length = 5, $seed = '')
        {
            static $ids;
            $id = md5(microtime() . $seed . $prefix);
            $id = substr($id, 0, $length);
            if (empty($ids[$prefix . $id]))
            {
                $ids[$prefix . $id] = true;
                return $prefix . $id;
            } else
            {
                return self::getUniqueString($prefix, $length = 5, $id);
            }
        }

    }

}