<?php
$prefix = 'zo2-sc-';
?>

<div class="shortcode-element-title">
    <h3>Tabs Content</h3>
</div>
<form>
    <div class="form-group">
        <label for="<?php echo $prefix.'tab-title' ?>">Type</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'label-name' ?>" placeholder="Enter title">
    </div>
    <div class="form-group">
        <label for="<?php echo $prefix.'content-tab'; ?>">Content Tab</label>
        <textarea placeholder="Content Tabs" rows="3" class="form-control" id="<?php echo $prefix.'content-tab'; ?>"></textarea>
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox" id="<?php echo $prefix.'tab-active'; ?>"> Active
        </label>
    </div>
    <button class="btn btn-primary" type="button" id="<?php echo $prefix.'new-tab' ?>">Add New Tab</button>
</form>