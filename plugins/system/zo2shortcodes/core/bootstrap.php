<?php

jimport('joomla.filesystem.file');
jimport('joomla.filesystem.folder');

require_once __DIR__ . '/defines.php';
require_once __DIR__ . '/path.php';
require_once __DIR__ . '/loader.php';

Zo2ShortcodesPath::getInstance()->registerNamespace('Shortcodes', ZO2SHORTCODES_CORE);
Zo2ShortcodesPath::getInstance()->registerNamespace('Shortcodes', ZO2SHORTCODES_LOCAL);

require_once ZO2SHORTCODES_CORE . '/vendor/JBBCode/Parser.php';

/* Register Zo2 autoloading by Psr2 */
spl_autoload_register(array('Zo2ShortcodesLoader', 'autoloadZo2Psr2'));

JHtml::_('jquery.framework');
JHtml::_('jquery.ui', array('core', 'sortable'));
