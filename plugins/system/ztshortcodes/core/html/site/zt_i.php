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

$html = $style = $class = '';
if ($attributes->get('iconCircle') == "yes")
{
    $style = 'style="background-color: ' . $attributes->get('iconBgColor') . '; color: ' . $attributes->get('iconColor') . '; border-color: ' . $attributes->get('iconBdColor') . '"';
    $class .= 'ic-circle';
} else
{
    if ($attributes->get('iconColor'))
    {
        $style = 'style="color: ' . $attributes->get('iconColor') . '"';
    }
}
$class .= ' ic-' . $attributes->get('iconSize') . ' ' . $attributes->get('classIcon');
if ($attributes->get('spinningIcon') == "yes")
{
    $class .= ' fa-spin';
}
if ($content != '')
{
    $class .= ' ic-list';
}

$html .= '<i class="zt-font-ic  ' . $class . '" ' . $style . '>' . $content . '</i>';
echo $html;