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

$image = $attributes->get('image');
$bgtype = $attributes->get('bgtype');
$padding = $attributes->get('padding');
$fullwidth = $attributes->get('fullwidth');
$class = $attributes->get('class');

$classAll = '';
if($bgtype == 'cover'){
    $classAll .= 'zt-parallax-cover';
} else {
    $classAll .= 'zt-parallax-repeat';
}
if($fullwidth == 'yes'){
    $classAll .= 'zt-parallax-full';
}
if($class){
    $classAll .= $class;
}
?>

<div style="background-image: url(<?php echo $image; ?>);"
     class="zt_parallax_assetzt-parallax  <?php echo $classAll; ?>">
    <div class="zt_content_wrapper">

        <p><?php echo $content; ?></p>

    </div>
</div>