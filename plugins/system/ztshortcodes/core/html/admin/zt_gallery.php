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

<form>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'gallery-dir'; ?>">Gallery Dir</label>
        <input type="label" class="form-control" id="<?php echo $prefix.'gallery-dir'; ?>" placeholder="Enter dir in folder images">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'gallery-width'; ?>">Gallery width</label>
        <input type="label" class="form-control" id="<?php echo $prefix.'gallery-width'; ?>" placeholder="Enter width for popup gallery">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'gallery-height'; ?>">Gallery height</label>
        <input type="label" class="form-control" id="<?php echo $prefix.'gallery-height'; ?>" placeholder="Enter height for popup gallery">
    </div>
</form>