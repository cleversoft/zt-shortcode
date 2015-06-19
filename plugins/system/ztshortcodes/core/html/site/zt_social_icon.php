<?php
/**
 * Zt Shortcodes
 * A powerful Joomla plugin to help effortlessly customize your own content and style without HTML code knowledge
 * 
 * @name        Zt Shortcodes
 * @version     2.0.0
 * @package     Plugin
 * @subpackage  System
 * @author      ZooTemplate 
 * @email       support@zootemplate.com 
 * @link        http://www.zootemplate.com 
 * @copyright   Copyright (c) 2015 ZooTemplate
 * @license     GPL v2 
 */
defined('_JEXEC') or die('Restricted access');
?>

<?php
$icon = $attributes->get('icon');
$iconSize = $attributes->get('iconSize');
$title = $attributes->get('title');
$link = $attributes->get('link');
$color = $attributes->get('color');
$bgColor = $attributes->get('bgColor');
$hoverColor = $attributes->get('hoverColor');
$hoverBgColor = $attributes->get('hoverBgColor');

$titleLow = strtolower($title);
?>


<a title="<?php echo $title; ?>"
   style="color:<?php echo $color; ?>;background-color:<?php echo $bgColor; ?>;border-color:<?php echo $bgColor; ?>;"
   onmouseover="this.style.backgroundColor = '<?php echo $hoverBgColor; ?>';
           this.style.color = '<?php echo $hoverColor; ?>'"
   onmouseout="this.style.backgroundColor = '<?php echo $bgColor; ?>';
           this.style.color = '<?php echo $color; ?>'"
   href="<?php echo $link; ?>" target="_blank" class="zt-social-icon-item zt-icon-<?php echo $titleLow; ?>">
    <i class="<?php echo $icon . " " . $iconSize; ?>"></i>
</a>