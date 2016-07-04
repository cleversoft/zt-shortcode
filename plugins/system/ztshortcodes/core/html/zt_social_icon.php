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

$icon = $options->get('icon');
$title = $options->get('title');
$link = $options->get('link');
$color = $options->get('color');
$bgColor = $options->get('bgColor');
$bdColor = $options->get('bdColor');
$hoverColor = $options->get('hoverColor');
$hoverBgColor = $options->get('hoverBgColor');
$hoverBdColor = $options->get('hoverBdColor');

$titleLow = strtolower($title);
?>


<a title="<?php echo $title; ?>"
   style="color:<?php echo $color; ?>;background-color:<?php echo $bgColor; ?>;border-color:<?php echo $bdColor; ?>;"
   onmouseover="this.style.backgroundColor='<?php echo $hoverBgColor; ?>'; this.style.color='<?php echo $hoverColor; ?>'; this.style.borderColor='<?php echo $hoverBdColor; ?>'"
   onmouseout="this.style.backgroundColor='<?php echo $bgColor; ?>';this.style.color='<?php echo $color; ?>'; this.style.borderColor='<?php echo $bdColor; ?>'"
   href="<?php echo $link; ?>" target="_blank" class="zt-social-icon-item zt-icon-<?php echo $titleLow; ?>">
    <i class="<?php echo $icon; ?>"></i>
</a>