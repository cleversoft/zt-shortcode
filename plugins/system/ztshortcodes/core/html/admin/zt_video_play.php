<?php

/**
 * ZT Shortcodes
 * A powerful Joomla plugin to help effortlessly customize your own content and style without HTML code knowledge
 *
 * @version     1.0.0
 * @author      ZooTemplate
 * @email       support@zootemplate.com
 * @link        http://www.zootemplate.com
 * @copyright   Copyright (c) 2015 ZooTemplate
 * @license     GPL v2
 */

$prefix = 'zt-sc-';
?>

<div id="<?php echo $prefix . 'container'; ?>" data-tag="" data-root="true">
    <div id="<?php echo $prefix . 'container'; ?>" data-tag="zt_video_play">
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'video-url' ?>">Video URL</label>
            <input type="text" data-property="src" class="form-control sc-textbox" id="<?php echo $prefix . 'video-url' ?>"
                   placeholder="Enter URL video (allow video youtube and vimeo).">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'video-width' ?>">Video Width</label>
            <input type="text" data-property="width" class="form-control sc-textbox" id="<?php echo $prefix . 'video-width' ?>"
                   placeholder="Enter Width video (exp: 640).">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'video-height' ?>">Video Height</label>
            <input type="text" data-property="height" class="form-control sc-textbox" id="<?php echo $prefix . 'video-height' ?>"
                   placeholder="Enter Height video (exp: 480).">
        </div>
    </div>
</div>