<?php
$prefix = 'zo2-sc-awesome-';
?>

<form>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'icon'; ?>">Icon (Please select an icon)</label>
        <div id="<?php echo $prefix.'icon'; ?>">
            <?php echo getAwesome(); ?>
        </div>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'circle'; ?>">Icon Circle</label>
        <select id="<?php echo $prefix.'circle'; ?>" class="form-control">
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'size'; ?>">Icon Size</label>
        <select id="<?php echo $prefix.'size'; ?>" class="form-control">
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="large">Large</option>
        </select>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'spin'; ?>">Icon Spinning</label>
        <select id="<?php echo $prefix.'spin'; ?>" class="form-control">
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'color'; ?>">Icon Color</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'color'; ?>" placeholder="Icon Color (exp: #000000)">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'bgColor'; ?>">Icon Background Color</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'color'; ?>" placeholder="Icon Background Color (exp: #000000)">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'bdColor'; ?>">Icon Border Color</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'color'; ?>" placeholder="Icon Border Color (exp: #000000)">
    </div>
</form>