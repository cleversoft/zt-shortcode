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
$class = 'owl-carousel ';
$class .= $attributes->get('extraclass');
?>

<div class="zt-testimonial <?php echo $class; ?>" id="<?php echo 'zt-testimonial-' . uniqid(md5(time())); ?>"
    data-auto="<?php echo $attributes->get('autoPlay') ?>"
    data-items="<?php echo $attributes->get('numSlides') != '' ? $attributes->get('numSlides') : 1 ?>"
    data-paging="<?php echo $attributes->get('paging') ?>" 
    data-controls="<?php echo $attributes->get('controls') ?>"
  >
    <!-- Sub content -->
    <?php echo $content; ?>
</div>