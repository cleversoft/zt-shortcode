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
?>

<div
    class="zt-box-item <?php echo ($options->get('iconSpin') == 'spin-hover') ? 'spin-hover' : ''; ?> col-sm-<?php echo $options->get('column'); ?> col-md-<?php echo $options->get('column'); ?>">
    <div
        class="zt-box-icon zt-icon-<?php echo ($options->get('iconStyle') != "") ? $options->get('iconStyle') : 'default'; ?>"
        style="margin-bottom: <?php echo $options->get('iconTop') . 'px'; ?>; margin-top: <?php echo $options->get('iconBottom') . 'px'; ?>; width: <?php echo $options->get('iconSize') . 'px' ?>; height: <?php echo $options->get('iconSize') . 'px'; ?>; line-height: <?php echo $options->get('iconSize') . 'px' ?>; border: <?php echo $options->get('iconBorder') . 'px'; ?> solid <?php echo $options->get('iconBorderColor'); ?>">
        <i class="<?php echo $options->get('icon'); ?> <?php echo ($options->get('iconSpin') == 'spin') ? 'fa-spin' : '' ?>"
           style="font-size: <?php echo $options->get('iconFontSize') . 'px'; ?>; color: <?php echo $options->get('iconColor'); ?>"></i>
    </div>
    <div class="zt-box-content">
        <h3 class="zt-box-title"><?php echo $options->get('title'); ?></h3>

        <p><?php echo $content; ?></p>
        <?php if($options->get('link') == "") { ?>
        <a href="<?php echo $options->get('link') ?>" class="zt-box-link" style="background-color: <?php echo $options->get('iconBorderColor'); ?>"><?php echo $options->get('linkText') ?></a>
        <?php } ?>
    </div>
</div>
