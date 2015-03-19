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

$class = $html = '';
$class .= 'zt-button';
$class .= ' size-' . $attributes->get('size');
$class .= ' color-' . $attributes->get('colour');
$class .= ' type-' . $attributes->get('type');
$class .= ' ' . $attributes->get('extra-class');

//Html For Button
$html .= '<a href="' . $attributes->get('link') . '" class="' . $class . '">';
if ($attributes->get('type') == 'icon-reveal' || $attributes->get('type') == 'icon-stroke')
{
    $html .= '<i class="' . $attributes->get('icon') . '"></i>';
}
$html .= '<span class="text">' . $content . '</span>';
$html .= '</a>';

echo $html;
