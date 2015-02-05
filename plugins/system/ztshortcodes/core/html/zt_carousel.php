<?php
/**
 * Created by PhpStorm.
 * User: chinhbeo
 * Date: 2/5/15
 * Time: 8:45 AM
 */
defined('_JEXEC') or die('Restricted access');
?>

<div class="carousel-wrap">
    <div class="carousel-slider" id="carousel-<?php echo $options->get('id'); ?>"
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
    <?php if($options->get('showControl') == "true"): ?>
    <div class="prev-btn"><i class="fa fa-chevron-left"></i></div>
    <div class="next-btn"><i class="fa fa-chevron-right"></i></div>
    <?php endif; if($options->get('showPager') == "true"): ?>
    <div class="pager"></div>
    <?php endif; ?>
</div>