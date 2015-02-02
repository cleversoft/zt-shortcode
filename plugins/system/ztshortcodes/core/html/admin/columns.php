<?php
$prefix = 'zo2-sc-';
?>

<div class="shortcode-element-title">
    <h3>Columns</h3>
</div>
<form>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'column-number'; ?>">Select Number Column</label>
        <select id="<?php echo $prefix.'column-number'; ?>" class="form-control">
            <option value="12">12</option>
            <option value="6">6</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
        </select>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'content-column'; ?>">Content Column</label>
        <div class="row">
            <div class="col-sm-4 col-md-4">
                <textarea placeholder="Content Column" rows="3" class="form-control" id="<?php echo $prefix.'content-column-1'; ?>"></textarea>
            </div>
            <div class="col-sm-4 col-md-4">
                <textarea placeholder="Content Column" rows="3" class="form-control" id="<?php echo $prefix.'content-column-2'; ?>"></textarea>
            </div>
            <div class="col-sm-4 col-md-4">
                <textarea placeholder="Content Column" rows="3" class="form-control" id="<?php echo $prefix.'content-column-3'; ?>"></textarea>
            </div>
        </div>
    </div>
    <div class="form-insert">
        <button type="button" id="<?php echo $prefix.'insert-column'; ?>" class="btn btn-primary button-insert-shortcode">Insert Shortcode</button>
    </div>
</form>