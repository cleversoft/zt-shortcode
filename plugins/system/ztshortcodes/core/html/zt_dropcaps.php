<?php
/**
 * Created by PhpStorm.
 * User: chinhlv
 * Date: 1/30/15
 * Time: 1:15 AM
 */
?>

<?php
    $html = $style = '';
    $style = 'style="background-color: '. $options->get('bgColor') .'; color:'. $options->get('textColor') .'" ';

    $html .= '<span class="dropcap'. ' dropcap-'.$options->get('type') .'"'. ' '.$style .'>'. $content .'</span>';
    echo $html;
?>