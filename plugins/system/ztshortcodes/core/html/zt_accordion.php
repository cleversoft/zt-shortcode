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
$contentId = ZtShortcodesHelperCommon::getUniqueString('zt-content-');
?>
<div class="accordion-section">
    <a class="accordion-section-title<?php echo ($options->get('active') == "yes") ? ' active' : ''; ?>" href="#<?php echo $contentId; ?>"><i class="fa <?php echo ($options->get('active') == "yes") ? 'fa-minus' : 'fa-plus'; ;?>"></i><?php echo $options->get('title'); ?></a>
    <div id="<?php echo $contentId; ?>" class="accordion-section-content<?php echo ($options->get('active') == "yes") ? ' open' : ''; ?>">
        <p><?php echo $content; ?></p>
    </div>
</div>