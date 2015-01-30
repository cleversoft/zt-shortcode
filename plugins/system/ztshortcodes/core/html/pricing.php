<?php
/**
 * Created by PhpStorm.
 * User: chinhbeo
 * Date: 1/26/15
 * Time: 9:51 AM
 */

?>

<?php
defined('_JEXEC') or die('Restricted access');
?>
<div class="pricing-tables<?php echo ' '.$options->get('pricing-type'); ?>">
    <div class="row">
        <!-- Sub content -->
        <?php
        $shortcode = new JObject();
        $shortcode->set('options', array());
        $shortcode->set('tag', 'pricing-item');
        $parser = new JBBCode\Parser();
        $builder = new JBBCode\CodeDefinitionBuilder($shortcode->get('tag'), $shortcode->get('tag'));
        $builder->setUseOption(true);
        $parser->addCodeDefinition($builder->build()->setShortcode($shortcode));
        // Parse this sub content
        $parser->parse($this->get('content'));
        echo $parser->getAsHTML();
        ?>
    </div>
</div>