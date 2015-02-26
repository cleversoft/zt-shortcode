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
<div id="<?php echo $prefix . 'container'; ?>" data-tag="zt_carousel" data-root="true">
    <div class="form-group clearfix">
        <label for="<?php echo $prefix . 'carousel-showItem'; ?>">Item Carousel</label>
        <input type="text" class="form-control sc-textbox" data-property="showItem"
               id="<?php echo $prefix . 'carousel-showItem'; ?>"
               placeholder="Item Carousel (exp: 4)" data-default="4" value="4">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix . 'carousel-duration'; ?>">Duration Carousel</label>
        <input type="text" class="form-control sc-textbox" data-property="duration"
               id="<?php echo $prefix . 'carousel-duration'; ?>"
               placeholder="Duration Carousel (exp: 1000)" data-default="1000" value="1000">
    </div>
    <div class="form-group clearfix checkbox">
        <label>
            <input type="checkbox" class="sc-checkbox" data-property="showControl"
                   id="<?php echo $prefix . 'carousel-showControl'; ?>"> Allow Control Carousel
        </label>
    </div>
    <div class="form-group clearfix checkbox">
        <label>
            <input type="checkbox" class="sc-checkbox" data-property="showPager"
                   id="<?php echo $prefix . 'carousel-showPager'; ?>"> Allow Pager Carousel
        </label>
    </div>
    <div class="form-group clearfix checkbox">
        <label>
            <input type="checkbox" class="sc-checkbox" data-property="enableReponsive"
                   id="<?php echo $prefix . 'carousel-enableReponsive'; ?>"> Allow Responsive
            Carousel
        </label>
    </div>
    <div id="<?php echo $prefix . 'container'; ?>" data-tag="zt_carousel_item" class="container-child">
        <label>Carousel Item</label>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'carousel-image' ?>">Avatar</label>
            <input type="text" class="form-control sc-textbox" data-property="image" id="<?php echo $prefix . 'carousel-image' ?>"
                   placeholder="Image (exp: image/avata/male.jpg)">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'carousel-title' ?>">Title</label>
            <input type="text" class="form-control sc-textbox" data-property="title" id="<?php echo $prefix . 'carousel-title' ?>"
                   placeholder="Title"/>
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'carousel-link' ?>">Link </label>
            <input type="text" class="form-control sc-textbox" data-property="link" id="<?php echo $prefix . 'carousel-link' ?>"
                   placeholder="Link "/>
        </div>
    </div>
</div>
<div class="form-group clearfix">
    <button class="btn btn-default" type="button" id="<?php echo $prefix . 'clone-element' ?>">Add New Carousel</button>
</div>