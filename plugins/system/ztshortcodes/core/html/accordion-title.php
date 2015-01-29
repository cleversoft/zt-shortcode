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
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="<?php echo $options->get('title-id'); ?>">
        <h4 class="panel-title">
            <a 
                data-toggle="collapse" 
                data-parent="#<?php echo $options->get('parent'); ?>" 
                href="#<?php echo $options->get('content-id'); ?>" 
                aria-expanded="<?php echo $options->get('expanded'); ?>" 
                aria-controls="<?php echo $options->get('content-id'); ?>">
                    <?php echo $options->get('title'); ?>
            </a>
        </h4>
    </div>
    <div id="<?php echo $options->get('content-id'); ?>" 
         class="panel-collapse collapse in" role="tabpanel" aria-labelledby="<?php echo $options->get('title-id'); ?>">
        <div class="panel-body">
            <?php echo $content; ?>
        </div>
    </div>
</div>