<?php
$prefix = 'zo2-sc-';
?>

<div class="shortcode-element-title">
    <h3>Dropcaps</h3>
</div>
<form>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'dropcaps-type'; ?>">Type</label>
        <select id="<?php echo $prefix.'dropcaps-type'; ?>" class="form-control">
            <option value="type-1">Type 1</option>
            <option value="type-2">Type 2</option>
            <option value="type-3">Type 3</option>
            <option value="type-4">Type 4</option>
        </select>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'dropcaps-bg-color'; ?>">Background color</label>
        <input type="label" class="form-control" id="<?php echo $prefix.'dropcaps-bg-color'; ?>" placeholder="Enter Background Color (exp: #000000).">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'dropcaps-text-color'; ?>">Background text color</label>
        <input type="label" class="form-control" id="<?php echo $prefix.'dropcaps-text-color'; ?>" placeholder="Enter text Color (exp: #ffffff).">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'dropcaps-content'; ?>">Content</label>
        <textarea placeholder="Dropcaps Content" rows="3" class="form-control" id="<?php echo $prefix.'dropcaps-content'; ?>"></textarea>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'dropcaps-shortcode-content'; ?>">Shortcode Content</label>
        <textarea placeholder="Shortcode Content" rows="3" class="form-control" id="<?php echo $prefix.'dropcaps-shortcode-content'; ?>"></textarea>
    </div>
    <div class="form-insert">
        <button type="button" id="<?php echo $prefix.'insert-dropcaps'; ?>" class="btn btn-primary button-insert-shortcode">Insert Shortcode</button>
    </div>
</form>