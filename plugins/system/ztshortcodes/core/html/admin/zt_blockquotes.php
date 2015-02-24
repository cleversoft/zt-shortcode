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
    <div id="<?php echo $prefix . 'container'; ?>" data-tag="zt_blockquotes">
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'blockquotes-type'; ?>">Type</label>
            <select id="<?php echo $prefix . 'blockquotes-type'; ?>" class="form-control sc-selectbox" data-property="type">
                <option value="">Default</option>
                <option value="big">Big Quote</option>
                <option value="box">Box Quote</option>
            </select>
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'blockquotes-author'; ?>">Author</label>
            <input type="text" data-property="author" class="form-control sc-textbox" id="<?php echo $prefix . 'blockquotes-author'; ?>"
                   placeholder="Enter Author Blockquotes">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'blockquotes-author-link'; ?>">Author Link</label>
            <input type="text" data-property="author-link" class="form-control sc-textbox" id="<?php echo $prefix . 'blockquotes-author-link'; ?>"
                   placeholder="Enter Author Link Blockquotes">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'blockquotes-content'; ?>">Content</label>
            <textarea placeholder="Content Blockquotes Box" rows="3" class="form-control sc-textbox"
                      id="<?php echo $prefix . 'blockquotes-content'; ?>" data-property="">Content Blockquotes Box</textarea>
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'blockquotes-class'; ?>">Extra Class</label>
            <input type="text" class="form-control sc-textbox" id="<?php echo $prefix . 'blockquotes-class'; ?>"
                   placeholder="Enter Extra Class Blockquotes" data-property="extra-class">
        </div>
    </div>
</div>