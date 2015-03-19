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

<div style="height: <?php echo $attributes->get('height') . 'px'; ?>" class="zt-space<?php echo ($attributes->get('class') != '') ? ' '.$attributes->get('class') : ''; ?>" id="<?php echo $attributes->get('id'); ?>"></div>