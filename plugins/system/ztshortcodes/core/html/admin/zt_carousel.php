<?php
$prefix = 'zo2-sc-carousel-';
?>

<div class="shortcode-element-title">
    <h3>Carousel</h3>
</div>
<form>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix . 'showItem'; ?>">Item Carousel</label>
        <input type="text" class="form-control" id="<?php echo $prefix . 'showItem'; ?>"
               placeholder="Item Carousel (exp: 4)">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix . 'duration'; ?>">Duration Carousel</label>
        <input type="text" class="form-control" id="<?php echo $prefix . 'duration'; ?>"
               placeholder="Duration Carousel (exp: 1000)">
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox" id="<?php echo $prefix . 'showControl'; ?>"> Allow Control Carousel
        </label>
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox" id="<?php echo $prefix . 'showPager'; ?>"> Allow Pager Carousel
        </label>
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox" id="<?php echo $prefix . 'enableReponsive'; ?>"> Allow Responsive Carousel
        </label>
    </div>
    <div class="form-group clearfix">
        <label>Carousel Item</label>

        <div class="shortcoder-item" id="<?php echo $prefix.'item'; ?>">
            <div class="form-group clearfix">
                <label for="<?php echo $prefix . 'image' ?>">Avatar</label>
                <input type="text" class="form-control" id="<?php echo $prefix . 'image' ?>"
                       placeholder="Image (exp: image/avata/male.jpg)">
            </div>
            <div class="form-group clearfix">
                <label for="<?php echo $prefix . 'title' ?>">Title</label>
                <input type="text" class="form-control" id="<?php echo $prefix . 'title' ?>" placeholder="Title" />
            </div>
            <div class="form-group clearfix">
                <label for="<?php echo $prefix . 'link' ?>">Link </label>
                <input type="text" class="form-control" id="<?php echo $prefix . 'link' ?>" placeholder="Link " />
            </div>

        </div>
    </div>
    <div class="form-group clearfix">
        <a href="#" id="<?php echo $prefix . 'new-item'; ?>"><span class="text">+ Add New Item</span></a>
    </div>
</form>