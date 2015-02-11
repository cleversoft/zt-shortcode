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

$prefix = 'zo2-sc-pricing-';
?>

<form>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix . 'type'; ?>">Pricing Type</label>
        <select id="<?php echo $prefix . 'type'; ?>" class="form-control">
            <option value="">Default</option>
            <option value="attached">Attached</option>
        </select>
    </div>
    <div id="<?php echo $prefix . 'container' ?>">
        <div id="<?php echo $prefix . 'element' ?>">
            <div class="form-group clearfix">
                <div class="form-group">
                    <label for="<?php echo $prefix . 'title' ?>">Pricing Title</label>
                    <input type="text" class="form-control" id="<?php echo $prefix . 'title' ?>"
                           placeholder="Enter Title Pricing" value="Title Pricing">
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" id="<?php echo $prefix . 'hightlight'; ?>"> Item Hightlight
                    </label>
                </div>
                <div class="form-group">
                    <label for="<?php echo $prefix . 'content' ?>">Content</label>
                    <textarea placeholder="Content Pricing" rows="3" class="form-control"
                              id="<?php echo $prefix . 'content' ?>">Content Pricing</textarea>
                </div>
                <div class="form-group">
                    <label for="<?php echo $prefix . 'content' ?>">Price</label>
                    <input type="text" class="form-control" id="<?php echo $prefix . 'price' ?>"
                           placeholder="Enter Price (exp: $|90|per month).">
                </div>
                <div class="form-group">
                    <label for="<?php echo $prefix . 'button-type' ?>">Button Type</label>
                    <select id="<?php echo $prefix . 'button-type'; ?>" class="form-control">
                        <option value="">Default</option>
                        <option value="primary">Primary</option>
                        <option value="success">Success</option>
                        <option value="info">Info</option>
                        <option value="warning">Warning</option>
                        <option value="danger">Danger</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="<?php echo $prefix . 'button-text' ?>">Button Text</label>
                    <input type="text" class="form-control" id="<?php echo $prefix . 'button-text' ?>"
                           placeholder="Enter Button Text" value="Button Text">
                </div>
            </div>
        </div>
    </div>
    <div class="form-group clearfix">
        <button class="btn btn-default" type="button" id="<?php echo $prefix . 'new-pricing-table' ?>">Add New Pricing</button>
    </div>
</form>