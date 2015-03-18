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

    <div class="zo2-tabs <?php echo 'zo2-tab-'. $attributes->get('type'); ?>" role="tabpanel" id="<?php echo $id; ?>">
        <!-- Nav tabs -->
        <?php echo $content; ?>
    </div>