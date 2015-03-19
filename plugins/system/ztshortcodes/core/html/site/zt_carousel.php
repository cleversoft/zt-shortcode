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

<div class="carousel-wrap">
    <div class="carousel-slider" id="<?php echo ZtShortcodesHelperCommon::getUniqueString('zt-carousel-'); ?>"
         data-items="<?php echo $attributes->get('showItem'); ?>"
         data-duration="<?php echo $attributes->get('duration'); ?>"
         data-responsinve="<?php echo $attributes->get('enableReponsive'); ?>">

        <!-- Sub content -->
        <?php
            echo $content;
        ?>
    </div>
    <?php if ($attributes->get('showControl') == "yes"): ?>
        <div class="prev-btn"><i class="fa fa-chevron-left"></i></div>
        <div class="next-btn"><i class="fa fa-chevron-right"></i></div>
    <?php
    endif;
    if ($attributes->get('showPager') == "yes"):
        ?>
        <div class="zo2-carousel-pager"></div>
    <?php endif; ?>
</div>