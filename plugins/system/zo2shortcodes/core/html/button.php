<?php
/**
 * Created by PhpStorm.
 * User: chinhbeo
 * Date: 1/26/15
 * Time: 3:04 PM
 */
?>

<?php

$class = $html = '';
$class .= 'zo2-button';
$class .= ' size-' . $options->get('size');
$class .= ' color-' . $options->get('colour');
$class .= ' type-' . $options->get('type');
$class .= ' '.$options->get('extra-class');

//Html For Button
$html .= '<a href="' . $options->get('link') . '" class="' . $class . '">';
if ($options->get('type') == 'icon-reveal' || $options->get('type') == 'icon-stroke') {
    $html .= '<i class="' . $options->get('icon') . '"></i>';
}
$html .= '<span class="text">' . $content . '</span>';
$html .= '</a>';

echo $html;

?>

