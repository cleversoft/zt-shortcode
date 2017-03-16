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

<div class="zt-persons row <?php echo $attributes->get('extraclass') ?> <?php echo ($attributes->get('slider') == 'yes') ? 'bxslider' : ''; ?>"
     data-show="<?php echo $attributes->get('item'); ?>"
     data-pager="<?php echo ($attributes->get('pager') == 'yes') ? 'true' : 'false'; ?>"
     data-controls="<?php echo ($attributes->get('controls') == 'yes') ? 'true' : 'false'; ?>"
     data-auto="<?php echo ($attributes->get('auto') == 'yes') ? 'true' : 'false'; ?>"
     data-margin="<?php echo $attributes->get('margin'); ?>">

    <!-- Sub content -->
<?php
echo $content;
?>
</div>