<?php

/**
 * Zo2 Shortcodes (http://www.zo2framework.org)
 *
 * @link        http://www.zo2framework.org
 * @link        http://github.com/aploss/zo2
 * @author      ZooTemplate <http://zootemplate.com>
 * @copyright   Copyright (c) 2013 APL Solutions (http://apl.vn)
 * @license     GPL v2
 */
defined('_JEXEC') or die('Restricted access');

/**
 * Class exists checking
 */
if (!class_exists('ZtShortcodesLoader'))
{

    /**
     * 
     */
    class ZtShortcodesLoader
    {

        /**
         * 
         * @param string $className
         */
        public static function autoloadZo2Psr2($className)
        {
            if (substr($className, 0, 1) != 'J')
            {
                $path = ZtShortcodesPath::getInstance();
                $filePath = $path->getPathByClassname($className);
                if ($filePath)
                {
                    return require_once $filePath;
                }
            }
            return false;
        }

    }

}