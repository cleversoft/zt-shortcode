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

if ($options->get('type') == "link")
{
    $html .= '<a href="' . $options->get('link') . '">' . $options->get('text') . ' <span class="badge">' . $content . '</span></a>';
} else
{
    $html .= '<button class="btn btn-' . $options->get('buttonType') . '" type="button">' . $options->get('text') . ' <span class="badge">' . $content . '</span></button>';
}

echo $html;
?>