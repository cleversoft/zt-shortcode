
    <?php

    global $zo2Shortcodes;

    $zo2Shortcodes['tabs'][$shortcode->options['id']]['options'][] = $shortcode->options;
    $zo2Shortcodes['tabs'][$shortcode->options['id']]['content'][] = $content;
    $parser = new JBBCode\Parser();
    $shortcode->set('layout', 'tab');

    $builder = new JBBCode\CodeDefinitionBuilder('tab', $shortcode->get('layout'));
    $builder->setUseOption(true);
    $parser->addCodeDefinition($builder->build()->setShortcode($shortcode));
    $parser->parse($this->get('content'));
    $parser->getAsHTML();
    ?>
