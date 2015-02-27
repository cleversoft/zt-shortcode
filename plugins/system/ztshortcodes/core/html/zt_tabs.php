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
// Generate unique id
$id = ZtShortcodesHelperCommon::getUniqueString('zt-tabcontent-');
// Store id
$shortcode->options['id'] = $id;
// Store this table global options
$zo2Shortcodes['tabs'][$shortcode->options['id']]['options'] = $shortcode->get('options');
// Reset global options
$shortcode->set('options', array('id' => $id));
// Set sub tag
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
    <!-- http://getbootstrap.com/javascript/#tabs -->
<?php if (!empty($currentTab) && !empty($currentTab['tabs'])) : ?>
    <div class="zo2-tabs <?php echo 'zo2-tab-'. $options->get('tabType'); ?>" role="tabpanel" id="<?php echo $id; ?>">
        <!-- Nav tabs -->
        <?php if($options->get('tabType') != 'bottom-tabs') : ?>
            <ul class="nav nav-tabs">
                <?php foreach ($currentTab['tabs'] as $key => $tab): ?>
                    <?php $option = new JObject($tab); ?>
                    <li class="<?php echo ($option->get('active') == 'yes') ? 'active' : ''; ?>"><a href="#<?php echo $id . $key; ?>" data-toggle="tab"><?php echo $option->get('title'); ?></a></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <div class="tab-content">
            <?php foreach ($currentTab['contents'] as $key => $content): ?>
                <?php $option = new JObject($currentTab['tabs'][$key]); ?>
                <div class="tab-pane fade <?php echo ($option->get('active') == 'yes') ? 'in active' : ''; ?>" id="<?php echo $id . $key; ?>">
                    <?php echo $content; ?>
                </div>
            <?php endforeach; ?>

        </div>
        <?php if($options->get('tabType') == 'bottom-tabs') : ?>
            <ul class="nav nav-tabs">
                <?php foreach ($currentTab['tabs'] as $key => $tab): ?>
                    <?php $option = new JObject($tab); ?>
                    <li class="<?php echo ($option->get('active') == 'yes') ? 'active' : ''; ?>"><a href="#<?php echo $id . $key; ?>" data-toggle="tab"><?php echo $option->get('title'); ?></a></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
<?php endif; ?>