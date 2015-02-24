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

$prefix = 'zt-sc-testimonial-';
?>

<form>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'bgColor'; ?>">Background Color</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'bgColor'; ?>" placeholder="Background Color (exp: #f6f6f6)">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'textColor' ?>">Text Color</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'textColor' ?>" placeholder="Text Color (exp: #747474)">
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox" id="<?php echo $prefix.'slider'; ?>"> Allow Slide
        </label>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'name' ?>">Name</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'name' ?>" placeholder="Name author" value="Name author">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'company' ?>">Company</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'company' ?>" placeholder="Company" value="Company">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'customAvatar' ?>">Avatar</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'customAvatar' ?>" placeholder="Avatar (exp: image/avata/male.jpg)">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'borderRadius' ?>">Border Radius</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'borderRadius' ?>" placeholder="Border Radius (exp: 4)">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'link' ?>">Counter Duration</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'link' ?>" placeholder="Link ">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'target' ?>">Target</label>
        <select id="<?php echo $prefix.'target' ?>" class="form-control">
            <option value="_blank">_blank</option>
            <option value="_parent">_parent</option>
            <option value="_self">_self</option>
            <option value="_top">_top</option>
        </select>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix . 'content' ?>">Content</label>
        <textarea placeholder="Testimonial Content" rows="3" class="form-control" id="<?php echo $prefix . 'content' ?>">Testimonial Content</textarea>
    </div>
</form>