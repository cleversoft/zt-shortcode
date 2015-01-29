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

jimport('joomla.filesystem.file');
jimport('joomla.filesystem.folder');

require_once __DIR__ . '/defines.php';
require_once __DIR__ . '/path.php';
require_once __DIR__ . '/loader.php';

ZtShortcodesPath::getInstance()->registerNamespace('Shortcodes', ZTSHORTCODES_CORE);
ZtShortcodesPath::getInstance()->registerNamespace('Shortcodes', ZTSHORTCODES_LOCAL);

// Import 3rd vendor
require_once ZTSHORTCODES_CORE . '/vendor/JBBCode/Parser.php';

/* Register Zo2 autoloading by Psr2 */
spl_autoload_register(array('ZtShortcodesLoader', 'autoloadZo2Psr2'));

// Init jQuery
JHtml::_('jquery.framework');
