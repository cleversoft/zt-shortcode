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

$prefix = 'zt-sc-';
?>

<div id="<?php echo $prefix . 'container'; ?>" data-tag="" data-root="true">
    <div id="<?php echo $prefix . 'container'; ?>" data-tag="zt_google_map">
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'map-address' ?>">Address</label>
            <input type="text" data-property="address" class="form-control sc-textbox" id="<?php echo $prefix . 'map-address' ?>"
                   placeholder="Enter Map Address." data-default="Ha Noi" value="Ha Noi">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'map-height' ?>">Map Height</label>
            <input type="text" data-property="height" class="form-control sc-textbox" id="<?php echo $prefix . 'map-height' ?>"
                   placeholder="Enter Map Height." data-default="300" value="300">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'map-width' ?>">Map Width</label>
            <input type="text" data-property="width" class="form-control sc-textbox" id="<?php echo $prefix . 'map-width' ?>"
                   placeholder="Enter Map Width." data-default="500" value="500">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'map-type'; ?>">Map Type</label>
            <select id="<?php echo $prefix . 'map-type'; ?>" class="form-control sc-selectbox" data-property="type" data-default="roadmap">
                <option value="roadmap">Map</option>
                <option value="satellite">Satellite</option>
                <option value="hybrid">Hybrid</option>
                <option value="terrain">Terrain</option>
            </select>
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'map-zoom'; ?>">Map Zoom</label>
            <select id="<?php echo $prefix . 'map-zoom'; ?>" class="form-control sc-selectbox" data-property="zoom" data-default="14">
                <option value="14">14 - Default</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
            </select>
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'map-color' ?>">Map Color</label>
            <input type="text" data-property="color" class="form-control sc-textbox" id="<?php echo $prefix . 'map-color' ?>"
                   placeholder="Enter Map Color." data-default="#ffffff" value="#ffffff">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'map-saturation'; ?>">Map Saturation</label>
            <select id="<?php echo $prefix . 'map-saturation'; ?>" class="form-control sc-selectbox" data-property="saturation" data-default="color">
                <option value="color">Color</option>
                <option value="mono">Mono</option>
            </select>
        </div>
    </div>
</div>