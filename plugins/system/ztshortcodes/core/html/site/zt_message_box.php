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
    if($attributes->get('width') != ''){
        $style .= 'style="width: '. $attributes->get('width') .'"';
    }
    $html .= '<div class="zt-message-box alert alert-'. $attributes->get('type') .' '. $attributes->get('extraclass') .'" role="alert">';
    if($attributes->get('icon') != ''){
        $html .= '<i class="'. $attributes->get('icon') .'"></i>';
    }
    $html .= $content;
    $html .= '</div>';

    echo $html;
?>