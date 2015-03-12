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
<?php JHTML::_('behavior.modal'); ?>

<span class="label label-<?php echo ($attributes->get('type')) ? $attributes->get('type') : 'default' ?>"><?php echo $content; ?></span>