<?php
/**
 * Created by PhpStorm.
 * User: chinhbeo
 * Date: 1/28/15
 * Time: 11:13 AM
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