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

<div class="zt-persons row <?php echo ($options->get('slider') == 'yes') ? 'bxslider' : ''; ?>"
     data-show="<?php echo $options->get('item'); ?>"
     data-pager="<?php echo ($options->get('pager') == 'yes') ? 'true' : 'false'; ?>"
     data-controls="<?php echo ($options->get('controls') == 'yes') ? 'true' : 'false'; ?>"
     data-auto="<?php echo ($options->get('auto') == 'yes') ? 'true' : 'false'; ?>"
     data-margin="<?php echo $options->get('margin'); ?>">

    <!-- Sub content -->
    <?php
    $shortcode = new JObject();
    $shortcode->set('options', array());
    $shortcode->set('tag', 'zt_person');
    $parser = new JBBCode\Parser();
    $builder = new JBBCode\CodeDefinitionBuilder($shortcode->get('tag'), $shortcode->get('tag'));
    $builder->setUseOption(true);
    $parser->addCodeDefinition($builder->build()->setShortcode($shortcode));
    // Parse this sub content
    $parser->parse($this->get('content'));
    echo $parser->getAsHTML();
    ?>
</div>