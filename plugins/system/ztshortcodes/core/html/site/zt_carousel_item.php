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

<div class="carousel-item">
    <div class="carousel-item-inner">
        <img src="<?php echo $attributes->get('image'); ?>" alt="carousel"/>
        <?php if ($attributes->get('link') != '' || $attributes->get('title') != ''): ?>
            <div class="image-extras">
                <div class="image-extras-content">
                    <?php if ($attributes->get('link') != '') : ?>
                        <a href="<?php echo $attributes->get('link'); ?>" class="icon-link"><i class="fa fa-link"></i></a>
                            <?php
                        endif;
                        if ($attributes->get('title') != ''):
                            ?>
                        <h3><a href="<?php echo $attributes->get('link'); ?>"><?php echo $attributes->get('title'); ?></a></h3>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>