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
<div id="<?php echo $prefix . 'container'; ?>" data-tag="zt_pricing" data-root="true">
    <div class="form-group clearfix">
        <label for="<?php echo $prefix . 'pricing-type'; ?>">Pricing Type</label>
        <select id="<?php echo $prefix . 'pricing-type'; ?>" class="form-control sc-selectbox" data-property="pricing-type">
            <option value="default">Default</option>
            <option value="attached">Attached</option>
        </select>
    </div>
    <div id="<?php echo $prefix . 'container'; ?>" data-tag="zt_pricing_item" class="container-child">
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'pricing-title' ?>">Pricing Title</label>
            <input type="text" class="form-control sc-textbox" data-property="title" id="<?php echo $prefix . 'pricing-title' ?>"
                   placeholder="Enter Title Pricing" value="Title Pricing">
        </div>
        <div class="checkbox form-group clearfix">
            <label>
                <input type="checkbox" class="sc-checkbox" data-property="item-hightlight" id="<?php echo $prefix . 'pricing-hightlight'; ?>"> Item Hightlight
            </label>
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'pricing-content' ?>">Content</label>
            <textarea placeholder="Content Pricing" rows="3" class="form-control sc-textbox" data-property=""
                      id="<?php echo $prefix . 'pricing-content' ?>">Content Pricing</textarea>
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'pricing-price' ?>">Price</label>
            <input type="text" class="form-control sc-textbox" data-property="price" id="<?php echo $prefix . 'pricing-price' ?>"
                   placeholder="Enter Price (exp: $|90|per month).">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'pricing-link' ?>">Link</label>
            <input type="text" class="form-control sc-textbox" data-property="link" id="<?php echo $prefix . 'pricing-link' ?>"
                   placeholder="Enter Link Pricing" value="#">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'pricing-button-text' ?>">Button Text</label>
            <input type="text" class="form-control sc-textbox" data-property="button-text" id="<?php echo $prefix . 'pricing-button-text' ?>"
                   placeholder="Enter Button Text" value="Button Text">
        </div>
    </div>
</div>
<div class="form-group clearfix">
    <button class="btn btn-default" type="button" id="<?php echo $prefix . 'clone-element' ?>">Add New
        Pricing
    </button>
</div>