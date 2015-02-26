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
$html = $style = $class = '';
if($options->get('iconCircle') == "yes"){
    $style = 'style="background-color: '. $options->get('iconBgColor') .'; color: '. $options->get('iconColor') .'; border-color: '. $options->get('iconBdColor') .'"';
    $class .= 'ic-circle';
} else{
    if($options->get('iconColor')){
        $style = 'style="color: '. $options->get('iconColor') .'"';
    }
}
$class .= ' ic-'.$options->get('iconSize').' '.$options->get('classIcon');
if($options->get('spinningIcon') == "yes"){
    $class .= ' fa-spin';
}
if($content != ''){
    $class .= ' ic-list';
}

$html .= '<i class="zt-font-ic  '. $class .'" '. $style .'></i>'. $content .'';
echo $html;
?>
