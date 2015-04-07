<?php
/**
 * Zt Shortcodes
 * A powerful Joomla plugin to help effortlessly customize your own content and style without HTML code knowledge
 * 
 * @name        Zt Shortcodes
 * @version     2.0.0
 * @package     Plugin
 * @subpackage  System
 * @author      ZooTemplate 
 * @email       support@zootemplate.com 
 * @link        http://www.zootemplate.com 
 * @copyright   Copyright (c) 2015 ZooTemplate
 * @license     GPL v2 
 */
defined('_JEXEC') or die('Restricted access');

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
                ZtShortcodesHelperImage::getThumbnail($image, $attributes->get('thumbWidth', 300), $attributes->get('thumbHeight', 300), 'thumb_')
        );
    }
}
?>

<div class="zt-gallery zt-gallery-default clearfix">
    <?php if (!empty($images)) : ?>
    <?php foreach ($images as $image) : ?>
            <a href="<?php echo $image['src']; ?>" class="ztshortcodes-gallery group1">
                <img src="<?php echo $image['thumbnail']; ?>" alt="Image Gallery"
                     style="width: <?php echo ($attributes->get('thumbwidth') != '') ? $attributes->get('thumbwidth') . 'px' : 'auto'; ?>; height: <?php echo ($attributes->get('thumbheight') != '') ? $attributes->get('thumbheight') . 'px' : 'auto'; ?>"></a>
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