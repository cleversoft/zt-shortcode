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

if($options->get('tooltip') == "yes"){
    $toolTip = 'data-toggle="tooltip"';
}
?>

<div class="zt-person">
    <div class="zt-person-image">
        <img alt="John Doe" src="<?php echo $options->get('image'); ?>"
             class="img-responsive">
    </div>
    <div class="zt-person-desc">
        <div class="zt-person-author">
            <span class="person-name"><?php echo $options->get('name'); ?></span>
            <span class="person-position"><?php echo $options->get('position'); ?></span>
            <div class="zt-person-social">
                <ul>
                    <?php if($options->get('facebook')) { ?>
                    <li><a href="<?php echo $options->get('facebook'); ?>" <?php echo $toolTip; ?> data-placement="top" title="Facebook"></a> </li>
                    <?php } ?>
                    <?php if($options->get('twitter')) { ?>
                        <li><a href="<?php echo $options->get('twitter'); ?>" <?php echo $toolTip; ?> data-placement="top" title="Twitter"></a> </li>
                    <?php } ?>
                    <?php if($options->get('mail')) { ?>
                        <li><a href="<?php echo $options->get('mail'); ?>" <?php echo $toolTip; ?> data-placement="top" title="Email"></a> </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="zt-person-content clearfix"><?php echo $content; ?></div>
    </div>
</div>