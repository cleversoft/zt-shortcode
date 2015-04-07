<?php

/**
 * Zt Shortcodes
 * A powerful Joomla plugin to help effortlessly customize your own content and style without HTML code knowledge
 * 
 * @name        Zt Shortcodes
 * @version     2.0.0
 * @package     Plugin
 * @subpackage  System
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
    <a class="accordion-section-title<?php echo ($attributes->get('active') == "yes") ? ' active' : ''; ?>" href="#<?php echo $contentId; ?>"><i class="fa <?php echo ($attributes->get('active') == "yes") ? 'fa-minus' : 'fa-plus'; ;?>"></i><?php echo $attributes->get('title'); ?></a>
    <div id="<?php echo $contentId; ?>" class="accordion-section-content<?php echo ($attributes->get('active') == "yes") ? ' open' : ''; ?>">
        <p><?php echo $content; ?></p>
    </div>
</div>