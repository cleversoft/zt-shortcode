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
        <label for="<?php echo $prefix.'label-name'; ?>">Label</label>
        <input type="label" class="form-control" id="<?php echo $prefix.'label-name'; ?>" placeholder="Enter Label">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'label-type'; ?>">Type Label</label>
        <select id="<?php echo $prefix.'label-type'; ?>" class="form-control">
            <option value="">Default</option>
            <option value="primary">Primary</option>
            <option value="success">Success</option>
            <option value="info">Info</option>
            <option value="warning">Warning</option>
            <option value="danger">Danger</option>
        </select>
    </div>
</form>