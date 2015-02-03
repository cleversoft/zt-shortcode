<?php
$prefix = 'zo2-sc-';
?>

<div class="shortcode-element-title">
    <h3>Progress Bar</h3>
</div>
<form>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix . 'progress-type'; ?>">Type</label>
        <select id="<?php echo $prefix . 'progress-type'; ?>" class="form-control">
            <option value="default">Default</option>
            <option value="success">Success</option>
            <option value="info">Info</option>
            <option value="warning">Warning</option>
            <option value="danger">Danger</option>
        </select>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix . 'strip-type'; ?>">Strip Type</label>
        <select id="<?php echo $prefix . 'strip-type'; ?>" class="form-control">
            <option value="default">Default</option>
            <option value="striped">Striped</option>
        </select>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix . 'animated-type'; ?>">Animated Type</label>
        <select id="<?php echo $prefix . 'animated-type'; ?>" class="form-control">
            <option value="default">Default</option>
            <option value="active">Active</option>
        </select>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'progress-current-value'; ?>">Current Value</label>
        <input type="label" class="form-control" id="<?php echo $prefix.'progress-current-value'; ?>" placeholder="Enter Current Value (exp: 70)">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'progress-min-value'; ?>">Min Value</label>
        <input type="label" class="form-control" id="<?php echo $prefix.'progress-min-value'; ?>" placeholder="Enter Min Value (exp: 0)">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'progress-max-value'; ?>">Max Value</label>
        <input type="label" class="form-control" id="<?php echo $prefix.'progress-max-value'; ?>" placeholder="Enter Max Value (exp: 100)">
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox" id="<?php echo $prefix.'progress-hide-content'; ?>"> Hidden Content
        </label>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'progress-shortcode-content'; ?>">Shortcode Content</label>
        <textarea placeholder="Shortcode Content" rows="3" class="form-control" id="<?php echo $prefix.'progress-shortcode-content'; ?>"></textarea>
    </div>
    <div class="form-insert">
        <button type="button" id="<?php echo $prefix . 'insert-progress'; ?>"
                class="btn btn-primary button-insert-shortcode">Insert Shortcode
        </button>
    </div>
</form>