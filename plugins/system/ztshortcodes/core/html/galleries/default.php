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

?>

<?php
$dir = JPath::clean(JPATH_ROOT . '/images/' . $options->get('dir'));
// Allowed filetypes
$allowedExtensions = array('jpg', 'png', 'gif');
// Also allow filetypes in uppercase
$allowedExtensions = array_merge($allowedExtensions, array_map('strtoupper', $allowedExtensions));
// Build the filter. Will return something like: "jpg|png|JPG|PNG|gif|GIF"
$filter = implode('|', $allowedExtensions);
$filter = "^.*\.(" . implode('|', $allowedExtensions) . ")$";
$files = JFolder::files($dir, $filter, false, true);
foreach ($files as $key => $image)
{
    $image = JPath::clean($image);
    $images[$key]['src'] = ZtShortcodesPath::getInstance()->toUrl($image);
    $images[$key]['thumbnail'] = ZtShortcodesPath::getInstance()->toUrl(ZtShortcodesHelperImage::getThumbnail($image, $options));
}
?>
<?php if (!empty($images)) : ?>
    <?php foreach ($images as $image) : ?>
        <a href="<?php echo $image['src']; ?>" class="ztshortcodes-gallery">
            <img src="<?php echo $image['thumbnail']; ?>"><?php echo $content; ?></a>
    <?php endforeach; ?>
<?php endif; ?>
<script>
    jQuery(document).ready(function () {
        jQuery('a.ztshortcodes-gallery').colorbox({
            width: <?php echo $options->get('width'); ?>,
            height: <?php echo $options->get('height'); ?>
        });
    })
</script>