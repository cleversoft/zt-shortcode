<?php

/**
 * Zt Shortcodes
 * A powerful Joomla plugin to help effortlessly customize your own content and style without HTML code knowledge
 * 
 * @name        Zt Shortcodes
 * @version     2.5.0
 * @package     Plugin
 * @subpackage  System
 * @author      ZooTemplate 
 * @email       support@zootemplate.com 
 * @link        http://www.zootemplate.com 
 * @copyright   Copyright (c) 2017 ZooTemplate
 * @license     GPL v2 
 */
defined('_JEXEC') or die('Restricted access');

$html = '';
$class = 'zt-gallery-instagram ';
if(JString::trim($attributes->get('extraclass')) != "") $class .= $attributes->get('extraclass');
$user_id = JString::trim($attributes->get('user_id')) != "" ? $attributes->get('user_id') : '4913380870';
$access_token = JString::trim($attributes->get('access_token')) != "" ? $attributes->get('access_token') : '4913380870.1677ed0.13f2670762364b52b97477b7a4533257';
$limit = JString::trim($attributes->get('limit')) != "" ? $attributes->get('limit') : 4;
$per_row = JString::trim($attributes->get('per_row')) != "" ? $attributes->get('per_row') : 4;
$width = ceil(100/$per_row);

$api = "https://api.instagram.com/v1/users/". $user_id  ."/media/recent/?access_token=" . $access_token . "&count=". $limit;
$json = file_get_contents($api);
$json = json_decode($json);
if(isset($json->data)) $items = $json->data;

if($items) {
  $html .= '<div class="' . $class . '">'; 
    $html .= '<ul>';
      for ($i=0; $i < $limit; $i++) {
        $html .= '<li style="width:'.$width.'%">';
          $html .= ($items[$i]->images->standard_resolution->url) ? '<a class="zt-gallery-instagram-btn" href="' .  $items[$i]->images->standard_resolution->url . '">' : '';
             $html .= '<img class="instagram-image zt-img-responsive" src="' . $items[$i]->images->standard_resolution->url . '" alt="'.  $items[$i]->caption .'">';
          $html .= ($items[$i]->images->standard_resolution->url) ? '</a>' : '';
        $html .= '</li>';
      }
    $html .= '</ul>';
  $html .= '</div><!-- end .zt_gallery_instagram -->';
} else {
  $html .= '<p class="alert alert-warning">'. JString::sprintf('WARNING_GALLERY_INSTAGRAM_NOT_FOUND_LABEL') .'</p>';
}
echo $html;