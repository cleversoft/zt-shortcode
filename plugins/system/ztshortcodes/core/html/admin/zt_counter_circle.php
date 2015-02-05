<?php
$prefix = 'zo2-sc-counter-';
?>

<div class="shortcode-element-title">
    <h3>Counter Circle</h3>
</div>
<form>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'effect'; ?>">Effect Bar</label>
        <?php echo getEffectJqueryEasing($prefix.'effect', 'form-control'); ?>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'barcolor' ?>">Bar Color</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'barcolor' ?>" placeholder="Counter Bar Color (exp: #969af2)">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'trackcolor' ?>">Track Color</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'trackcolor' ?>" placeholder="Counter Track Color (exp: #969af2)">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'scalelength' ?>">Scale Length</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'scalelength' ?>" placeholder="Counter Scale Length (exp: 10)">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'percent' ?>">Counter Percent</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'percent' ?>" placeholder="Counter Percent (exp: 90)">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'lineCap' ?>">Counter LineCap</label>
        <select id="<?php echo $prefix.'lineCap' ?>" class="form-control">
            <option value="butt">Butt</option>
            <option value="round">Round</option>
            <option value="square">Square</option>
        </select>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'linewidth' ?>">Counter Line Width</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'linewidth' ?>" placeholder="Counter Line Width (exp: 10)">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'size' ?>">Counter Around Size</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'size' ?>" placeholder="Counter Around (exp: 208)">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'duration' ?>">Counter Duration </label>
        <input type="text" class="form-control" id="<?php echo $prefix.'duration' ?>" placeholder="Counter Duration (exp: 1000)">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'contenttype' ?>">Content Type</label>
        <select id="<?php echo $prefix.'contenttype' ?>" class="form-control">
            <option value="default">Default</option>
            <option value="percent">Percent</option>
            <option value="icon">Icon</option>
        </select>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'icon' ?>">Icon (only show when content type is Icon)</label>
        <div id="<?php echo $prefix.'icon' ?>">
            <?php echo getAwesome(); ?>
        </div>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'extraclass' ?>">Extra Class</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'extraclass' ?>" placeholder="Counter Extra Class">
    </div>

</form>