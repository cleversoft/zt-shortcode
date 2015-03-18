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

echo $attributes;

?>

<?php if($attributes->get('tabType') != 'bottom-tabs') : ?>
    <ul class="nav nav-tabs">
            <li class="<?php echo ($attributes->get('active') == 'yes') ? 'active' : ''; ?>"><a href="#<?php echo $id . $key; ?>" data-toggle="tab"><?php echo $attributes->get('title'); ?></a></li>
    </ul>
<?php endif; ?>
    <div class="tab-content">
            <div class="tab-pane fade <?php echo ($attributes->get('active') == 'yes') ? 'in active' : ''; ?>" id="<?php echo $id . $key; ?>">
                <?php echo $content; ?>
            </div>

    </div>
<?php if($attributes->get('tabType') == 'bottom-tabs') : ?>
    <ul class="nav nav-tabs">
            <li class="<?php echo ($attributes->get('active') == 'yes') ? 'active' : ''; ?>"><a href="#<?php echo $id . $key; ?>" data-toggle="tab"><?php echo $attributes->get('title'); ?></a></li>
    </ul>
<?php endif; ?>