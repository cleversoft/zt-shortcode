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
?>


<?php

// Variable
$icon = $attributes->get('icon');
$iconColor = $attributes->get('iconColor');
$from = $attributes->get('from');
$to = $attributes->get('to');
$speed = $attributes->get('speed');
$countColor = $attributes->get('countColor');
$contentColor = $attributes->get('contentColor');
$class = 'col-md-' . $attributes->get('column') . ' ' . 'col-sm-' . $attributes->get('column');
$unit = $attributes->get('unit');
$unitPos = $attributes->get('unitPos');
$updown = $attributes->get('updown');
$border = $attributes->get('border');
$bdColor = $attributes->get('bdColor');
$style = '';
if($border == 'yes'){
    $style = 'style="border: 1px solid '. $bdColor .'"';
}

$count_output = '';
$count_output .= '<div class="zt-count-asset '. $class .'">';
$count_output .= '<div class="zt-count-inner" '. $style .'>';
$count_output .= '<span class="counter-icon" style="color: '. $iconColor .'"><i class="' . $icon . '"></i></span>';
if($unitPos == 'before' and $unit != ''){
    $count_output .= '<span class="unit" style="color: '. $iconColor .'">'. $unit .'&nbsp;</span>';
}
$count_output .= '<div class="count-number" data-from="' . $from . '" data-to="' . $to . '" data-updown="'. $updown .'" data-speed="' . $speed . '" style="color: '. $countColor .'">';
if($updown == 'up'){
    $count_output .= $to;
} else {
    $count_output .= $from;
}
$count_output .= '</div>';
if($unitPos == 'after' and $unit != ''){
    $count_output .= '<span class="unit" style="color: '. $iconColor .'">&nbsp;'. $unit .'</span>';
}
$count_output .= '<h3 class="count-subject" style="color: '. $contentColor .'">' . $content . '</h3>';
$count_output .= '</div>';
$count_output .= '</div>';


echo $count_output;
?>



