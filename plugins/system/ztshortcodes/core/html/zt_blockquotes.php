<?php
/**
 * Created by PhpStorm.
 * User: chinhbeo
 * Date: 1/28/15
 * Time: 1:50 PM
 */
?>

<?php
$html = '';
$html .= '<div class="zo2-quote ' . $options->get('type') . '-quote">';
$html .= '<div class="zo2-quote-inner">';
if($options->get('type') == "box"){
    $html .= '<i class="fa fa-quote-left"></i>';
}
$html .= '<p>'. $content .'</p>';
$html .= '<a class="zo2-quote-author" href="' . $options->get('author-link') . '">&#8212 ' . $options->get('author') . '</a>';
$html .= '</div>';
$html .= '</div>';

echo $html;
?>