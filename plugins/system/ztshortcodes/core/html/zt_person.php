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

<div class="zt-person col-sm-<?php echo $options->get('column'); ?> col-md-<?php echo $options->get('column'); ?>">
    <div class="zt-person-inner">
        <div class="zt-person-image">
            <img alt="John Doe" src="<?php echo $options->get('image'); ?>"
                 class="img-responsive img-<?php echo ($options->get('img-type')) ? $options->get('img-type') : 'default'; ?>">
        </div>
        <div class="zt-person-details">
            <div class="zt-person-author pull-left">
                <span class="person-name"><?php echo $options->get('name'); ?></span>
                <span class="person-position"><?php echo $options->get('position'); ?></span>
            </div>
            <div
                class="zt-person-social pull-right social-<?php echo ($options->get('social-type')) ? $options->get('social-type') : 'default'; ?>">
                <ul>
                    <?php if ($options->get('facebook')) { ?>
                        <li><a href="<?php echo $options->get('facebook'); ?>"><i class="fa fa-facebook"></i></a></li>
                    <?php } ?>
                    <?php if ($options->get('twitter')) { ?>
                        <li><a href="<?php echo $options->get('twitter'); ?>"><i class="fa fa-twitter"></i></a></li>
                    <?php } ?>
                    <?php if ($options->get('email')) { ?>
                        <li><a href="<?php echo $options->get('email'); ?>"><i class="fa fa-envelope-o"></i></a></li>
                    <?php } ?>
                    <?php if ($options->get('google')) { ?>
                        <li><a href="<?php echo $options->get('google'); ?>"><i class="fa fa-google-plus"></i></a></li>
                    <?php } ?>
                    <?php if ($options->get('skype')) { ?>
                        <li><a href="<?php echo $options->get('skype'); ?>"><i class="fa fa-skype"></i></a></li>
                    <?php } ?>
                    <?php if ($options->get('dribbble')) { ?>
                        <li><a href="<?php echo $options->get('dribbble'); ?>"><i class="fa fa-dribbble"></i></a></li>
                    <?php } ?>
                    <?php if ($options->get('linkedin')) { ?>
                        <li><a href="<?php echo $options->get('linkedin'); ?>"><i class="fa fa-linkedin"></i></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="zt-person-content clearfix"><?php echo $content; ?></div>
        </div>
    </div>
</div>