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
    $html = $classTop = '';
    if($options->get('type') == 'text-only'){
        $classTop = 'go-to-top';
    } else if($options->get('type') == 'icon-type-1'){
        $classTop = 'go-to-top-icon-1';
    } else if($options->get('type') == 'icon-type-2'){
        $classTop = 'go-to-top-icon-2';
    }

    $html .= '<div class="zt-divider-wrap">';
    $html .= '<div class="zt-divider '. $classTop .' divider-'. $options->get('type') .'">';
    if($options->get('type') == 'text-only' || $options->get('type') == 'icon-type-1' || $options->get('type') == 'icon-type-2'){
        $html .= '<a href="#" class="animate-top">';
        if($options->get('type') == 'text-only'){
            $html .= $options->get('text');
        } else if($options->get('type') == 'icon-type-1'){
            $html .= '<i class="'. $options->get('icon') .'"></i>';
        } else {
            $html .= $options->get('text').' <i class="'. $options->get('icon') .'"></i>';
        }
        $html .= '</a>';
    }
    $html .= '</div>';
    $html .= '</div>';
    echo $html;
?>