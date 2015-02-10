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
         data-items="<?php echo $options->get('showItem'); ?>"
         data-duration="<?php echo $options->get('duration'); ?>"
         data-responsinve="<?php echo $options->get('enableReponsive'); ?>">

        <!-- Sub content -->
        <?php
        $shortcode = new JObject();
        $shortcode->set('options', array());
        $shortcode->set('tag', 'zt_carousel_item');
        $parser = new JBBCode\Parser();
        $builder = new JBBCode\CodeDefinitionBuilder($shortcode->get('tag'), $shortcode->get('tag'));
        $builder->setUseOption(true);
        $parser->addCodeDefinition($builder->build()->setShortcode($shortcode));
        // Parse this sub content
        $parser->parse($this->get('content'));
        echo $parser->getAsHTML();
        ?>
    </div>
    <?php if ($options->get('showControl') == "true"): ?>
        <div class="prev-btn"><i class="fa fa-chevron-left"></i></div>
        <div class="next-btn"><i class="fa fa-chevron-right"></i></div>
        <?php
    endif;
    if ($options->get('showPager') == "true"):
        ?>
        <div class="pager"></div>
    <?php endif; ?>
</div>