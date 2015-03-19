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

$root = rtrim(JUri::root(), '/');
$path = ZtShortcodesPath::getInstance();
$plugin = JPluginHelper::getPlugin('editors-xtd', 'ztshortcodes');
$params = new JRegistry($plugin->params);
$useEditor = $params->get('use_editor', false);
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="<?php echo $root . '/media/jui/js/bootstrap.min.js'; ?>"></script>
<script src="<?php echo $path->getUrl('Shortcodes://assets/js/shortcode.js'); ?>"></script>
<script src="<?php echo $path->getUrl('Shortcodes://assets/markitup/markitup/jquery.markitup.js'); ?>"></script>
<!-- Spectrum color picker -->
<script src="<?php echo $path->getUrl('Shortcodes://assets/boostrap-colorpicker/bootstrap-colorpicker.min.js'); ?>"></script>
<?php if ($useEditor): ?>
    <script src="<?php echo $path->getUrl('Shortcodes://assets/js/editor.js'); ?>"></script>
<?php endif; ?>
<!-- Font Awesome -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?php echo $root . '/media/jui/css/bootstrap.min.css'; ?>">
<link rel="stylesheet" href="<?php echo $path->getUrl('Shortcodes://assets/css/shortcode.css'); ?>"/>
<!-- Editor -->
<link rel="stylesheet" type="text/css" href="<?php echo $path->getUrl('Shortcodes://assets/markitup/markitup/skins/markitup/style.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo $path->getUrl('Shortcodes://assets/markitup/markitup/sets/bbcode/style.css'); ?>" />
<!-- Spectrum -->
<link rel="stylesheet" type="text/css" href="<?php echo $path->getUrl('Shortcodes://assets/boostrap-colorpicker/bootstrap-colorpicker.min.css'); ?>" />
