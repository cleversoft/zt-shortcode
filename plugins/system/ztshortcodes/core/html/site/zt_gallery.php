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

$style = $attributes->get('style');
$styleFile = __DIR__ . '/galleries/' . $style . '.php';
if (JFile::exists($styleFile))
{
    require $styleFile;
} else // Use default file if asked file is not exists
{
    __DIR__ . '/galleries/default.php';
}
?>