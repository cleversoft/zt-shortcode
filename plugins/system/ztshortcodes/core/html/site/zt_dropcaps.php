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
    $html = $style = '';
    $style = 'style="background-color: '. $attributes->get('bgColor') .'; color:'. $attributes->get('textColor') .'" ';

    $html .= '<span class="dropcap'. ' dropcap-'.$attributes->get('type') .'"'. ' '.$style .'>'. $content .'</span>';
    echo $html;
?>