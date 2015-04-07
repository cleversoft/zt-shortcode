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

<div style="margin-top: <?php echo $attributes->get('marginTop') . 'px'; ?>; margin-bottom: <?php echo $attributes->get('marginBottom') . 'px'; ?>" class="zt-title zt-title-<?php echo ($attributes->get('type') != "") ? $attributes->get('type') : 'default'; ?>"><h3 class="zt-title-heading"><?php echo $content; ?></h3></div>