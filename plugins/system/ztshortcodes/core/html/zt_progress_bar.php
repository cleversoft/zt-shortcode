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

?>

<div class="zo2-progress progress-bar progress-<?php echo $options->get('strip'); ?> <?php echo $options->get('animated'); ?>"
     style="height: <?php echo $options->get('height').'px'; ?>; background-color: <?php echo $options->get('trackColor'); ?>">
    <div class="progress progress-bar-content"
         role="progressbar"
         data-percentage="<?php echo $options->get('now-value'); ?>"
         aria-valuenow="<?php echo $options->get('now-value'); ?>"
         aria-valuemin="<?php echo $options->get('min-value'); ?>"
         aria-valuemax="<?php echo $options->get('max-value'); ?>"
         style="background-color: <?php echo $options->get('barColor'); ?>">

    </div>
    <?php
        echo '<span style="color: '. $options->get('titleColor') .'" class="progress-title sr-only">'. $content .'</span>';
    ?>
</div>