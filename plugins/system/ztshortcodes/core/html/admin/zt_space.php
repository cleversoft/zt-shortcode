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
    <div id="<?php echo $prefix . 'container'; ?>" data-tag="zt_space">
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'height'; ?>">Height</label>
            <input type="text" data-property="height" class="form-control sc-textbox" id="<?php echo $prefix . 'height'; ?>" placeholder="Enter Height">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'id'; ?>">ID Element</label>
            <input type="text" data-property="id" class="form-control sc-textbox" id="<?php echo $prefix . 'id'; ?>" placeholder="Enter ID Element">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'class'; ?>">Class Extend</label>
            <input type="text" data-property="class" class="form-control sc-textbox" id="<?php echo $prefix . 'class'; ?>" placeholder="Enter Class Extend">
        </div>
    </div>
</div>