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
if($attributes->get('iconCircle') == "yes"){
    $style = 'style="background-color: '. $attributes->get('iconBgColor') .'; color: '. $attributes->get('iconColor') .'; border-color: '. $attributes->get('iconBdColor') .'"';
    $class .= 'ic-circle';
} else{
    if($attributes->get('iconColor')){
        $style = 'style="color: '. $attributes->get('iconColor') .'"';
    }
}
$class .= ' ic-'.$attributes->get('iconSize').' '.$attributes->get('classIcon');
if($attributes->get('spinningIcon') == "yes"){
    $class .= ' fa-spin';
}
if($content != ''){
    $class .= ' ic-list';
}

$html .= '<i class="zt-font-ic  '. $class .'" '. $style .'>'. $content .'</i>';
echo $html;
?>
