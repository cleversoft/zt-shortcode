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

$prefix = 'zo2-sc-badges-';
?>

<form>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'type'; ?>">Type</label>
        <select id="<?php echo $prefix.'type'; ?>" class="form-control">
            <option value="link">Link</option>
            <option value="button">Button</option>
        </select>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'text'; ?>">Text Badges</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'text'; ?>" placeholder="Enter Text Badges">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'link'; ?>">Link</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'link'; ?>" placeholder="Enter Link Badges">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'buttonType'; ?>">Button Type(only badges type button)</label>
        <select id="<?php echo $prefix.'buttonType'; ?>" class="form-control">
            <option value="primary">Primary</option>
            <option value="success">Success</option>
            <option value="info">Info</option>
            <option value="warning">Warning</option>
            <option value="danger">Danger</option>
            <option value="link">Link</option>
        </select>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'content'; ?>">Content</label>
        <input type="text" value="4" class="form-control" id="<?php echo $prefix.'content'; ?>" placeholder="Content Badges">
    </div>
</form>