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
    <div id="<?php echo $prefix . 'container'; ?>" data-tag="zt_modal">
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'modal-id'; ?>">ID</label>
            <input type="text" class="form-control sc-textbox" data-property="id" id="<?php echo $prefix . 'modal-id'; ?>"
                   placeholder="Enter id modal" value="my-modal">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'modal-title'; ?>">Title</label>
            <input type="text" class="form-control sc-textbox" data-property="title"
                   id="<?php echo $prefix . 'modal-title'; ?>" placeholder="Enter title modal" value="Title Modal">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'modal-button-type'; ?>">Button Type</label>
            <select id="<?php echo $prefix . 'modal-button-type'; ?>" class="form-control sc-selectbox"
                    data-property="button-type">
                <option value="primary">Primary</option>
                <option value="success">Success</option>
                <option value="info">Info</option>
                <option value="warning">Warning</option>
                <option value="danger">Danger</option>
                <option value="link">link</option>
            </select>
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'modal-button-size'; ?>">Button Size</label>
            <select id="<?php echo $prefix . 'modal-button-size'; ?>" class="form-control sc-selectbox"
                    data-property="button-size">
                <option value="xs">XSmall</option>
                <option value="sm">Small</option>
                <option value="lg">Large</option>
            </select>
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'modal-button-text'; ?>">Button Text</label>
            <input type="text" class="form-control sc-textbox" data-property="button-text"
                   id="<?php echo $prefix . 'modal-button-text'; ?>" placeholder="Enter Button Text" value="Button Text">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'modal-content'; ?>">Extra Class</label>
            <textarea placeholder="Content Modal" rows="3" class="form-control sc-textbox" data-property=""
                      id="<?php echo $prefix . 'modal-content'; ?>">Content Modal</textarea>
        </div>
    </div>
</div>