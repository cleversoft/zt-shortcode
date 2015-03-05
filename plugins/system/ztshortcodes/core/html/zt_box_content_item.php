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

// Variable

$boxBgColor = $options->get('boxBgColor');
$title = $options->get('title');
$link = $options->get('link');
$linkText = $options->get('linkText');
$icon = $options->get('icon');
$iconAnimation = $options->get('iconAnimation');
$column = $options->get('column');
$iconStyle = $options->get('iconStyle');
$iconTop = $options->get('iconTop') . 'px';
$iconBottom = $options->get('iconBottom') . 'px';
$iconFontSize = $options->get('iconFontSize') . 'px';
$iconColor = $options->get('iconColor');
$iconBgColor = $options->get('iconBgColor');
$iconSize = $options->get('iconSize') . 'px';
$iconBorder = $options->get('iconBorder') . 'px';
$iconBorderColor = $options->get('iconBorderColor');
$linkColor = $options->get('linkColor');
$linkBgColor = $options->get('linkBgColor');
$linkColorHover = $options->get('linkColorHover');
$linkBgColorHover = $options->get('linkBgColorHover');

?>

<div
    class="clearfix zt-box-item <?php echo ($iconAnimation != '') ? $iconAnimation : ''; ?> col-sm-<?php echo $column; ?> col-md-<?php echo $column; ?>">
    <div class="zt-box-item-inner" style="background-color: <?php echo $boxBgColor; ?>">
        <div
            class="zt-box-icon zt-icon-<?php echo ($iconStyle != "") ? $iconStyle : 'default'; ?>"
            style="margin-bottom: <?php echo $iconBottom; ?>; margin-top: <?php echo $iconTop; ?>; width: <?php echo $iconSize; ?>; height: <?php echo $iconSize; ?>; border: <?php echo $iconBorder; ?> solid <?php echo $iconBorderColor; ?>; background-color: <?php echo $iconBgColor; ?>">
            <?php if ($iconAnimation == 'zoom-hover') { ?>
                <span class="after" style="border-color: <?php echo $iconBgColor; ?>"></span>
            <?php } ?>
            <i class="<?php echo $icon; ?> <?php echo ($iconAnimation == 'spin') ? 'fa-spin' : '' ?>"
               style="font-size: <?php echo $iconFontSize; ?>; color: <?php echo $iconColor; ?>; line-height: <?php echo ($iconBorder == '') ? $iconSize : $iconSize - ($iconBorder * 2) . 'px'; ?>;"></i>
        </div>
        <div class="zt-box-content">
            <h3 class="zt-box-title"><?php echo $title; ?></h3>

            <p><?php echo $content; ?></p>
            <?php if ($link != "") { ?>
                <a href="<?php echo $link; ?>" class="zt-box-link"
                   style="background-color: <?php echo $options->get('iconBorderColor'); ?>"
                   onmouseover="this.style.backgroundColor='<?php echo $linkBgColorHover; ?>'; this.style.color='<?php echo $linkColorHover; ?>'"
                   onmouseout="this.style.backgroundColor='<?php echo $linkBgColor; ?>';this.style.color='<?php echo $linkColor; ?>'">
                    <?php echo ($linkText) ? $linkText : 'Read More'; ?>
                </a>
            <?php } ?>
        </div>
    </div>
</div>
