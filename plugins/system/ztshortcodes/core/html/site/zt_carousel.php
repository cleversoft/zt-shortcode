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

<div class="zt-carousel owl-carousel" id="<?php echo ZtShortcodesHelperCommon::getUniqueString('zt-carousel-'); ?>"
     data-items-md="<?php echo $attributes->get('itemMd'); ?>"
     data-items-sm="<?php echo $attributes->get('itemSm'); ?>"
     data-items-xs="<?php echo $attributes->get('itemXs'); ?>"
     data-duration="<?php echo $attributes->get('duration'); ?>"
     data-control="<?php echo $attributes->get('showControl'); ?>"
     data-pager="<?php echo $attributes->get('showPager'); ?>">

    <!-- Sub content -->
    <?php
    echo $content;
    ?>
</div>
