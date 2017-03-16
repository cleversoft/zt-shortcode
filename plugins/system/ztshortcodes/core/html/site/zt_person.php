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

<div class="zt-person col-sm-<?php echo $attributes->get('column'); ?> col-md-<?php echo $attributes->get('column'); ?>">
    <div class="zt-person-image">
        <img alt="John Doe" src="<?php echo $attributes->get('image'); ?>"
             class="img-responsive img-<?php echo ($attributes->get('imgtype')) ? $attributes->get('imgtype') : 'default'; ?>">
    </div>
    <div class="zt-person-details">
        <div class="zt-person-author pull-left">
            <span class="person-name"><?php echo $attributes->get('name'); ?></span>
            <span class="person-position"><?php echo $attributes->get('position'); ?></span>
            <span class="person-email"><?php echo $attributes->get('email'); ?></span>
            <span class="person-phone"><?php echo $attributes->get('phone'); ?></span>
        </div>
        <div class="zt-person-intro">
            <?php echo $attributes->get('description'); ?>
        </div>
        <div class="zt-person-social pull-right social-<?php echo ($attributes->get('socialtype')) ? $attributes->get('socialtype') : 'default'; ?>">
            <ul>
                <?php if ($attributes->get('facebook'))
                {
                    ?>
                    <li><a href="<?php echo $attributes->get('facebook'); ?>"><i class="fa fa-facebook"></i></a></li>
                <?php } ?>
                <?php if ($attributes->get('twitter'))
                {
                    ?>
                    <li><a href="<?php echo $attributes->get('twitter'); ?>"><i class="fa fa-twitter"></i></a></li>
                <?php } ?>
                <?php if ($attributes->get('instagram'))
                {
                    ?>
                    <li><a href="<?php echo $attributes->get('instagram'); ?>"><i class="fa fa-instagram"></i></a></li>
                <?php } ?>
                <?php if ($attributes->get('google'))
                {
                    ?>
                    <li><a href="<?php echo $attributes->get('google'); ?>"><i class="fa fa-google-plus"></i></a></li>
                <?php } ?>
                <?php if ($attributes->get('skype'))
                {
                    ?>
                    <li><a href="<?php echo $attributes->get('skype'); ?>"><i class="fa fa-skype"></i></a></li>
                <?php } ?>
                <?php if ($attributes->get('dribbble'))
                {
                    ?>
                    <li><a href="<?php echo $attributes->get('dribbble'); ?>"><i class="fa fa-dribbble"></i></a></li>
                <?php } ?>
                <?php if ($attributes->get('linkedin'))
                {
                    ?>
                    <li><a href="<?php echo $attributes->get('linkedin'); ?>"><i class="fa fa-linkedin"></i></a></li>
                <?php } ?>
            </ul>
        </div>
        <div class="zt-person-content clearfix"><?php echo $content; ?></div>
    </div>
</div>