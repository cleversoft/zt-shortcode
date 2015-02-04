<?php
/**
 * Created by PhpStorm.
 * User: chinhbeo
 * Date: 2/4/15
 * Time: 3:12 PM
 */
defined('_JEXEC') or die('Restricted access');

$classSlider = '';
if($options->get('slider') == 'true'){
    $classSlider = 'bxslider';
}
?>

<div class="zo2-testimonial <?php echo $classSlider; ?>">

    <!-- Sub content -->
    <?php
    $shortcode = new JObject();
    $shortcode->set('options', array());
    $shortcode->set('tag', 'zt_testimonial_item');
    $parser = new JBBCode\Parser();
    $builder = new JBBCode\CodeDefinitionBuilder($shortcode->get('tag'), $shortcode->get('tag'));
    $builder->setUseOption(true);
    $parser->addCodeDefinition($builder->build()->setShortcode($shortcode));
    // Parse this sub content
    $parser->parse($this->get('content'));
    echo $parser->getAsHTML();
    ?>
</div>