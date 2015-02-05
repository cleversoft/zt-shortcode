<?php
$prefix = 'zo2-sc-';
?>

<div id="<?php echo $prefix . 'tabs-container' ?>">
    <div id="<?php echo $prefix . 'tabs-element' ?>">
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'tab-title' ?>">Title</label>
            <input type="text" class="form-control" id="<?php echo $prefix . 'tab-title' ?>" placeholder="Enter title">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'tab-content'; ?>">Content Tab</label>
            <textarea placeholder="Content Tabs" rows="3" class="form-control"
                      id="<?php echo $prefix . 'tab-content'; ?>"></textarea>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" id="<?php echo $prefix . 'tab-active'; ?>"> Active
            </label>
        </div>
    </div>
</div>
<div class="form-group clearfix">
    <button class="btn btn-default" type="button" id="<?php echo $prefix . 'new-tab' ?>">Add New Tab</button>
</div>