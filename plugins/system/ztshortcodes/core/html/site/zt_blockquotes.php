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
defined('_JEXEC') or die('Restricted access');
?>
<?php

$html = '';
$html .= '<div class="zt-quote ' . $attributes->get('type') . '-quote">';
$html .= '<div class="zt-quote-inner">';
if ($attributes->get('type') == "box")
{
    $html .= '<i class="fa fa-quote-left"></i>';
}
$html .= '<p>' . $content . '</p>';
$html .= '<a class="zt-quote-author" href="' . $attributes->get('author-link') . '">&#8212 ' . $attributes->get('author') . '</a>';
$html .= '</div>';
$html .= '</div>';

echo $html;