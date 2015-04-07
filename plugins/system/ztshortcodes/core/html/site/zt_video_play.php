<?php

/**
 * Zt Shortcodes
 * A powerful Joomla plugin to help effortlessly customize your own content and style without HTML code knowledge
 * 
 * @name        Zt Shortcodes
 * @version     2.0.0
 * @package     Plugin
 * @subpackage  System
 * @author      ZooTemplate 
 * @email       support@zootemplate.com 
 * @link        http://www.zootemplate.com 
 * @copyright   Copyright (c) 2015 ZooTemplate
 * @license     GPL v2 
 */
defined('_JEXEC') or die('Restricted access');

// Function call video Link both youtube and vimeo, now
if (!function_exists('ztVideoEmbed'))
{

    function ztVideoEmbed($url, $width = 640, $height = 480)
    {
        if (strpos($url, 'youtube') || strpos($url, 'youtu.be'))
        {
            return ztVideoYoutube($url, $width, $height);
        } else
        {
            return ztVideoVimeo($url, $width, $height);
        }
    }

}

// Function process video youtube
if (!function_exists('ztVideoYoutube'))
{

    function ztVideoYoutube($url, $width = 640, $height = 480)
    {
        preg_match('~(?:https?://)?(?:www.)?(?:youtube.com|youtu.be)/(?:watch\?v=)?([^\s]+)~', $url, $video_id);
        return '<iframe itemprop="video" src="http://www.youtube.com/embed/' . $video_id[1] . '?wmode=transparent" width="' . $width . '" height="' . $height . '" ></iframe>';
    }

}

// Function process video vimeo
if (!function_exists('ztVideoVimeo'))
{

    function ztVideoVimeo($url, $width = 640, $height = 480)
    {
        preg_match('/https?:\/\/(?:www\.)?vimeo.com\/(?:channels\/(?:\w+\/)?|groups\/([^\/]*)\/videos\/|album\/(\d+)\/video\/|)(\d+)(?:$|\/|\?)/', $url, $video_id);
        $videoId = isset($video_id[3]) ? $video_id[3] : '';
        return '<iframe itemprop="video" src="http://player.vimeo.com/video/' . $videoId . '?title=0&amp;byline=0&amp;portrait=0?wmode=transparent" width="' . $width . '" height="' . $height . '"></iframe>';
    }

}

echo ztVideoEmbed($attributes->get('src'), $attributes->get('width'), $attributes->get('height'));
?>
