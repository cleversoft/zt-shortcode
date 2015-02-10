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

global $zo2Shortcodes;
$id = 'zt-tabcontent-' . md5(microtime());
$shortcode->options['id'] = $id;
$zo2Shortcodes['tabs'][$shortcode->options['id']]['options'] = $shortcode->get('options');
$shortcode->set('tag', 'zt_tab');
$parser = new JBBCode\Parser();
$builder = new JBBCode\CodeDefinitionBuilder($shortcode->get('tag'), $shortcode->get('tag'));
$builder->setUseOption(true);
$parser->addCodeDefinition($builder->build()->setShortcode($shortcode));
// Parse this sub content
$parser->parse($this->get('content'));
$parser->getAsHTML();
?>

<?php
if (isset($zo2Shortcodes['tabs'][$shortcode->options['id']]))
{
    $currentTab = $zo2Shortcodes['tabs'][$shortcode->options['id']];
    $id = $shortcode->options['id'];
}
?>  

<?php if (!empty($currentTab) && !empty($currentTab['tabs'])) : ?>
    <div class="zo2-tabs" role="tabpanel">
        <ul class="nav nav-tabs" role="tablist">
            <?php foreach ($currentTab['tabs'] as $key => $tab): ?>
                <?php $option = new JObject($tab); ?>
                <?php echo $option->get('active'); ?>
                <li class="" role="presentation">
                    <a
                        href="#<?php echo $id; ?>"
                        aria-controls="<?php echo $id; ?>"
                        role="tab"
                        data-toggle="tab">
                        <?php echo $option->get('title'); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <div class="tab-content">
            <?php foreach ($currentTab['contents'] as $key => $content): ?>
                <?php $option = new JObject($currentTab['tabs'][$key]); ?>
                <div role="tabpanel" class="tab-pane" id="<?php echo $id; ?>">
                    <?php echo $content; ?>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
<?php endif; ?>