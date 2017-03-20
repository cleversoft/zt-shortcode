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

$path = ZtShortcodesPath::getInstance();

$bgColor = JString::trim($attributes->get('bgColor'));
if($bgColor != '')
    $background = 'background-color: ' . $bgColor;

$textColor = JString::trim($attributes->get('textColor'));
if($textColor !='')
    $color = 'color: ' . $textColor;

$borderRadius = JString::trim($attributes->get('borderRadius'));
if($borderRadius !='')
    $radiusAvatar = 'border-radius: ' . $borderRadius;
?>

<div class="testimonial-item">
    <div class="testimonial-content">
        <span style="<?php echo (isset($background) ? $background . ';' : "") . (isset($color) ? $color : "") ?>"><?php echo $content; ?></span>
    </div>
    <div style="<?php echo $color ?>;" class="author">
        <div class="testimonial-thumbnail">
            <?php
            if ($attributes->get('customAvatar') != '')
            {
                echo '<img src="' . JURI::base() . $attributes->get('customAvatar') . '" alt="' . $attributes->get('name') . '" style="' . (isset($radiusAvatar) ? $radiusAvatar : "") . '"/>';
            } else
            {
                echo '<span class="thumbnail-icon"><i class="fa fa-user"></i></span>';
            }
            ?>
        </div>
        <div class="company-name">
            <strong><?php echo $attributes->get('name'); ?></strong> 
            <em><?php echo $attributes->get('company'); ?></em>
        </div>
    </div>
</div>