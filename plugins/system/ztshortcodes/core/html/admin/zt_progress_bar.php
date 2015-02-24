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
    <div id="<?php echo $prefix . 'container'; ?>" data-tag="zt_progress_bar">
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'progress-trackcolor'; ?>">Track Color</label>
            <input type="text" data-property="trackColor" class="form-control sc-textbox" id="<?php echo $prefix . 'progress-trackcolor'; ?>"
                   placeholder="Enter Track Color (exp: #eee000)">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'progress-barcolor'; ?>">Bar Color</label>
            <input type="text" data-property="barColor" class="form-control sc-textbox" id="<?php echo $prefix . 'progress-barcolor'; ?>"
                   placeholder="Enter Bar Color (exp: #eee000)">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'progress-titlecolor'; ?>">Title Color</label>
            <input type="text" data-property="titleColor" class="form-control sc-textbox" id="<?php echo $prefix . 'progress-titlecolor'; ?>"
                   placeholder="Enter Title Color (exp: #eee000)">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'strip-type'; ?>">Strip Type</label>
            <select id="<?php echo $prefix . 'strip-type'; ?>" class="form-control sc-selectbox" data-property="strip">
                <option value="">Default</option>
                <option value="striped">Striped</option>
            </select>
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'animated-type'; ?>">Animated Type</label>
            <select id="<?php echo $prefix . 'animated-type'; ?>" class="form-control sc-selectbox" data-property="animated">
                <option value="">Default</option>
                <option value="active">Active</option>
            </select>
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'progress-current-value'; ?>">Current Value</label>
            <input type="text" data-property="now-value" class="form-control sc-textbox" id="<?php echo $prefix . 'progress-current-value'; ?>"
                   placeholder="Enter Current Value (exp: 70)">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'progress-min-value'; ?>">Min Value</label>
            <input type="text" data-property="min-value" class="form-control sc-textbox" id="<?php echo $prefix . 'progress-min-value'; ?>"
                   placeholder="Enter Min Value (exp: 0)">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'progress-max-value'; ?>">Max Value</label>
            <input type="text" data-property="max-value" class="form-control sc-textbox" id="<?php echo $prefix . 'progress-max-value'; ?>"
                   placeholder="Enter Max Value (exp: 100)">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'progress-content'; ?>">Progress bar content</label>
            <input type="text" data-property="" class="form-control sc-textbox" id="<?php echo $prefix . 'progress-content'; ?>"
                   value="Progress Bar" placeholder="Enter Progress Bar Content">
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" class="sc-checkbox" data-property="hidden-content" id="<?php echo $prefix . 'progress-hide-content'; ?>"> Hidden Content
            </label>
        </div>
    </div>
</div>