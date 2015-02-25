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
    <div id="<?php echo $prefix . 'container'; ?>" data-tag="zt_i">
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'icon'; ?>">Icon (Please select an icon)</label>

            <div id="<?php echo $prefix . 'icon'; ?>">
                <input type="hidden" class="sc-selectbox" data-property="classIcon">
                <?php echo getAwesome(); ?>
            </div>
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'awesome-circle'; ?>">Icon Circle</label>
            <select id="<?php echo $prefix . 'awesome-circle'; ?>" class="form-control sc-selectbox" data-property="iconCircle">
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'awesome-size'; ?>">Icon Size</label>
            <select id="<?php echo $prefix . 'awesome-size'; ?>" class="form-control sc-selectbox" data-property="iconSize">
                <option value="small">Small</option>
                <option value="medium">Medium</option>
                <option value="large">Large</option>
            </select>
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'awesome-spin'; ?>">Icon Spinning</label>
            <select id="<?php echo $prefix . 'awesome-spin'; ?>" class="form-control sc-selectbox" data-property="spinningIcon">
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'awesome-color'; ?>">Icon Color</label>
            <input type="text" class="form-control sc-textbox" data-property="iconColor" id="<?php echo $prefix . 'awesome-color'; ?>"
                   placeholder="Icon Color (exp: #000000)">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'awesome-bgColor'; ?>">Icon Background Color</label>
            <input type="text" class="form-control sc-textbox" data-property="iconBgColor" id="<?php echo $prefix . 'awesome-bgColor'; ?>"
                   placeholder="Icon Background Color (exp: #000000)">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'awesome-bdColor'; ?>">Icon Border Color</label>
            <input type="text" class="form-control sc-textbox" data-property="iconBdColor" id="<?php echo $prefix . 'awesome-bdColor'; ?>"
                   placeholder="Icon Border Color (exp: #000000)">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'awesome-content'; ?>">Content</label>
            <textarea placeholder="Font Content" rows="3" class="form-control sc-textbox" data-property="" id="<?php echo $prefix . 'awesome-content'; ?>">Font Awesome</textarea>
        </div>
    </div>
</div>