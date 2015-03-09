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

$joomlaRoot = realpath(__DIR__ . '/../../../../../../');

require_once $joomlaRoot . '/plugins/system/ztshortcodes/core/bootstrap.php';

// Groupping shortcodes
$parser = ZtShortcodesParser::getInstance();
$list = $parser->getShortcodes();
?>
<html>
    <head>
        <?php $this->load('Shortcodes://html/admin/shortcodes.head.php'); ?>
    </head>
    <body>
        <div class="container">

            <?php $this->load('Shortcodes://html/admin/shortcodes.list.php', array('list' => $list)); ?> 

            <?php $this->load('Shortcodes://html/admin/shortcodes.generator.php', array('list' => $list)); ?> 

            <?php $this->load('Shortcodes://html/admin/shortcodes.common.php'); ?>
        </div>
    </body>
</html>