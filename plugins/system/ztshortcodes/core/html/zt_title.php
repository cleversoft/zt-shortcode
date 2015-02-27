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

<div style="margin-top: <?php echo $options->get('marginTop') . 'px'; ?>; margin-bottom: <?php echo $options->get('marginBottom') . 'px'; ?>" class="zt-title zt-title-<?php echo ($options->get('type') != "") ? $options->get('type') : 'default'; ?>"><h3 class="zt-title-heading"><?php echo $content; ?></h3></div>