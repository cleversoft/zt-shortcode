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

<div id="<?php echo $prefix . 'tabs-container' ?>">
    <div id="<?php echo $prefix . 'tabs-element' ?>">
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'tab-title' ?>">Title</label>
            <input type="text" class="form-control" id="<?php echo $prefix . 'tab-title' ?>" placeholder="Enter title">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'tab-content'; ?>">Content Tab</label>
            <textarea placeholder="Content Tabs" rows="3" class="form-control"
                      id="<?php echo $prefix . 'tab-content'; ?>">This is tab content</textarea>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" id="<?php echo $prefix . 'tab-active'; ?>"> Active
            </label>
        </div>
    </div>
</div>
<div class="form-group clearfix">
    <button class="btn btn-default" type="button" id="<?php echo $prefix . 'new-tab' ?>">Add New Tab</button>
</div>