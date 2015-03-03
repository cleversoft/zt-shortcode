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

<div id="<?php echo $prefix . 'container'; ?>" data-tag="zt_box_content" data-root="true">
    <div id="<?php echo $prefix . 'container'; ?>" data-tag="zt_box_content_item" class="container-child">
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'box-icon'; ?>">Icon</label>

            <div id="<?php echo $prefix . 'icon'; ?>">
                <input type="hidden" class="sc-selectbox" data-property="icon">
                <?php echo getAwesome(); ?>
            </div>
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'box-icon-style'; ?>">Icon Style</label>
            <select id="<?php echo $prefix . 'box-icon-style'; ?>" class="form-control sc-selectbox"
                    data-property="iconStyle">
                <option value="">Default</option>
                <option value="square">Square</option>
                <option value="circle">Circle</option>
                <option value="rounder">Rounder</option>
            </select>
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'box-icon-spin'; ?>">Icon Spin</label>
            <select id="<?php echo $prefix . 'box-icon-spin'; ?>" class="form-control sc-selectbox"
                    data-property="iconSpin">
                <option value="">Default</option>
                <option value="spin">Spin Always</option>
                <option value="spin-hover">Spin Hover</option>
            </select>
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'box-icon-color'; ?>">Icon Color</label>
            <input type="text" class="form-control sc-textbox" data-property="iconColor"
                   id="<?php echo $prefix . 'box-icon-color'; ?>"
                   placeholder="Icon Color">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'box-icon-border'; ?>">Icon Border Size</label>
            <input type="text" class="form-control sc-textbox" data-property="iconBorder"
                   id="<?php echo $prefix . 'box-icon-border'; ?>"
                   placeholder="Border Size (not allow border with icon type default)">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'box-icon-border-color'; ?>">Border Color</label>
            <input type="text" class="form-control sc-textbox" data-property="iconBorderColor"
                   id="<?php echo $prefix . 'box-icon-border-color'; ?>"
                   placeholder="Border Color">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'box-icon-size'; ?>">Icon Around Size</label>
            <input type="text" class="form-control sc-textbox" data-property="iconSize"
                   id="<?php echo $prefix . 'box-icon-size'; ?>"
                   placeholder="Icon Around Size (exp: 50 . for both width & height)">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'box-icon-mtop'; ?>">Icon Margin Top</label>
            <input type="text" class="form-control sc-textbox" data-property="iconTop"
                   id="<?php echo $prefix . 'box-icon-mtop'; ?>"
                   placeholder="Icon Margin Top">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'box-icon-mbottom'; ?>">Icon Margin Bottom</label>
            <input type="text" class="form-control sc-textbox" data-property="iconBottom"
                   id="<?php echo $prefix . 'box-icon-mbottom'; ?>"
                   placeholder="Icon Margin Top">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'box-icon-font-size'; ?>">Icon Font Size</label>
            <input type="text" class="form-control sc-textbox" data-property="iconFontSize"
                   id="<?php echo $prefix . 'box-icon-font-size'; ?>"
                   placeholder="Icon Font Size">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'box-title'; ?>">Title</label>
            <input type="text" class="form-control sc-textbox" data-property="title"
                   id="<?php echo $prefix . 'box-title'; ?>"
                   placeholder="Title">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'box-content'; ?>">Content</label>
            <textarea placeholder="Content sc-textbox" data-property="" rows="3" class="form-control"
                      id="<?php echo $prefix . 'box-content' ?>" data-default="Accordion Content">Nam vitae felis pretium, euismod ipsum placerat turpis. Aenean eu gravida arcu malesuada fermentum.</textarea>
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'box-link'; ?>">Link</label>
            <input type="text" class="form-control sc-textbox" data-property="link"
                   id="<?php echo $prefix . 'box-link'; ?>"
                   placeholder="Link">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'box-linkText'; ?>">Text Link</label>
            <input type="text" class="form-control sc-textbox" data-property="linkText"
                   id="<?php echo $prefix . 'box-linkText'; ?>"
                   placeholder="Text Link">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'box-column'; ?>">Column</label>
            <select id="<?php echo $prefix . 'box-column'; ?>" class="form-control sc-selectbox" data-property="column">
                <option value="1">1/12</option>
                <option value="2">2/12</option>
                <option value="3">3/12</option>
                <option value="4">4/12</option>
                <option value="5">5/12</option>
                <option value="6">6/12</option>
                <option value="7">7/12</option>
                <option value="8">8/12</option>
                <option value="9">9/12</option>
                <option value="10">10/12</option>
                <option value="11">11/12</option>
                <option value="12">12/12</option>
            </select>
        </div>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix . 'box-class'; ?>">Class Extend</label>
        <input type="text" class="form-control sc-textbox" data-property="class"
               id="<?php echo $prefix . 'box-class'; ?>"
               placeholder="CLass Extend">
    </div>
</div>
<div class="form-group clearfix">
    <button class="btn btn-default" type="button" id="<?php echo $prefix . 'clone-element' ?>">Add New Box Content</button>
</div>