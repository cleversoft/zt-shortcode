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
        <label for="<?php echo $prefix.'message-box-type'; ?>">Type</label>
        <select id="<?php echo $prefix.'message-box-type'; ?>" class="form-control">
            <option value="success">Success</option>
            <option value="info">Info</option>
            <option value="warning">Warning</option>
            <option value="danger">Danger</option>
        </select>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'message-box-icon'; ?>">Icon</label>
        <div id="list-icon-message-box">
            <?php echo getAwesome(); ?>
        </div>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'message-box-content'; ?>">Content</label>
        <textarea placeholder="Content Message Box" rows="3" class="form-control" id="<?php echo $prefix.'message-box-content'; ?>">Content Message Box</textarea>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'message-box-class'; ?>">Extra Class</label>
        <input type="label" class="form-control" id="<?php echo $prefix.'message-box-class'; ?>" placeholder="Enter Extra Class Message Box">
    </div>
</form>