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

$class = $html = '';
$class .= 'zt-button';
$class .= ' size-' . $attributes->get('size');
$class .= ' shape-' . $attributes->get('shape');
$class .= ' btn-' . $attributes->get('style');
$class .= ' ' . $attributes->get('extraclass');
$target = $attributes->get('target');

$style = "";
$color = $attributes->get('color');
if (trim($color) != '')
  $style .= 'color: ' . $color . ';';
$bgColor = $attributes->get('bgColor');
if (trim($bgColor) != '')
  $style .= 'background-color: ' . $bgColor . ';';
$borderWidth = $attributes->get('borderWidth');
if (trim($borderWidth) != '')
  $style .= 'border-width: ' . $borderWidth . 'px;';
$borderStyle = $attributes->get('borderStyle');
if (trim($borderStyle) != '')
  $style .= 'border-style: ' . $borderStyle . ';';
$borderColor = $attributes->get('borderColor');
if (trim($borderColor) != '')
  $style .= 'border-color: ' . $borderColor . ';';
$shadow = $attributes->get('shadow');
if (trim($shadow) != '') {
  $style .= 'box-shadow: ' . $shadow . ';';
  $style .= '-webkit-box-shadow: ' . $shadow . ';';
  $style .= '-moz-box-shadow: ' . $shadow . ';';
}
$textTransform = $attributes->get('textTransform');
  $style .= 'text-transform: ' . $textTransform . ';';
$margin = $attributes->get('margin');
if (trim($margin) != '')
  $style .= 'margin: ' . $margin . ';';
$padding = $attributes->get('padding');
if (trim($padding) != '')
  $style .= 'padding: ' . $padding . ';';


//Html For Button
$html .= '<a href="' . $attributes->get('link') . '" target="' .$target. '" class="' . $class . '" style="' . $style . '">';
if ($attributes->get('type') == 'icon-reveal' || $attributes->get('type') == 'icon-stroke')
{
    $html .= '<i class="' . $attributes->get('icon') . '"></i>';
}
$html .= '<span class="text">' . $content . '</span>';
$html .= '</a>';

echo $html;
