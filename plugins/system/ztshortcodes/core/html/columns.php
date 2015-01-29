<?php
/**
 * Zo2 Shortcodes (http://www.zo2framework.org)
 *
 * @link        http://www.zo2framework.org
 * @link        http://github.com/aploss/zo2
 * @author      ZooTemplate <http://zootemplate.com>
 * @copyright   Copyright (c) 2013 APL Solutions (http://apl.vn)
 * @license     GPL v2
 */
defined('_JEXEC') or die('Restricted access');
?>
<div class="row">
    <?php
    $shortcode = new JObject();
    $shortcode->set('options', array());
    $shortcode->set('tag', 'column');
    $parser = new JBBCode\Parser();
    $builder = new JBBCode\CodeDefinitionBuilder($shortcode->get('tag'), $shortcode->get('tag'));
    $builder->setUseOption(true);
    $parser->addCodeDefinition($builder->build()->setShortcode($shortcode));
// Parse this sub content
    $parser->parse($this->get('content'));
    echo $parser->getAsHTML();
    ?>
</div>