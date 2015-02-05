<?php
$prefix = 'zo2-sc-';
?>

<form>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'blockquotes-type'; ?>">Type</label>
        <select id="<?php echo $prefix.'blockquotes-type'; ?>" class="form-control">
            <option value="default">Default</option>
            <option value="big">Big Quote</option>
            <option value="box">Box Quote</option>
        </select>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'blockquotes-author'; ?>">Author</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'blockquotes-author'; ?>" placeholder="Enter Author Blockquotes">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'blockquotes-author-link'; ?>">Author Link</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'blockquotes-author-link'; ?>" placeholder="Enter Author Link Blockquotes">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'blockquotes-content'; ?>">Content</label>
        <textarea placeholder="Content Message Box" rows="3" class="form-control" id="<?php echo $prefix.'blockquotes-content'; ?>"></textarea>
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'blockquotes-class'; ?>">Extra Class</label>
        <input type="label" class="form-control" id="<?php echo $prefix.'blockquotes-class'; ?>" placeholder="Enter Extra Class Blockquotes">
    </div>
</form>