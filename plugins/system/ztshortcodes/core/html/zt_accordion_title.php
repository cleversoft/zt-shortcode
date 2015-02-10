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
$titleId = 'zt-title-' . md5(microtime());
$contentId = 'zt-content-' . md5(microtime());
?>
<div class="accordion-group">
    <div class="accordion-heading">
            <a
                class="accordion-toggle"
                data-toggle="collapse"
                data-parent="#<?php echo $options->get('parent'); ?>"
                href="#<?php echo $contentId; ?>">
                    <?php echo $options->get('title'); ?>
            </a>
    </div>
    <div id="<?php echo $contentId; ?>"
         class="accordion-body collapse collapse<?php echo ' ' . $options->get('active'); ?>">
        <div class="accordion-inner">
            <?php echo $content; ?>
        </div>
    </div>
</div>