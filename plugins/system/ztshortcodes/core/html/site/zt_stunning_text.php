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
defined('_JEXEC') or die('Restricted access');
?>

<?php
$bgColor = $attributes->get('bgColor');
$padding = $attributes->get('padding');
$border = $attributes->get('border');
$borderColor = $attributes->get('borderColor');
$button = $attributes->get('button');
$buttonLink = $attributes->get('buttonLink');
$buttonBg = $attributes->get('buttonBg');
$buttonColor = $attributes->get('buttonColor');
$title = $attributes->get('title');
$titleColor = $attributes->get('titleColor');
$captionColor = $attributes->get('captionColor');
?>

<div class="zt-stunning-text" style="background-color: <?php echo $bgColor ?>; border: <?php echo $border . 'px'; ?> solid <?php echo $borderColor; ?>">
    <div class="zt-stunning-text-inner" style="padding: <?php echo ($padding) ? $padding : '0px'; ?>">
        <h3 class="zt-stunning-title" style="color: <?php echo $titleColor; ?>"><?php echo $title; ?></h3>
        <div class="zt-stunning-caption">
            <p style="color: <?php echo $captionColor; ?>"><?php echo $content; ?></p>
        </div>
        <a class="zt-stunning-link" href="<?php echo $buttonLink; ?>" style="background-color: <?php echo $buttonBg ?>; color: <?php echo $buttonColor; ?>"><?php echo $button; ?></a>
    </div>
</div>
