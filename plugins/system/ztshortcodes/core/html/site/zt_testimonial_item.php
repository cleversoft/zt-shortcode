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
    <div class="testimonial-content">
        <span style="background-color:<?php echo $attributes->get('bgColor'); ?>; color:<?php echo $attributes->get('textColor'); ?>; border-radius: <?php echo $attributes->get('borderRadius').'px'; ?>"><?php echo $content; ?></span>
    </div>
    <div style="color: <?php echo $attributes->get('textColor'); ?>;" class="author">
        <span style="color: <?php echo $attributes->get('textColor'); ?>;" class="testimonial-thumbnail">
            <?php if($attributes->get('customAvatar') != '') {
                echo '<img src="'. JURI::base() . $attributes->get('customAvatar') .'" alt="'. $attributes->get('name') .'" />';
            } else {
                echo '<span class="thumbnail-icon"><i class="fa fa-user"></i></span>';
            } ?>
        </span>
        <span class="company-name">
            <strong><?php echo $attributes->get('name'); ?></strong>, <a target="<?php echo $attributes->get('target'); ?>" href="#"><span><?php echo $attributes->get('company'); ?></span></a>
        </span>
    </div>
</div>