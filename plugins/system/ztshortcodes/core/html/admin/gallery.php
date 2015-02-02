<?php
$prefix = 'zo2-sc-';
?>

<div class="shortcode-element-title">
    <h3>Gallery</h3>
</div>
<form>
    <div class="form-group">
        <label for="<?php echo $prefix.'gallery-dir' ?>">Gallery Dir</label>
        <input type="label" class="form-control" id="<?php echo $prefix.'gallery-dir' ?>" placeholder="Enter dir in folder images">
    </div>
    <div class="form-group">
        <label for="<?php echo $prefix.'gallery-width' ?>">Gallery width</label>
        <input type="label" class="form-control" id="<?php echo $prefix.'gallery-width' ?>" placeholder="Enter width for popup gallery">
    </div>
    <div class="form-group">
        <label for="<?php echo $prefix.'gallery-height' ?>">Gallery height</label>
        <input type="label" class="form-control" id="<?php echo $prefix.'gallery-height' ?>" placeholder="Enter height for popup gallery">
    </div>
    <div class="form-insert">
        <button type="button" id="<?php echo $prefix.'insert-gallery'; ?>" class="btn btn-primary button-insert-shortcode">Insert Shortcode</button>
    </div>
</form>