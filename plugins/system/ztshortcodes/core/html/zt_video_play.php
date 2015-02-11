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
?>

<?php

    // Function call video Link both youtube and vimeo, now
    if (!function_exists('zo2VideoEmbed')) {
        function zo2VideoEmbed($url, $width = 640, $height = 480) {
            if (strpos($url,'youtube') || strpos($url,'youtu.be')){
                return zo2VideoYoutube($url, $width, $height);
            } else {
                return zo2VideoVimeo($url, $width, $height);
            }
        }
    }

    // Function process video youtube
    if (!function_exists('zo2VideoYoutube')) {
        function zo2VideoYoutube($url, $width = 640, $height = 480) {
            preg_match('~(?:https?://)?(?:www.)?(?:youtube.com|youtu.be)/(?:watch\?v=)?([^\s]+)~', $url, $video_id);
            return '<iframe itemprop="video" src="http://www.youtube.com/embed/'. $video_id[1] .'?wmode=transparent" width="'. $width .'" height="'. $height .'" ></iframe>';
        }
    }

    // Function process video vimeo
    if (!function_exists('zo2VideoVimeo')) {
        function zo2VideoVimeo($url, $width = 640, $height = 480) {
            preg_match('/https?:\/\/(?:www\.)?vimeo.com\/(?:channels\/(?:\w+\/)?|groups\/([^\/]*)\/videos\/|album\/(\d+)\/video\/|)(\d+)(?:$|\/|\?)/', $url, $video_id);
            return '<iframe itemprop="video" src="http://player.vimeo.com/video/'. $video_id[3] .'?title=0&amp;byline=0&amp;portrait=0?wmode=transparent" width="'. $width .'" height="'. $height .'"></iframe>';
        }
    }

    echo zo2VideoEmbed($options->get('src'), $options->get('width'), $options->get('height'));
?>
