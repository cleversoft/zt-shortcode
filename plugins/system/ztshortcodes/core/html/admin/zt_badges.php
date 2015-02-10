<?php
$prefix = 'zo2-sc-badges-';
?>

<form>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'type'; ?>">Type</label>
        <select id="<?php echo $prefix.'type'; ?>" class="form-control">
            <option value="link">Link</option>
            <option value="button">Button</option>
        </select>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'text'; ?>">Text Badges</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'text'; ?>" placeholder="Enter Text Badges">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'link'; ?>">Link</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'link'; ?>" placeholder="Enter Link Badges">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'buttonType'; ?>">Button Type(only badges type button)</label>
        <select id="<?php echo $prefix.'buttonType'; ?>" class="form-control">
            <option value="primary">Primary</option>
            <option value="success">Success</option>
            <option value="info">Info</option>
            <option value="warning">Warning</option>
            <option value="danger">Danger</option>
            <option value="link">Link</option>
        </select>
    </div>
</form>