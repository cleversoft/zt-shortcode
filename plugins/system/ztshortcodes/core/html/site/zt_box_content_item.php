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

// Variable

$boxBgColor = $attributes->get('boxBgColor');
$title = $attributes->get('title');
$link = $attributes->get('link');
$linkText = $attributes->get('linkText');
$icon = $attributes->get('icon');
$iconAnimation = $attributes->get('iconAnimation');
$column = $attributes->get('column');
$iconStyle = $attributes->get('iconStyle');
$iconTop = $attributes->get('iconTop') . 'px';
$iconBottom = $attributes->get('iconBottom') . 'px';
$iconFontSize = $attributes->get('iconFontSize') . 'px';
$iconColor = $attributes->get('iconColor');
$iconBgColor = $attributes->get('iconBgColor');
$iconSize = $attributes->get('iconSize') . 'px';
$iconBorder = $attributes->get('iconBorder') . 'px';
$iconBorderColor = $attributes->get('iconBorderColor');
$linkColor = $attributes->get('linkColor');
$linkBgColor = $attributes->get('linkBgColor');
$linkColorHover = $attributes->get('linkColorHover');
$linkBgColorHover = $attributes->get('linkBgColorHover');
?>

<div
    class="zt-box-item <?php echo ($iconAnimation != '') ? $iconAnimation : ''; ?> col-sm-<?php echo $column; ?> col-md-<?php echo $column; ?>">
    <div class="zt-box-item-inner" style="background-color: <?php echo $boxBgColor; ?>">
        <div
            class="zt-box-icon zt-icon-<?php echo ($iconStyle != "") ? $iconStyle : 'default'; ?>"
            style="margin-bottom: <?php echo $iconBottom; ?>; margin-top: <?php echo $iconTop; ?>; width: <?php echo $iconSize; ?>; height: <?php echo $iconSize; ?>; border: <?php echo $iconBorder; ?> solid <?php echo $iconBorderColor; ?>; background-color: <?php echo $iconBgColor; ?>">
<?php if ($iconAnimation == 'zoom-hover')
{ ?>
                <span class="after" style="border-color: <?php echo $iconBgColor; ?>"></span>
            <?php } ?>
            <i class="<?php echo $icon; ?> <?php echo ($iconAnimation == 'spin') ? 'fa-spin' : '' ?>"
               style="font-size: <?php echo $iconFontSize; ?>; color: <?php echo $iconColor; ?>; line-height: <?php echo ($iconBorder == '') ? $iconSize : $iconSize - ($iconBorder * 2) . 'px'; ?>;"></i>
        </div>
        <div class="zt-box-content">
            <h3 class="zt-box-title"><?php echo $title; ?></h3>

            <p><?php echo $content; ?></p>
            <?php if ($link != "")
            { ?>
                <a href="<?php echo $link; ?>" class="zt-box-link"
                   style="background-color: <?php echo $linkBgColor; ?>; color: <?php echo $linkColor; ?>"
                   onmouseover="this.style.backgroundColor = '<?php echo $linkBgColorHover; ?>';
                           this.style.color = '<?php echo $linkColorHover; ?>'"
                   onmouseout="this.style.backgroundColor = '<?php echo $linkBgColor; ?>';
                           this.style.color = '<?php echo $linkColor; ?>'">
                <?php echo ($linkText) ? $linkText : 'Read More'; ?>
                </a>
<?php } ?>
        </div>
    </div>
</div>
