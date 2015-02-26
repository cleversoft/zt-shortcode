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
if (!class_exists('ZtShortcodesHelperImage'))
{

    /**
     * 
     */
    class ZtShortcodesHelperImage
    {

        public static function getThumbnail($source, $options)
        {
            $cacheDir = JPATH_ROOT . '/cache/ztshortcodes';
            $sourceInfo = pathinfo($source);
            $sourceShortDir = str_replace(JPATH_ROOT, '', $sourceInfo['dirname']);
            $cacheDir = $cacheDir . '/' . trim($sourceShortDir, DIRECTORY_SEPARATOR);
            if (!JFolder::exists($cacheDir))
            {
                JFolder::create($cacheDir);
            }
            $cacheFilePath = JPath::clean($cacheDir . '/' . $sourceInfo['basename']);

            if (JFile::exists($source))
            {
                if (!JFile::exists($cacheFilePath))
                {

                    $imager = new ZtShortcodesImager('gd');
                    $imager->loadFile($source);
                    $imager->thumbnail($options->get('width'), $options->get('height'));
                    $imager->saveToFile($cacheFilePath);
                }
                return $cacheFilePath;
            }
        }

    }

}