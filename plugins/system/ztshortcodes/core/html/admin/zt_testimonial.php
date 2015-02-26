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
<div id="<?php echo $prefix . 'container'; ?>" data-tag="zt_testimonial" data-root="true">
    <div class="form-group clearfix checkbox">
        <label>
            <input type="checkbox" class="sc-checkbox" data-property="slider" id="<?php echo $prefix . 'testimonial-slider'; ?>"> Allow Slide
        </label>
    </div>
    <div id="<?php echo $prefix . 'container'; ?>" data-tag="zt_testimonial_item" class="container-child">
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'testimonial-bgColor'; ?>">Background Color</label>
            <input type="text" class="form-control sc-textbox" data-property="bgColor" id="<?php echo $prefix . 'testimonial-bgColor'; ?>"
                   placeholder="Background Color (exp: #f6f6f6)" data-default="#f6f6f6" value="#f6f6f6">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'testimonial-textColor' ?>">Text Color</label>
            <input type="text" class="form-control sc-textbox" data-property="textColor" id="<?php echo $prefix . 'testimonial-textColor' ?>"
                   placeholder="Text Color (exp: #747474)" data-default="#747474" value="#747474">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'testimonial-name' ?>">Name</label>
            <input type="text" class="form-control sc-textbox" data-property="name" id="<?php echo $prefix . 'testimonial-name' ?>"
                   placeholder="Name author" data-default="Name author" value="Name author">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'testimonial-company' ?>">Company</label>
            <input type="text" class="form-control sc-textbox" data-property="company" id="<?php echo $prefix . 'testimonial-company' ?>"
                   placeholder="Company" data-default="Company" value="Company">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'testimonial-position' ?>">Position</label>
            <input type="text" class="form-control sc-textbox" data-property="position" id="<?php echo $prefix . 'testimonial-position' ?>"
                   placeholder="Position" data-default="Position" value="Position">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'testimonial-customAvatar' ?>">Avatar</label>
            <input type="text" class="form-control sc-textbox" data-property="customAvatar" id="<?php echo $prefix . 'testimonial-customAvatar' ?>"
                   placeholder="Avatar (exp: image/avata/male.jpg)" data-default="">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'testimonial-borderRadius' ?>">Border Radius</label>
            <input type="text" class="form-control sc-textbox" data-property="borderRadius" id="<?php echo $prefix . 'testimonial-borderRadius' ?>"
                   placeholder="Border Radius (exp: 4)" data-default="4" value="4">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'testimonial-link' ?>">Link Website</label>
            <input type="text" class="form-control sc-textbox" data-property="link" id="<?php echo $prefix . 'testimonial-link' ?>"
                   placeholder="Link " data-default="#" value="#link">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'testimonial-target' ?>">Target</label>
            <select id="<?php echo $prefix . 'testimonial-target' ?>" class="form-control sc-selectbox" data-property="target" data-default="_blank">
                <option value="_blank">_blank</option>
                <option value="_parent">_parent</option>
                <option value="_self">_self</option>
                <option value="_top">_top</option>
            </select>
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'testimonial-content' ?>">Content</label>
            <textarea placeholder="Testimonial Content sc-textbox" data-property="" rows="3" class="form-control"
                      id="<?php echo $prefix . 'testimonial-content' ?>" data-default="Testimonial Content">Testimonial Content</textarea>
        </div>
    </div>
</div>
<div class="form-group clearfix">
    <button class="btn btn-default" type="button" id="<?php echo $prefix . 'clone-element' ?>">Add New Testimonial</button>
</div>