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
?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-<?php echo $attributes->get('buttontype'); ?> btn-<?php echo $attributes->get('buttonsize'); ?>" data-toggle="modal" data-target="#<?php echo $attributes->get('id'); ?>">
    <?php echo $attributes->get('buttontext'); ?>
</button>

<!-- Modal -->
<div class="zt-modal modal fade" id="<?php echo $attributes->get('id'); ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $attributes->get('id'); ?>Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><?php echo $attributes->get('title'); ?></h4>
            </div>
            <div class="modal-body">
                <?php echo $content; ?>
            </div>
        </div>
    </div>
</div>
