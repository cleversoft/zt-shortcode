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

$prefix = 'zt-sc-';
?>

<div id="<?php echo $prefix . 'container'; ?>" data-tag="zt_social_icons" data-root="true">
    <div class="form-group clearfix">
        <label for="<?php echo $prefix . 'social-boxed'; ?>">Boxed Social Icons</label>
        <select id="<?php echo $prefix . 'social-boxed'; ?>" class="form-control sc-selectbox" data-property="boxed">
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix . 'social-radius'; ?>">Social Icon Box Radius</label>
        <input type="text" class="form-control sc-textbox" data-property="radius"
               id="<?php echo $prefix . 'social-radius'; ?>"
               placeholder="Border Radius">
    </div>
    <div id="<?php echo $prefix . 'container'; ?>" data-tag="zt_social_icon" class="container-child">
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'icon'; ?>">Icon (Select Icon Social)</label>

            <div id="<?php echo $prefix . 'icon'; ?>">
                <input type="hidden" class="sc-selectbox" data-property="icon">
                <?php echo getAwesome(); ?>
            </div>
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'social-title'; ?>">Title</label>
            <input type="text" class="form-control sc-textbox" data-property="title"
                   id="<?php echo $prefix . 'social-title'; ?>"
                   placeholder="Title Social">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'social-link'; ?>">Link</label>
            <input type="text" class="form-control sc-textbox" data-property="link"
                   id="<?php echo $prefix . 'social-link'; ?>"
                   placeholder="Link Social">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'social-color'; ?>">Color</label>
            <input type="text" class="form-control sc-textbox" data-property="color"
                   id="<?php echo $prefix . 'social-color'; ?>"
                   placeholder="Social Color">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'social-bg-color'; ?>">Background Color</label>
            <input type="text" class="form-control sc-textbox" data-property="bgColor"
                   id="<?php echo $prefix . 'social-bg-color'; ?>"
                   placeholder="Social Background Color">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'social-hover-color'; ?>">Hover Color</label>
            <input type="text" class="form-control sc-textbox" data-property="hoverColor"
                   id="<?php echo $prefix . 'social-hover-color'; ?>"
                   placeholder="Social Hover Color">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'social-hover-bg-color'; ?>">Hover Background Color</label>
            <input type="text" class="form-control sc-textbox" data-property="hoverBgColor"
                   id="<?php echo $prefix . 'social-hover-bg-color'; ?>"
                   placeholder="Social Hover Background Color">
        </div>
    </div>
</div>
<div class="form-group clearfix">
    <button class="btn btn-default" type="button" id="<?php echo $prefix . 'clone-element' ?>">Add New Social</button>
</div>