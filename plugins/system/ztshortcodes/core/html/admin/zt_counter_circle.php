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
    <div id="<?php echo $prefix . 'container'; ?>" data-tag="zt_counter_circle">
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'counter-effect'; ?>">Effect Bar</label>
            <?php echo getEffectJqueryEasing($prefix . 'counter-effect', 'form-control sc-selectbox'); ?>
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'counter-barColor' ?>">Bar Color</label>
            <input type="text" class="form-control sc-textbox" data-property="barColor" id="<?php echo $prefix . 'counter-barColor' ?>"
                   placeholder="Counter Bar Color (exp: #969af2)">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'counter-trackColor' ?>">Track Color</label>
            <input type="text" class="form-control sc-textbox" data-property="trackColor" id="<?php echo $prefix . 'counter-trackColor' ?>"
                   placeholder="Counter Track Color (exp: #969af2)">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'counter-scaleLength' ?>">Scale Length</label>
            <input type="text" class="form-control sc-textbox" data-property="scaleLength" id="<?php echo $prefix . 'counter-scaleLength' ?>"
                   placeholder="Counter Scale Length (exp: 10)">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'counter-percent' ?>">Counter Percent</label>
            <input type="text" class="form-control sc-textbox" data-property="percent" id="<?php echo $prefix . 'counter-percent' ?>"
                   placeholder="Counter Percent (exp: 90)">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'counter-lineCap' ?>">Counter LineCap</label>
            <select id="<?php echo $prefix . 'counter-lineCap' ?>" class="form-control sc-selectbox" data-property="lineCap">
                <option value="butt">Butt</option>
                <option value="round">Round</option>
                <option value="square">Square</option>
            </select>
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'counter-lineWidth' ?>">Counter Line Width</label>
            <input type="text" class="form-control sc-textbox" data-property="lineWidth" id="<?php echo $prefix . 'counter-lineWidth' ?>"
                   placeholder="Counter Line Width (exp: 10)">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'counter-size' ?>">Counter Around Size</label>
            <input type="text" class="form-control sc-textbox" data-property="size" id="<?php echo $prefix . 'counter-size' ?>"
                   placeholder="Counter Around (exp: 208)">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'counter-duration' ?>">Counter Duration </label>
            <input type="text" class="form-control sc-textbox" data-property="duration" id="<?php echo $prefix . 'counter-duration' ?>"
                   placeholder="Counter Duration (exp: 1000)">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'counter-contentType' ?>">Content Type</label>
            <select id="<?php echo $prefix . 'counter-contentType' ?>" class="form-control sc-selectbox" data-property="content-type">
                <option value="">Default</option>
                <option value="percent">Percent</option>
                <option value="icon">Icon</option>
            </select>
        </div>
        <div class="form-group clearfix" id="<?php echo $prefix . 'counter-field-content' ?>">
            <label for="<?php echo $prefix . 'counter-content' ?>">Content</label>
            <input type="text" class="form-control sc-textbox" data-property="" id="<?php echo $prefix . 'counter-content' ?>"
                   placeholder="Enter content" value="Content">
        </div>
        <div class="form-group clearfix" id="<?php echo $prefix . 'counter-field-icon' ?>" style="display: none;">
            <label for="<?php echo $prefix . 'icon' ?>">Icon (only show when content type is Icon)</label>

            <div id="<?php echo $prefix . 'icon' ?>">
                <input type="hidden" class="sc-selectbox" data-property="icon">
                <?php echo getAwesome(); ?>
            </div>
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'counter-extraClass' ?>">Extra Class</label>
            <input type="text" class="form-control sc-textbox" data-property="extra-class" id="<?php echo $prefix . 'counter-extraClass' ?>"
                   placeholder="Counter Extra Class">
        </div>

    </div>
</div>