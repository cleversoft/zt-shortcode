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

$path = ZtShortcodesPath::getInstance();
defined('_JEXEC') or die('Restricted access');


?>

<div class="testimonial-item">
    <div class="testimonial-item-inner">
        <div class="testimonial-content">
            <span
                style="background-color:<?php echo $options->get('bgColor'); ?>; color:<?php echo $options->get('textColor'); ?>; border-radius: <?php echo $options->get('borderRadius') . 'px'; ?>"><?php echo $content; ?></span>
        </div>
        <div style="color: <?php echo $options->get('textColor'); ?>;" class="author">
        <span style="color: <?php echo $options->get('textColor'); ?>;" class="testimonial-thumbnail">
            <?php if ($options->get('customAvatar') != '') {
                echo '<img src="' . JURI::base() . $options->get('customAvatar') . '" alt="' . $options->get('name') . '" />';
            } else {
                echo '<span class="thumbnail-icon"><i class="fa fa-user"></i></span>';
            } ?>
        </span>
        <span class="company-name">
            <strong><?php echo $options->get('name'); ?></strong>, <a target="<?php echo $options->get('target'); ?>"
                                                                      href="#"><span><?php echo $options->get('company'); ?></span></a>
        </span>
        </div>
    </div>
</div>