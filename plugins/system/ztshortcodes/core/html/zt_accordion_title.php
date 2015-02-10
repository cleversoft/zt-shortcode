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
$titleId = ZtShortcodesHelperCommon::getUniqueString('zt-title-');
$contentId = ZtShortcodesHelperCommon::getUniqueString('zt-content-');
?>
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="<?php echo $titleId; ?>">
        <h4 class="panel-title">
            <a
                class="accordion-toggle"
                data-toggle="collapse"
                data-parent="#<?php echo $options->get('parent'); ?>"
                href="#<?php echo $contentId; ?>"
                aria-expanded="<?php echo ($options->get('active') == 'in') ? 'true' : ''; ?>"
                aria-controls="<?php echo $contentId; ?>"
                >
                    <?php echo $options->get('title'); ?>
            </a>
        </h4>
    </div>
    <div id="<?php echo $contentId; ?>"
         class="accordion-body collapse<?php echo ' ' . $options->get('active'); ?>"
         role="tabpanel" aria-labelledby="<?php echo $titleId; ?>"
         >
        <div class="panel-body">
            <?php echo $content; ?>
        </div>
    </div>
</div>