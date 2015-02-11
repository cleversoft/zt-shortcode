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
        <label for="<?php echo $prefix.'column-number'; ?>">Select Number Column</label>
        <select id="<?php echo $prefix.'column-number'; ?>" class="form-control">
            <option value="12">12</option>
            <option value="6">6</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
        </select>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'content-column'; ?>">Content Column</label>
        <div class="row">
            <div class="col-sm-4 col-md-4">
                <textarea placeholder="Content Column" rows="3" class="form-control" id="<?php echo $prefix.'content-column-1'; ?>">Content Column</textarea>
            </div>
            <div class="col-sm-4 col-md-4">
                <textarea placeholder="Content Column" rows="3" class="form-control" id="<?php echo $prefix.'content-column-2'; ?>">Content Column</textarea>
            </div>
            <div class="col-sm-4 col-md-4">
                <textarea placeholder="Content Column" rows="3" class="form-control" id="<?php echo $prefix.'content-column-3'; ?>">Content Column</textarea>
            </div>
        </div>
    </div>
</form>