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

<div id="<?php echo $prefix . 'container'; ?>" data-tag="zt_accordions" data-root="true">
    <div class="form-group clearfix">
        <label for="<?php echo $prefix . 'accordion-type'; ?>">Type</label>
        <select id="<?php echo $prefix . 'accordion-type'; ?>" class="form-control sc-selectbox" data-property="type">
            <option value="accordion">Accordion</option>
            <option value="toggle">Toggle</option>
        </select>
    </div>
    <div id="<?php echo $prefix . 'container'; ?>" data-tag="zt_accordion" class="container-child">
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'accordion-title' ?>">Accordion Title</label>
            <input type="text" class="form-control sc-textbox" data-property="title" id="<?php echo $prefix . 'accordion-title' ?>"
                   placeholder="Accordion Title" data-default="Accordion Title" value="Accordion Title">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'accordion-content' ?>">Accordion Content</label>
            <textarea placeholder="Content Accordion sc-textbox" data-property="" rows="3" class="form-control"
                      id="<?php echo $prefix . 'accordion-content' ?>" data-default="Accordion Content">Accordion Content</textarea>
        </div>
        <div class="form-group clearfix checkbox">
            <label>
                <input type="checkbox" class="sc-checkbox" data-property="active" id="<?php echo $prefix . 'accordion-active'; ?>"> Active
            </label>
        </div>
    </div>
</div>
<div class="form-group clearfix">
    <button class="btn btn-default" type="button" id="<?php echo $prefix . 'clone-element' ?>">Add New
        Accordion
    </button>
</div>