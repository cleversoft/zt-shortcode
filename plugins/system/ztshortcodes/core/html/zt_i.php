<?php
/**
 * Created by PhpStorm.
 * User: chinhlv
 * Date: 1/30/15
 * Time: 12:51 AM
 */
?>

<?php
    $html = $style = $class = '';
    if($options->get('iconCircle') == "yes"){
        $style = 'style="background-color: '. $options->get('iconBgColor') .'; color: '. $options->get('iconColor') .'; border-color: '. $options->get('iconBdColor') .'"';
        $class .= 'ic-circle';
    } else{
        $style = 'style="color: '. $options->get('iconColor') .'"';
    }
    $class .= ' ic-'.$options->get('iconSize').' '.$options->get('classIcon');
    if($options->get('spinningIcon') == "yes"){
        $class .= ' fa-spin';
    }
    if($content != ''){
        $class .= ' ic-list';
    }

    $html .= '<i class="zt-font-ic  '. $class .'" '. $style .'>'. $content .'</i>';
    echo $html;
?>
