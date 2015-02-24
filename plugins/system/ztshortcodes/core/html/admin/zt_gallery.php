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
    <div id="<?php echo $prefix . 'container'; ?>" data-tag="zt_gallery">
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'gallery-dir'; ?>">Gallery Dir</label>
            <input type="text" data-property="dir" class="form-control sc-textbox" id="<?php echo $prefix . 'gallery-dir'; ?>"
                   placeholder="Enter dir in folder images">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'gallery-width'; ?>">Gallery width</label>
            <input type="text" data-property="width" class="form-control sc-textbox" id="<?php echo $prefix . 'gallery-width'; ?>"
                   placeholder="Enter width for popup gallery">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'gallery-height'; ?>">Gallery height</label>
            <input type="text" data-property="height" class="form-control sc-textbox" id="<?php echo $prefix . 'gallery-height'; ?>"
                   placeholder="Enter height for popup gallery">
        </div>
    </div>
</div>