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
?>

<div class="spb_map_wrapper">
    <div class="map-canvas"
         style="width:<?php echo $options->get('width'). 'px'; ?>; height: <?php echo $options->get('height'). 'px'; ?>;"
         data-address="<?php echo $options->get('address'); ?>"
         data-zoom="<?php echo $options->get('zoom'); ?>"
         data-maptype="<?php echo $options->get('type'); ?>"
         data-mapcolor="<?php echo $options->get('color'); ?>"
         data-mapsaturation="<?php echo $options->get('saturation'); ?>"
         data-pinimage="<?php echo $options->get('pin'); ?>">

         </div>
</div>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>