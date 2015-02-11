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

$html = $classHightLight = '';
$price = explode("|", $options->get('price'));

if($options->get('item-hightlight') == 1){
        $classHightLight = 'recommended';
}

$html .= '<div class="pricing-item pull-left"><div class="plan'. ' '.$options->get('level-item') .''. ' '. $classHightLight .'">';
$html .= '<div class="head"><h2>'. $options->get('title') .'</h2></div>';
$html .= '<ul class="item-list">'. $content .'</ul>';
$html .= '<div class="price"><h3><span class="symbol">'. $price[0] .'</span>'. $price[1] .'</h3><h4>'. $price[2] .'</h4></div>';
$html .= '<button type="button" class="btn btn-'. $options->get('button-type') .'">'. $options->get('button-text') .'</button>';
$html .= '</div></div>';

echo $html;

?>

