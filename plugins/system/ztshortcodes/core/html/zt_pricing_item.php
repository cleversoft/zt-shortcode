<?php
/**
 * Created by PhpStorm.
 * User: chinhlv
 * Date: 1/29/15
 * Time: 11:58 PM
 */

defined('_JEXEC') or die('Restricted access');

$html = $classHightLight = '';
$price = explode("|", $options->get('price'));
$classItem = 'col-sm-'. $options->get('item-column') .' col-md-'. $options->get('item-column') .' ';

if($options->get('item-hightlight') == 1){
        $classHightLight = 'recommended';
}

$html .= '<div class="'. $classItem .'"><div class="plan'. ' '.$options->get('level-item') .''. ' '. $classHightLight .'">';
$html .= '<div class="head"><h2>'. $options->get('title') .'</h2></div>';
$html .= '<ul class="item-list">'. $content .'</ul>';
$html .= '<div class="price"><h3><span class="symbol">'. $price[0] .'</span>'. $price[1] .'</h3><h4>'. $price[2] .'</h4></div>';
$html .= '<button type="button" class="btn btn-'. $options->get('button-type') .'">'. $options->get('button-text') .'</button>';
$html .= '</div></div>';

echo $html;

?>

