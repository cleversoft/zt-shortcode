<?php
$prefix = 'zo2-sc-';
?>

<div class="shortcode-element-title">
    <h3>Progress Bar</h3>
</div>
<form>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'progress-trackcolor'; ?>">Track Color</label>
        <input type="label" class="form-control" id="<?php echo $prefix.'progress-trackcolor'; ?>" placeholder="Enter Track Color (exp: #eee000)">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'progress-barcolor'; ?>">Bar Color</label>
        <input type="label" class="form-control" id="<?php echo $prefix.'progress-barcolor'; ?>" placeholder="Enter Bar Color (exp: #eee000)">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'progress-titlecolor'; ?>">Title Color</label>
        <input type="label" class="form-control" id="<?php echo $prefix.'progress-titlecolor'; ?>" placeholder="Enter Title Color (exp: #eee000)">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'progress-trackcolor'; ?>">Track Color</label>
        <input type="label" class="form-control" id="<?php echo $prefix.'progress-trackcolor'; ?>" placeholder="Enter Track Color (exp: #eee000)">
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
</form>