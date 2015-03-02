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

<div id="<?php echo $prefix . 'container'; ?>" data-tag="zt_persons" data-root="true">
    <div class="form-group clearfix checkbox">
        <label>
            <input type="checkbox" class="sc-checkbox" data-property="slider"
                   id="<?php echo $prefix . 'persons-slider'; ?>"> Allow Slider
        </label>
    </div>
    <div class="form-group clearfix checkbox">
        <label>
            <input type="checkbox" class="sc-checkbox" data-property="pager"
                   id="<?php echo $prefix . 'persons-pager'; ?>"> Allow Pager
        </label>
    </div>
    <div class="form-group clearfix checkbox">
        <label>
            <input type="checkbox" class="sc-checkbox" data-property="controls"
                   id="<?php echo $prefix . 'persons-controls'; ?>"> Allow Controls
        </label>
    </div>
    <div class="form-group clearfix checkbox">
        <label>
            <input type="checkbox" class="sc-checkbox" data-property="auto"
                   id="<?php echo $prefix . 'persons-auto'; ?>"> Auto Slider
        </label>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix . 'persons-margin'; ?>">Margin Item</label>
        <input type="text" data-property="margin" class="form-control sc-textbox" id="<?php echo $prefix . 'persons-margin'; ?>"
               placeholder="Enter Name" data-default="20" value="20">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix . 'persons-item'; ?>">Show Item</label>
        <input type="text" data-property="item" class="form-control sc-textbox" id="<?php echo $prefix . 'persons-item'; ?>"
               placeholder="Enter Name" data-default="4" value="4">
    </div>
    <div id="<?php echo $prefix . 'container'; ?>" data-tag="zt_person" class="container-child">
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'persons-name'; ?>">Name</label>
            <input type="text" data-property="name" class="form-control sc-textbox" id="<?php echo $prefix . 'title'; ?>"
                   placeholder="Enter Name" data-default="Person Name" value="Person Name">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'persons-position'; ?>">Position</label>
            <input type="text" data-property="position" class="form-control sc-textbox" id="<?php echo $prefix . 'persons-position'; ?>"
                   placeholder="Enter Position" data-default="Person Position" value="Person Position">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'persons-description'; ?>">Description</label>
            <textarea placeholder="Persons Description" rows="3" data-property="" class="form-control sc-textbox"
                      id="<?php echo $prefix . 'persons-description'; ?>" data-default="Person Description" value="Person Description">Persons Description</textarea>
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'persons-image'; ?>">Image</label>
            <input type="text" data-property="image" class="form-control sc-textbox" id="<?php echo $prefix . 'persons-image'; ?>"
                   placeholder="Enter Image" data-default="images/" value="images/">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'persons-image-style'; ?>">Image Style</label>
            <select id="<?php echo $prefix . 'persons-image-style'; ?>" class="form-control sc-selectbox" data-property="img-type">
                <option value="">none</option>
                <option value="rounded">Rounded</option>
                <option value="circle">Circle</option>
                <option value="thumbnail">Thumbnail</option>
            </select>
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'persons-social-style'; ?>">Social Style</label>
            <select id="<?php echo $prefix . 'persons-social-style'; ?>" class="form-control sc-selectbox" data-property="social-type">
                <option value="">none</option>
                <option value="rounded">Rounded</option>
                <option value="circle">Circle</option>
            </select>
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'person-facebook'; ?>">Facebook</label>
            <input type="text" data-property="facebook" class="form-control sc-textbox"
                   id="<?php echo $prefix . 'person-facebook'; ?>" placeholder="Enter Link Facebook" data-default="#facebook" value="#facebook">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'person-twitter'; ?>">Twitter</label>
            <input type="text" data-property="twitter" class="form-control sc-textbox"
                   id="<?php echo $prefix . 'person-facebook'; ?>" placeholder="Enter Link Twitter" data-default="#twitter" value="#twitter">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'person-email'; ?>">Email</label>
            <input type="text" data-property="email" class="form-control sc-textbox"
                   id="<?php echo $prefix . 'person-email'; ?>" placeholder="Enter Link Email" data-default="#email" value="#email">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'person-google'; ?>">Goolge +</label>
            <input type="text" data-property="google" class="form-control sc-textbox"
                   id="<?php echo $prefix . 'person-google'; ?>" placeholder="Enter Link G+" data-default="#google" value="#google">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'persons-column'; ?>">Column</label>
            <select id="<?php echo $prefix . 'persons-column'; ?>" class="form-control sc-selectbox" data-property="column">
                <option value="1">1/12</option>
                <option value="2">2/12</option>
                <option value="3">3/12</option>
                <option value="4">4/12</option>
                <option value="5">5/12</option>
                <option value="6">6/12</option>
                <option value="7">7/12</option>
                <option value="8">8/12</option>
                <option value="9">9/12</option>
                <option value="10">10/12</option>
                <option value="11">11/12</option>
                <option value="12">12/12</option>
            </select>
        </div>
    </div>
</div>
<div class="form-group clearfix">
    <button class="btn btn-default" type="button" id="<?php echo $prefix . 'clone-element' ?>">Add New Person</button>
</div>