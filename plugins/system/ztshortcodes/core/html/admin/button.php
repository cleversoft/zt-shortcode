<?php
$prefix = 'zo2-sc-';
?>

<div class="shortcode-element-title">
    <h3>Buttons</h3>
</div>
<form>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'button-type'; ?>">Type</label>
        <select id="<?php echo $prefix.'button-type'; ?>" class="form-control">
            <option value="standard">Standard</option>
            <option value="stroke-to-fill">Stroke To Fill</option>
            <option value="icon-reveal">Icon Reveal</option>
            <option value="icon-stroke">Icon Stroke</option>
        </select>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'button-size'; ?>">Size</label>
        <select id="<?php echo $prefix.'button-size'; ?>" class="form-control">
            <option value="standard">Standard</option>
            <option value="small">Small</option>
            <option value="large">Large</option>
        </select>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'button-colour'; ?>">Colour</label>
        <select id="<?php echo $prefix.'button-colour'; ?>" class="form-control">
            <option value="accent">Accent</option>
            <option value="black">Black</option>
            <option value="white">White</option>
            <option value="blue">Blue</option>
            <option value="green">Green</option>
            <option value="pink">Pink</option>
            <option value="grey">Grey</option>
            <option value="light-grey">Light Grey</option>
            <option value="orange">Orange</option>
            <option value="turquoise">Turquoise</option>
            <option value="gold">Gold</option>
            <option value="transparent-light">Transparent Light</option>
            <option value="transparent-dark">Transparent Dark</option>
        </select>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'button-icon'; ?>">Icon</label>
        <div id="list-icon-button">
            <?php echo getAwesome(); ?>
        </div>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'button-link' ?>">Link</label>
        <input type="label" class="form-control" id="<?php echo $prefix.'button-link' ?>" placeholder="Enter Link Button">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'button-extra-class' ?>">Extra Class</label>
        <input type="label" class="form-control" id="<?php echo $prefix.'button-extra-class' ?>" placeholder="Enter Extra Class Button">
    </div>

    <div class="form-insert clearfix">
        <button type="button" id="<?php echo $prefix.'insert-button'; ?>" class="btn btn-primary button-insert-shortcode">Insert Shortcode</button>
    </div>
</form>