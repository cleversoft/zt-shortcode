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

$style = $attributes->get('style');
$styleFile = __DIR__ . '/galleries/' . $style . '.php';
if (JFile::exists($styleFile)) { ?>
    require $styleFile;
<?php } else { ?>

    <?php
    $dir = JPath::clean(JPATH_ROOT . '/images/' . $attributes->get('dir'));
    // Allowed filetypes
    $allowedExtensions = array('jpg', 'png', 'gif');
    // Also allow filetypes in uppercase
    $allowedExtensions = array_merge($allowedExtensions, array_map('strtoupper', $allowedExtensions));
    // Build the filter. Will return something like: "jpg|png|JPG|PNG|gif|GIF"
    $filter = implode('|', $allowedExtensions);
    $filter = "^.*\.(" . implode('|', $allowedExtensions) . ")$";
    $files = JFolder::files($dir, $filter, false, true);
    if (is_array($files))
    {
    foreach ($files as $key => $image)
    {
    $image = JPath::clean($image);
    $images[$key]['src'] = ZtShortcodesPath::getInstance()->toUrl(
    ZtShortcodesHelperImage::getThumbnail($image, $attributes->get('width', 600), $attributes->get('height', 600), 'resized_')
    );
    $images[$key]['thumbnail'] = ZtShortcodesPath::getInstance()->toUrl(
    ZtShortcodesHelperImage::getThumbnail($image, $attributes->get('thumb-width', 300), $attributes->get('thumb-height', 300), 'thumb_')
    );
    }
    }

    $style = '';
    if($attributes->get('thumb-width') != ''){
    $style .= 'width: '. $attributes->get('thumb-width') . 'px';
    } elseif($attributes->get('thumb-height') != ''){
    $style .= 'height: '. $attributes->get('thumb-height') .'px';
    }
    ?>

    <div class="zt-gallery zt-gallery-default clearfix">
        <?php if (!empty($images)) : ?>
            <?php foreach ($images as $image) : ?>
                <a href="<?php echo $image['src']; ?>" class="ztshortcodes-gallery group1">
                    <img src="<?php echo $image['thumbnail']; ?>" alt="Image Gallery" style="<?php echo $style; ?>"></a>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <script>
        jQuery(document).ready(function () {
            jQuery('a.ztshortcodes-gallery').colorbox({
                width: <?php echo $attributes->get('width'); ?>,
                height: <?php echo $attributes->get('height'); ?>,
                rel: "group1"
            });
        })
    </script>
<?php } ?>