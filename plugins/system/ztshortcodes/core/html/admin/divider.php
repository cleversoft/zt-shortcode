<?php
$prefix = 'zo2-sc-';
?>

<div class="shortcode-element-title">
    <h3>Divider</h3>
</div>
<form>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'divider-type'; ?>">Type</label>
        <select id="<?php echo $prefix.'divider-type'; ?>" class="form-control">
            <option value="hr">HR</option>
            <option value="thin">Thin</option>
            <option value="fat">Fat</option>
            <option value="dotted">Dotted</option>
            <option value="text-only">Go to top 1</option>
            <option value="icon-type-1">Go to top 1</option>
            <option value="icon-type-2">Go to top 2</option>
        </select>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'divider-text' ?>">Text</label>
        <input type="label" class="form-control" id="<?php echo $prefix.'divider-text' ?>" placeholder="Use Only type go to top">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'divider-icon'; ?>">Icon (use only type go top top 1 and go to top 2)</label>
        <div id="list-icon-divider">
            <?php echo getAwesome(); ?>
        </div>
    </div>
    <div class="form-insert">
        <button type="button" id="<?php echo $prefix.'insert-divider'; ?>" class="btn btn-primary button-insert-shortcode">Insert Shortcode</button>
    </div>
</form>