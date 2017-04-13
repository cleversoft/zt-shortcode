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

$html = $classHightLight = '';
$price = explode("|", $attributes->get('price'));
if (!isset($price[0]))
{
    $price[0] = '';
}
if (!isset($price[1]))
{
    $price[1] = '';
}
if (!isset($price[2]))
{
    $price[2] = '';
}
if ($attributes->get('itemhightlight') == "yes")
{
    $classHightLight = 'recommended';
}

$html .= '<div class="pricing-item pull-left"><div class="plan' . ' ' . $attributes->get('level-item') . '' . ' ' . $classHightLight . '">';
$html .= '<div class="head">';
if($attributes->get('position') == 'above') 
  $html .= '<div class="price"><h3><span class="symbol">' . $price[0] . '</span>' . $price[1] . '</h3><h4>' . $price[2] . '</h4></div>';
$html .= '<h2>' . $attributes->get('title') . '</h2></div>';
$html .= '<ul class="item-list">' . $content . '</ul>';
if($attributes->get('position') == 'below') 
  $html .= '<div class="price"><h3><span class="symbol">' . $price[0] . '</span>' . $price[1] . '</h3><h4>' . $price[2] . '</h4></div>';
$html .= '<a class="btn btn-success" href="' . $attributes->get('link') . '">' . $attributes->get('buttontext') . '</a>';
$html .= '</div></div>';

echo $html;
?>

