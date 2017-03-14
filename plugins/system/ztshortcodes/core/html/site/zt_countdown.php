<?php

/**
 * Zt Shortcodes
 * A powerful Joomla plugin to help effortlessly customize your own content and style without HTML code knowledge
 * 
 * @name        Zt Shortcodes
 * @version     2.0.5
 * @package     Plugin
 * @subpackage  System
 * @author      ZooTemplate 
 * @email       support@zootemplate.com 
 * @link        http://www.zootemplate.com 
 * @copyright   Copyright (c) 2017 ZooTemplate
 * @license     GPL v2 
 */
defined('_JEXEC') or die('Restricted access');

$class = $html = '';
$class .= 'zt-countdown';
$class .= ' ' . $attributes->get('extraclass');

$time = $attributes->get('time');

//Html For Button

$html .= '<div class="'. $class .'"></div>';
$html .= '<script>$(".zt-countdown").countdown({until: '. echo $time .'});</script>';
echo $html;
