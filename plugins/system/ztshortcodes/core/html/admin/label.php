<?php
    $prefix = 'zo2-sc-';
?>

<div class="shortcode-element-title">
    <h3>Label</h3>
</div>
<form>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'label-name'; ?>">Label</label>
        <input type="label" class="form-control" id="<?php echo $prefix.'label-name'; ?>" placeholder="Enter Label">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'label-type'; ?>">Type Label</label>
        <select id="<?php echo $prefix.'label-type'; ?>" class="form-control">
            <option value="default">Default</option>
            <option value="primary">Primary</option>
            <option value="success">Success</option>
            <option value="info">Info</option>
            <option value="warning">Warning</option>
            <option value="danger">Danger</option>
        </select>
    </div>
</form>