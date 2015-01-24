<?php

/**
 * Zo2 Shortcodes (http://www.zo2framework.org)
 *
 * @link        http://www.zo2framework.org
 * @link        http://github.com/aploss/zo2
 * @author      ZooTemplate <http://zootemplate.com>
 * @copyright   Copyright (c) 2013 APL Solutions (http://apl.vn)
 * @license     GPL v2
 */
defined('_JEXEC') or die('Restricted access');

jimport('joomla.filesystem.file');
jimport('joomla.filesystem.folder');

require_once __DIR__ . '/defines.php';
require_once __DIR__ . '/path.php';
require_once __DIR__ . '/loader.php';

Zo2ShortcodesPath::getInstance()->registerNamespace('Shortcodes', ZO2SHORTCODES_CORE);
Zo2ShortcodesPath::getInstance()->registerNamespace('Shortcodes', ZO2SHORTCODES_LOCAL);

// Import 3rd vendor
require_once ZO2SHORTCODES_CORE . '/vendor/JBBCode/Parser.php';

/* Register Zo2 autoloading by Psr2 */
spl_autoload_register(array('Zo2ShortcodesLoader', 'autoloadZo2Psr2'));

// Init jQuery
JHtml::_('jquery.framework');
