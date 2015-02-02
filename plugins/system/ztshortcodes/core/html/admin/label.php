<?php
    $prefix = 'zo2-sc-';
?>

<div class="shortcode-element-title">
    <h3>Label</h3>
</div>
<form>
    <div class="form-group">
        <label for="<?php echo $prefix.'label-name' ?>">Label</label>
        <input type="label" class="form-control" id="<?php echo $prefix.'label-name' ?>" placeholder="Enter Label">
    </div>
    <div class="form-group">
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
    <div class="form-insert">
        <button type="button" id="<?php echo $prefix.'insert-label'; ?>" class="btn btn-primary button-insert-shortcode">Insert Shortcode</button>
    </div>
</form>