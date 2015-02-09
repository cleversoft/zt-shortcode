<?php
$prefix = 'zo2-sc-';
?>

<form>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'video-url' ?>">Video URL</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'video-url' ?>" placeholder="Enter URL video (allow video youtube and vimeo).">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'video-width' ?>">Video Width</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'video-width' ?>" placeholder="Enter Width video (exp: 640).">
    </div>
    <div class="form-group clearfix">
        <label for="<?php echo $prefix.'video-height' ?>">Video Height</label>
        <input type="text" class="form-control" id="<?php echo $prefix.'video-height' ?>" placeholder="Enter Height video (exp: 480).">
    </div>
</form>