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
?>

<div class="zt-counter-wrap">
    <span class="chart <?php echo $attributes->get('extra-class'); ?>"
          data-easing="<?php echo $attributes->get('easing'); ?>"
          data-percent="<?php echo $attributes->get('percent'); ?>"
          data-barcolor="<?php echo $attributes->get('barColor'); ?>"
          data-trackcolor="<?php echo $attributes->get('trackColor'); ?>"
          data-scalelength="<?php echo $attributes->get('scaleLength'); ?>"
          data-linecap="<?php echo $attributes->get('lineCap'); ?>"
          data-linewidth="<?php echo $attributes->get('lineWidth'); ?>"
          data-size="<?php echo $attributes->get('size'); ?>"
          data-duration="<?php echo $attributes->get('duration'); ?>"
          style="width: <?php echo $attributes->get('size') . 'px'; ?>; height: <?php echo $attributes->get('size') . 'px'; ?>; line-height: <?php echo $attributes->get('size') . 'px'; ?>">

        <?php
        if ($attributes->get('content-type') == 'percent')
        {
            echo '<span class="percent"></span>';
        } elseif ($attributes->get('content-type') == 'icon')
        {
            echo '<span><i class="' . $attributes->get('icon') . '"></i></span>';
        } else
        {
            echo '<span>' . $content . '</span>';
        }
        ?>


    </span>
</div>