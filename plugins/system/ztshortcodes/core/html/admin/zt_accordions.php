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
$prefix = 'zo2-sc-';
?>
<div class="form-group clearfix">
    <label for="<?php echo $prefix . 'accordion-type'; ?>">Type</label>
    <select id="<?php echo $prefix . 'accordion-type'; ?>" class="form-control">
        <option value="accordion">Accordion</option>
        <option value="toggle">Toggle</option>
    </select>
</div>
<div id="<?php echo $prefix . 'accordion-container' ?>">
    <div id="<?php echo $prefix . 'accordion-element' ?>">
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'accordion-title' ?>">Accordion Title</label>
            <input type="text" class="form-control" id="<?php echo $prefix . 'accordion-title' ?>" placeholder="Accordion Title" value="Accordion Title">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'accordion-content' ?>">Accordion Content</label>
            <textarea placeholder="Content Accordion" rows="3" class="form-control" id="<?php echo $prefix . 'accordion-content' ?>">Content Accordion</textarea>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" id="<?php echo $prefix . 'accordion-active'; ?>"> Active
            </label>
        </div>
    </div>
</div>
<div class="form-group clearfix">
    <button class="btn btn-default" type="button" id="<?php echo $prefix . 'new-accordion' ?>">Add New Accordion</button>
</div>