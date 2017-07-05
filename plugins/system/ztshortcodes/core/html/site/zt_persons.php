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
$class = $attributes->get('slider') == 'yes' ? 'owl-carousel ' : 'row ';
$class .= $attributes->get('extraclass');
?>

<div class="zt-persons <?php echo $class ?>" id="zt-persons-<?php echo uniqid(md5(time())) ?>" 
    data-show="<?php echo $attributes->get('item'); ?>"
    data-pager="<?php echo $attributes->get('pager') ?>"
    data-controls="<?php echo $attributes->get('controls') ?>"
    data-auto="<?php echo $attributes->get('auto') ?>"
    >
    <!-- Sub content -->
<?php
echo $content;
?>
</div>