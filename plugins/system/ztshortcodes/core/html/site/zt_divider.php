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
$color = $attributes->get('color');
$type = $attributes->get('type');
$text = $attributes->get('text');
$icon = $attributes->get('icon');
$html = $classTop = $style = '';
if ($attributes->get('type') == 'text-only') {
    $classTop = 'go-to-top';
} else if ($attributes->get('type') == 'icon-type-1') {
    $classTop = 'go-to-top-icon-1';
} else if ($attributes->get('type') == 'icon-type-2') {
    $classTop = 'go-to-top-icon-2';
}

?>

<div class="zt-divider-wrap">
    <div class="zt-divider <?php echo $classTop; ?> divider-<?php echo $type; ?>"
         <?php if ($type == "hr") { ?>style="background-color: <?php echo $color; ?>" <?php } ?>
        <?php if($type == "thin" || $type == "fat" || $type == "dotted" || $type == "icon-type-1" || $type == "icon-type-2") { ?>style="border-color: <?php echo $color; ?>"<?php } ?>>
        <?php if ($attributes->get('type') == 'text-only' || $attributes->get('type') == 'icon-type-1' || $attributes->get('type') == 'icon-type-2') { ?>
            <a href="#" class="animate-top" <?php if($type == "text-only") { ?>style="border-color: <?php echo $color; ?>"<?php } ?>>
                <?php if ($attributes->get('type') == 'text-only') { ?>
                    <?php echo $text; ?>
                <?php } else if ($attributes->get('type') == 'icon-type-1') { ?>
                    <i class="<?php echo $icon; ?>"></i>
                <?php } else { ?>
                    <?php echo $text; ?><i class="<?php echo $icon; ?>"></i>';
                <?php } ?>
            </a>
        <?php } ?>
    </div>
</div>