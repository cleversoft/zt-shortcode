
<?php
global $zo2Shortcodes;
$shortcode->set('tag','tab');
$parser = new JBBCode\Parser();
$builder = new JBBCode\CodeDefinitionBuilder($shortcode->get('tag'), $shortcode->get('tag'));
$builder->setUseOption(true);
$parser->addCodeDefinition($builder->build()->setShortcode($shortcode));
// Parse this sub content
$parser->parse($this->get('content'));
$parser->getAsHTML();
?>
<pre>
    <?php
    print_r($zo2Shortcodes);
    ?>
</pre>