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
<div class="form-group clearfix">
    <label for="<?php echo $prefix . 'column-number'; ?>">Select Number Column</label>
    <select id="<?php echo $prefix . 'column-number'; ?>" class="form-control">
        <option value="12">12</option>
        <option value="6">6</option>
        <option value="4">4</option>
        <option value="3" selected>3</option>
        <option value="2">2</option>
        <option value="1">1</option>
    </select>
</div>
<div class="form-group clearfix">
    <label for="<?php echo $prefix . 'content-column'; ?>">Content Column</label>
    <div class="row">
        <div id="<?php echo $prefix . 'container'; ?>" data-tag="zt_columns" data-root="true">
        </div>
    </div>
</div>
