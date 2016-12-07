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
$plugin = JPluginHelper::getPlugin('system','ztshortcodes');
$pluginParams = new JRegistry($plugin->params);
$api = $pluginParams->get('google_map_api','AIzaSyD20xTeA1NVDPhaT6FEizCA_o2WU8OS_zU');
?>
<div class="spb_map_wrapper">
    <div class="map-canvas"
         style="width:<?php echo $attributes->get('width'). 'px'; ?>; height: <?php echo $attributes->get('height'). 'px'; ?>;"
         data-address="<?php echo $attributes->get('address'); ?>"
         data-zoom="<?php echo $attributes->get('zoom'); ?>"
         data-maptype="<?php echo $attributes->get('type'); ?>"
         data-mapcolor="<?php echo $attributes->get('color'); ?>"
         data-mapsaturation="<?php echo $attributes->get('saturation'); ?>"
         data-pinimage="<?php echo $attributes->get('pin'); ?>">

    </div>
</div>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=<?php echo $api; ?>"></script>