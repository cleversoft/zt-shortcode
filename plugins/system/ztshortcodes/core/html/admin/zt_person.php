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
    <div id="<?php echo $prefix . 'container'; ?>" data-tag="zt_title">
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'title'; ?>">Title</label>
            <input type="text" data-property="" class="form-control sc-textbox" id="<?php echo $prefix . 'title'; ?>" placeholder="Enter  Top">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'title-type'; ?>">Type</label>
            <select id="<?php echo $prefix . 'title-type'; ?>" class="form-control sc-selectbox" data-property="type">
                <option value="">No Style</option>
                <option value="single-border">Single Border Solid</option>
                <option value="double-border">Double Border Solid</option>
                <option value="single-bottom">Single Border Bottom</option>
                <option value="double-bottom">Double Border Bottom</option>
            </select>
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'title-margin-top'; ?>">Margin Top</label>
            <input type="text" data-property="marginTop" class="form-control sc-textbox" id="<?php echo $prefix . 'title-margin-top'; ?>" placeholder="Enter Margin Top">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'title-margin-bottom'; ?>">Margin Top</label>
            <input type="text" data-property="marginBottom" class="form-control sc-textbox" id="<?php echo $prefix . 'title-margin-bottom'; ?>" placeholder="Enter Margin Bottom">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'id'; ?>">ID Element</label>
            <input type="text" data-property="id" class="form-control sc-textbox" id="<?php echo $prefix . 'id'; ?>" placeholder="Enter ID Element">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'class'; ?>">Class Extend</label>
            <input type="text" data-property="class" class="form-control sc-textbox" id="<?php echo $prefix . 'class'; ?>" placeholder="Enter Class Extend">
        </div>
    </div>
</div>