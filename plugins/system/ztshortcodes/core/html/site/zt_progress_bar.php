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

<div class="zt-progress progress-bar progress-<?php echo $attributes->get('strip'); ?> <?php echo $attributes->get('animated'); ?>"
     style="height: 37px; background-color: <?php echo $attributes->get('trackColor'); ?>">
    <div class="progress progress-bar-content"
         role="progressbar"
         data-percentage="<?php echo $attributes->get('now-value'); ?>"
         aria-valuenow="<?php echo $attributes->get('now-value'); ?>"
         aria-valuemin="<?php echo $attributes->get('min-value'); ?>"
         aria-valuemax="<?php echo $attributes->get('max-value'); ?>"
         style="background-color: <?php echo $attributes->get('barColor'); ?>">

    </div>
    <?php
        echo '<span style="color: '. $attributes->get('titleColor') .'" class="progress-title sr-only">'. $content .'</span>';
    ?>
</div>