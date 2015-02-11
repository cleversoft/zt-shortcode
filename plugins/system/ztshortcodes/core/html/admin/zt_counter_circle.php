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

$prefix = 'zo2-sc-counter-';
?>

<form>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'effect'; ?>">Effect Bar</label>
        <?php echo getEffectJqueryEasing($prefix.'effect', 'form-control'); ?>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'barColor' ?>">Bar Color</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'barColor' ?>" placeholder="Counter Bar Color (exp: #969af2)">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'trackColor' ?>">Track Color</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'trackColor' ?>" placeholder="Counter Track Color (exp: #969af2)">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'scaleLength' ?>">Scale Length</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'scaleLength' ?>" placeholder="Counter Scale Length (exp: 10)">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'percent' ?>">Counter Percent</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'percent' ?>" placeholder="Counter Percent (exp: 90)">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'lineCap' ?>">Counter LineCap</label>
        <select id="<?php echo $prefix.'lineCap' ?>" class="form-control">
            <option value="butt">Butt</option>
            <option value="round">Round</option>
            <option value="square">Square</option>
        </select>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'lineWidth' ?>">Counter Line Width</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'lineWidth' ?>" placeholder="Counter Line Width (exp: 10)">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'size' ?>">Counter Around Size</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'size' ?>" placeholder="Counter Around (exp: 208)">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'duration' ?>">Counter Duration </label>
        <input type="text" class="form-control" id="<?php echo $prefix.'duration' ?>" placeholder="Counter Duration (exp: 1000)">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'contentType' ?>">Content Type</label>
        <select id="<?php echo $prefix.'contentType' ?>" class="form-control">
            <option value="">Default</option>
            <option value="percent">Percent</option>
            <option value="icon">Icon</option>
        </select>
    </div>
    <div class="form-group clearfix" id="<?php echo $prefix.'field-content' ?>">
        <label for="<?php echo $prefix.'content' ?>">Content</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'content' ?>" placeholder="Enter content">
    </div>
    <div class="form-group clearfix" id="<?php echo $prefix.'field-icon' ?>" style="display: none;">
        <label for="<?php echo $prefix.'icon' ?>">Icon (only show when content type is Icon)</label>
        <div id="<?php echo $prefix.'icon' ?>">
            <?php echo getAwesome(); ?>
        </div>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'extraClass' ?>">Extra Class</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'extraClass' ?>" placeholder="Counter Extra Class">
    </div>

</form>