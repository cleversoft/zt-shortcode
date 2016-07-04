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

<style rel="stylesheet" type="text/css">
    .zt-social-networks > a{
        border-radius: <?php echo $options->get('radius') . 'px'; ?>;
    }
</style>

<div class="clearfix zt-social-networks <?php echo ($options->get('boxed')) ? 'boxed-icons' : ''; ?>">

    <!-- Sub content -->
    <?php
    $shortcode = new JObject();
    $shortcode->set('options', array());
    $shortcode->set('tag', 'zt_social_icon');
    $parser = new JBBCode\Parser();
    $builder = new JBBCode\CodeDefinitionBuilder($shortcode->get('tag'), $shortcode->get('tag'));
    $builder->setUseOption(true);
    $parser->addCodeDefinition($builder->build()->setShortcode($shortcode));
    // Parse this sub content
    $parser->parse($this->get('content'));
    echo $parser->getAsHTML();
    ?>
</div>