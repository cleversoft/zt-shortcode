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
    <div id="<?php echo $prefix . 'container'; ?>" data-tag="zt_dropcaps">
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'dropcaps-type'; ?>">Type</label>
            <select id="<?php echo $prefix . 'dropcaps-type'; ?>" class="form-control sc-selectbox" data-property="type">
                <option value="type-1">Type 1</option>
                <option value="type-2">Type 2</option>
                <option value="type-3">Type 3</option>
                <option value="type-4">Type 4</option>
            </select>
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'dropcaps-bg-color'; ?>">Background color</label>
            <input type="text" data-property="bgColor" class="form-control sc-textbox" id="<?php echo $prefix . 'dropcaps-bg-color'; ?>"
                   placeholder="Enter Background Color (exp: #000000).">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'dropcaps-text-color'; ?>">Background text color</label>
            <input type="text" data-property="textColor" class="form-control sc-textbox" id="<?php echo $prefix . 'dropcaps-text-color'; ?>"
                   placeholder="Enter text Color (exp: #ffffff).">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'dropcaps-content'; ?>">Content</label>
            <input type="text" class="form-control sc-textbox" data-property="" id="<?php echo $prefix . 'dropcaps-content'; ?>"
                   placeholder="Content Dropcaps" value="D">
        </div>
    </div>
</div>