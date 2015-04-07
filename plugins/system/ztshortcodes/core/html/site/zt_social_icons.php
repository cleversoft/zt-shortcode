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

<style rel="stylesheet" type="text/css">
    .zt-social-networks > a{
        border-radius: <?php echo $attributes->get('radius') . 'px'; ?>;
    }
</style>

<div class="zt-social-networks <?php echo ($attributes->get('boxed')) ? 'boxed-icons' : ''; ?>">

    <!-- Sub content -->
<?php
echo $content;
?>
</div>