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

<div id="<?php echo $prefix . 'container'; ?>" data-tag="" data-root="true">
    <div id="<?php echo $prefix . 'container'; ?>" data-tag="zt_testimonial">
        <div class="checkbox">
            <label>
                <input type="checkbox" id="<?php echo $prefix . 'testimonial-slider'; ?>"> Allow Slide
            </label>
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'testimonial-bgColor'; ?>">Background Color</label>
            <input type="text" class="form-control" id="<?php echo $prefix . 'testimonial-bgColor'; ?>"
                   placeholder="Background Color (exp: #f6f6f6)">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'testimonial-textColor' ?>">Text Color</label>
            <input type="text" class="form-control" id="<?php echo $prefix . 'testimonial-textColor' ?>"
                   placeholder="Text Color (exp: #747474)">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'testimonial-name' ?>">Name</label>
            <input type="text" class="form-control" id="<?php echo $prefix . 'testimonial-name' ?>"
                   placeholder="Name author" value="Name author">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'testimonial-company' ?>">Company</label>
            <input type="text" class="form-control" id="<?php echo $prefix . 'testimonial-company' ?>"
                   placeholder="Company" value="Company">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'testimonial-customAvatar' ?>">Avatar</label>
            <input type="text" class="form-control" id="<?php echo $prefix . 'testimonial-customAvatar' ?>"
                   placeholder="Avatar (exp: image/avata/male.jpg)">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'testimonial-borderRadius' ?>">Border Radius</label>
            <input type="text" class="form-control" id="<?php echo $prefix . 'testimonial-borderRadius' ?>"
                   placeholder="Border Radius (exp: 4)">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'testimonial-link' ?>">Counter Duration</label>
            <input type="text" class="form-control" id="<?php echo $prefix . 'testimonial-link' ?>" placeholder="Link ">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'testimonial-target' ?>">Target</label>
            <select id="<?php echo $prefix . 'testimonial-target' ?>" class="form-control">
                <option value="_blank">_blank</option>
                <option value="_parent">_parent</option>
                <option value="_self">_self</option>
                <option value="_top">_top</option>
            </select>
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'testimonial-content' ?>">Content</label>
            <textarea placeholder="Testimonial Content" rows="3" class="form-control"
                      id="<?php echo $prefix . 'testimonial-content' ?>">Testimonial Content</textarea>
        </div>
    </div>
</div>