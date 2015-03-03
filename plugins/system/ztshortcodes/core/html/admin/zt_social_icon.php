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
    <div id="<?php echo $prefix . 'container'; ?>" data-tag="zt_social_icon">
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'social-boxed'; ?>">Boxed Social Icons</label>
            <select id="<?php echo $prefix . 'social-boxed'; ?>" class="form-control sc-selectbox" data-property="boxed">
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'social-radius'; ?>">Social Icon Box Radius</label>
            <input type="text" class="form-control sc-textbox" data-property="radius" id="<?php echo $prefix . 'social-radius'; ?>"
                   placeholder="Border Radius">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'social-color'; ?>">Social Icon Custom Colors</label>
            <input type="text" class="form-control sc-textbox" data-property="color" id="<?php echo $prefix . 'social-color'; ?>"
                   placeholder="Insert your custom Color" data-default="#ffffff" value="#ffffff">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'social-bg-color'; ?>">Social Icon Custom Background Colors</label>
            <input type="text" class="form-control sc-textbox" data-property="bgColor" id="<?php echo $prefix . 'social-bg-color'; ?>"
                   placeholder="Insert your custom Background Color" data-default="#4c71bc" value="#4c71bc">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'social-facebook'; ?>">Facebook Link</label>
            <input type="text" class="form-control sc-textbox" data-property="facebook" id="<?php echo $prefix . 'social-facebook'; ?>"
                   placeholder="Insert your custom Facebook link" data-default="#facebook" value="#facebook">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'social-twitter'; ?>">Twitter Link</label>
            <input type="text" class="form-control sc-textbox" data-property="twitter" id="<?php echo $prefix . 'social-twitter'; ?>"
                   placeholder="Insert your custom Twitter link" data-default="#twitter" value="#twitter">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'social-instagram'; ?>">Instagram Link</label>
            <input type="text" class="form-control sc-textbox" data-property="instagram" id="<?php echo $prefix . 'social-instagram'; ?>"
                   placeholder="Insert your custom Instagram link" data-default="#instagram" value="#instagram">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'social-dribbble'; ?>">Dribbble Link</label>
            <input type="text" class="form-control sc-textbox" data-property="dribbble" id="<?php echo $prefix . 'social-dribbble'; ?>"
                   placeholder="Insert your custom Dribbble link" data-default="#dribbble" value="#dribbble">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'social-google'; ?>">Google+ Link</label>
            <input type="text" class="form-control sc-textbox" data-property="google" id="<?php echo $prefix . 'social-google'; ?>"
                   placeholder="Insert your custom Google+ link" data-default="#google" value="#google">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'social-linkedin'; ?>">LinkedIn Link</label>
            <input type="text" class="form-control sc-textbox" data-property="linkedin" id="<?php echo $prefix . 'social-linkedin'; ?>"
                   placeholder="Insert your custom LinkedIn link" data-default="#linkedin" value="#linkedin">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'social-blogger'; ?>">Blogger Link</label>
            <input type="text" class="form-control sc-textbox" data-property="blogger" id="<?php echo $prefix . 'social-blogger'; ?>"
                   placeholder="Insert your custom Blogger link" data-default="#blogger" value="#blogger">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'social-tumblr'; ?>">Tumblr Link</label>
            <input type="text" class="form-control sc-textbox" data-property="tumblr" id="<?php echo $prefix . 'social-tumblr'; ?>"
                   placeholder="Insert your custom Tumblr link" data-default="#tumblr" value="#tumblr">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'social-reddit'; ?>">Reddit Link</label>
            <input type="text" class="form-control sc-textbox" data-property="reddit" id="<?php echo $prefix . 'social-reddit'; ?>"
                   placeholder="Insert your custom Reddit link" data-default="#reddit" value="#reddit">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'social-yahoo'; ?>">Yahoo Link</label>
            <input type="text" class="form-control sc-textbox" data-property="yahoo" id="<?php echo $prefix . 'social-yahoo'; ?>"
                   placeholder="Insert your custom Yahoo link" data-default="#yahoo" value="#yahoo">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'social-deviantart'; ?>">Deviantart Link</label>
            <input type="text" class="form-control sc-textbox" data-property="deviantart" id="<?php echo $prefix . 'social-deviantart'; ?>"
                   placeholder="Insert your custom Deviantart link" data-default="#deviantart" value="#deviantart">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'social-vimeo'; ?>">Vimeo Link</label>
            <input type="text" class="form-control sc-textbox" data-property="vimeo" id="<?php echo $prefix . 'social-vimeo'; ?>"
                   placeholder="Insert your custom Vimeo link" data-default="#vimeo" value="#vimeo">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'social-youtube'; ?>">Youtube Link</label>
            <input type="text" class="form-control sc-textbox" data-property="youtube" id="<?php echo $prefix . 'social-youtube'; ?>"
                   placeholder="Insert your custom Youtube link" data-default="#youtube" value="#youtube">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'social-pinterest'; ?>">Pinterest Link</label>
            <input type="text" class="form-control sc-textbox" data-property="pinterest" id="<?php echo $prefix . 'social-pinterest'; ?>"
                   placeholder="Insert your custom Pinterest link" data-default="#pinterest" value="#pinterest">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'social-rss'; ?>">RSS Link</label>
            <input type="text" class="form-control sc-textbox" data-property="rss" id="<?php echo $prefix . 'social-rss'; ?>"
                   placeholder="Insert your custom RSS link" data-default="#rss" value="#rss">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'social-digg'; ?>">Digg Link</label>
            <input type="text" class="form-control sc-textbox" data-property="digg" id="<?php echo $prefix . 'social-digg'; ?>"
                   placeholder="Insert your custom Digg link" data-default="#digg" value="#digg">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'social-flickr'; ?>">Flickr Link</label>
            <input type="text" class="form-control sc-textbox" data-property="flickr" id="<?php echo $prefix . 'social-flickr'; ?>"
                   placeholder="Insert your custom Flickr link" data-default="#flickr" value="#flickr">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'social-forrst'; ?>">Forrst Link</label>
            <input type="text" class="form-control sc-textbox" data-property="forrst" id="<?php echo $prefix . 'social-forrst'; ?>"
                   placeholder="Insert your custom Forrst link" data-default="#forrst" value="#forrst">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'social-myspace'; ?>">Myspace Link</label>
            <input type="text" class="form-control sc-textbox" data-property="myspace" id="<?php echo $prefix . 'social-myspace'; ?>"
                   placeholder="Insert your custom Myspace link" data-default="#myspace" value="#myspace">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'social-skype'; ?>">Skype Link</label>
            <input type="text" class="form-control sc-textbox" data-property="skype" id="<?php echo $prefix . 'social-skype'; ?>"
                   placeholder="Insert your custom Skype link" data-default="#skype" value="#skype">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'social-paypal'; ?>">PayPal Link</label>
            <input type="text" class="form-control sc-textbox" data-property="paypal" id="<?php echo $prefix . 'social-paypal'; ?>"
                   placeholder="Insert your custom PayPal link" data-default="#paypal" value="#paypal">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'social-dropbox'; ?>">Dropbox Link</label>
            <input type="text" class="form-control sc-textbox" data-property="dropbox" id="<?php echo $prefix . 'social-dropbox'; ?>"
                   placeholder="Insert your custom Dropbox link" data-default="#dropbox" value="#dropbox">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'social-soundcloud'; ?>">SoundCloud Link</label>
            <input type="text" class="form-control sc-textbox" data-property="soundcloud" id="<?php echo $prefix . 'social-soundcloud'; ?>"
                   placeholder="Insert your custom SoundCloud link" data-default="#soundcloud" value="#soundcloud">
        </div>
        <div class="form-group clearfix">
            <label for="<?php echo $prefix . 'social-vk'; ?>">VK Link</label>
            <input type="text" class="form-control sc-textbox" data-property="vk" id="<?php echo $prefix . 'social-vk'; ?>"
                   placeholder="Insert your custom VK link" data-default="#vk" value="#vk">
        </div>
    </div>
</div>