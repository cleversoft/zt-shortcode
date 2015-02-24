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
    <div id="<?php echo $prefix . 'container'; ?>" data-tag="zt_badges">
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'badges-type'; ?>">Type</label>
            <select id="<?php echo $prefix . 'badges-type'; ?>" class="form-control sc-selectbox" data-property="type">
                <option value="link">Link</option>
                <option value="button">Button</option>
            </select>
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'badges-text'; ?>">Text Badges</label>
            <input type="text" class="form-control sc-textbox" id="<?php echo $prefix . 'badges-text'; ?>"
                   placeholder="Enter Text Badges" data-property="text">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'badges-link'; ?>">Link</label>
            <input type="text" class="form-control sc-textbox" id="<?php echo $prefix . 'badges-link'; ?>"
                   placeholder="Enter Link Badges" data-property="link">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'badges-buttonType'; ?>">Button Type(only badges type button)</label>
            <select id="<?php echo $prefix . 'badges-buttonType'; ?>" class="form-control sc-selectbox" data-property="buttonType">
                <option value="primary">Primary</option>
                <option value="success">Success</option>
                <option value="info">Info</option>
                <option value="warning">Warning</option>
                <option value="danger">Danger</option>
                <option value="link">Link</option>
            </select>
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'badges-content'; ?>">Content</label>
            <input type="text" value="4" class="form-control sc-textbox" id="<?php echo $prefix . 'badges-content'; ?>"
                   placeholder="Content Badges" data-property="">
        </div>
    </div>
</div>