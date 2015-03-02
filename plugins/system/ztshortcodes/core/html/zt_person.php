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

if ($options->get('tooltip') == "yes") {
    $toolTip = 'data-toggle="tooltip"';
}
?>

<div class="zt-person col-sm-<?php echo $options->get('column'); ?> col-md-<?php echo $options->get('column'); ?>">
    <div class="zt-person-image">
        <img alt="John Doe" src="<?php echo $options->get('image'); ?>"
             class="img-responsive img-<?php echo ($options->get('img-type')) ? $options->get('img-type') : 'default'; ?>">
    </div>
    <div class="zt-person-details">
        <div class="zt-person-author pull-left">
            <span class="person-name"><?php echo $options->get('name'); ?></span>
            <span class="person-position"><?php echo $options->get('position'); ?></span>
        </div>
        <div class="zt-person-social pull-right social-<?php echo ($options->get('social-type')) ? $options->get('social-type') : 'default'; ?>">
            <ul>
                <?php if ($options->get('facebook')) { ?>
                    <li><a href="<?php echo $options->get('facebook'); ?>"><i <?php echo $toolTip; ?>
                                data-placement="top" title="Facebook" class="fa fa-facebook"></i></a></li>
                <?php } ?>
                <?php if ($options->get('twitter')) { ?>
                    <li><a href="<?php echo $options->get('twitter'); ?>" <?php echo $toolTip; ?> data-placement="top"
                           title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <?php } ?>
                <?php if ($options->get('email')) { ?>
                    <li><a href="<?php echo $options->get('email'); ?>" <?php echo $toolTip; ?> data-placement="top"
                           title="Email"><i class="fa fa-envelope-o"></i></a></li>
                <?php } ?>
                <?php if ($options->get('google')) { ?>
                    <li><a href="<?php echo $options->get('google'); ?>" <?php echo $toolTip; ?> data-placement="top"
                           title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                <?php } ?>
            </ul>
        </div>
        <div class="zt-person-content clearfix"><?php echo $content; ?></div>
    </div>
</div>