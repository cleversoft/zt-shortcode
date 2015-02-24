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
<form>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix . 'carousel-showItem'; ?>">Item Carousel</label>
        <input type="text" class="form-control" id="<?php echo $prefix . 'carousel-showItem'; ?>"
               placeholder="Item Carousel (exp: 4)">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix . 'carousel-duration'; ?>">Duration Carousel</label>
        <input type="text" class="form-control" id="<?php echo $prefix . 'carousel-duration'; ?>"
               placeholder="Duration Carousel (exp: 1000)">
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox" id="<?php echo $prefix . 'carousel-showControl'; ?>"> Allow Control Carousel
        </label>
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox" id="<?php echo $prefix . 'carousel-showPager'; ?>"> Allow Pager Carousel
        </label>
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox" id="<?php echo $prefix . 'carousel-enableReponsive'; ?>"> Allow Responsive Carousel
        </label>
    </div>
    <div class="form-group clearfix">
        <label>Carousel Item</label>

        <div class="shortcoder-item" id="<?php echo $prefix.'carousel-item'; ?>">
            <div class="form-group clearfix">
                <label for="<?php echo $prefix . 'carousel-image' ?>">Avatar</label>
                <input type="text" class="form-control" id="<?php echo $prefix . 'carousel-image' ?>"
                       placeholder="Image (exp: image/avata/male.jpg)">
            </div>
            <div class="form-group clearfix">
                <label for="<?php echo $prefix . 'carousel-title' ?>">Title</label>
                <input type="text" class="form-control" id="<?php echo $prefix . 'carousel-title' ?>" placeholder="Title" />
            </div>
            <div class="form-group clearfix">
                <label for="<?php echo $prefix . 'carousel-link' ?>">Link </label>
                <input type="text" class="form-control" id="<?php echo $prefix . 'carousel-link' ?>" placeholder="Link " />
            </div>

        </div>
    </div>
    <div class="form-group clearfix">
        <a href="#" id="<?php echo $prefix . 'carousel-new-item'; ?>"><span class="text">+ Add New Item</span></a>
    </div>
</form>