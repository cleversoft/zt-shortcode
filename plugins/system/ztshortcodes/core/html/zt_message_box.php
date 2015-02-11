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
    if($options->get('width') != ''){
        $style .= 'style="width: '. $options->get('width') .'"';
    }
    $html .= '<div class="zo2-message-box alert alert-'. $options->get('type') .' '. $options->get('extra-class') .'" role="alert">';
    if($options->get('icon') != ''){
        $html .= '<i class="'. $options->get('icon') .'"></i>';
    }
    $html .= $content;
    $html .= '</div>';

    echo $html;
?>