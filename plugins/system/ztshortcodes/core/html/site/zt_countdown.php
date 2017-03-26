<?php

/**
 * Zt Shortcodes
 * A powerful Joomla plugin to help effortlessly customize your own content and style without HTML code knowledge
 * 
 * @name        Zt Shortcodes
 * @version     2.0.5
 * @package     Plugin
 * @subpackage  System
 * @author      ZooTemplate 
 * @email       support@zootemplate.com 
 * @link        http://www.zootemplate.com 
 * @copyright   Copyright (c) 2017 ZooTemplate
 * @license     GPL v2 
 */
defined('_JEXEC') or die('Restricted access');

$class = $html = '';
$class .= 'zt-countdown';
$class .= ' ' . $attributes->get('extraclass');
$id = 'zt-countdown-' . trim($attributes->get('id'));

$time = $attributes->get('time');
// $time = str_replace('/', '-', $time);
$date = date_create($time);
$date = date_format($date,"d-m-Y");
// var_dump($time);die;
$seconds = strtotime($date);
// var_dump($seconds);die;
// $d = DateTime::createFromFormat('m/d/Y', $time);
// $d->getTimestamp();
// var_dump($date);die;
// var_dump(time());die;

$time = $seconds - time();

$type = $attributes->get('type');
$class .= ' '.$type;
// switch ($type) {
//   case 'default':
//     $format = "padZeroes: true";
//     break;
//   case 'formatted-description':
//     $format = "";
//     break;
//   case 'minimal-compact':
//     $format = "compact: true, format: 'HM', description: ''";
//     break;
//   case 'compact':
//     $format = "compact: true, description: ''";
//     break;
//   case 'dont-show-either':
//     $format = "format: 'HM'";
//     break;
//   case 'dont-show-seconds':
//     $format = "format: 'dHM'";
//     break;
//   case 'dont-show-day':
//     $format =  "format: 'HMS'";
//     break;
// }

$html .=  '<div class="' . $class . ' ClassyCountdownDemo" id="' . $id . '"></div>';
$html .= '<script>';

if($type=='default')
  $html .= "jQuery('#". $id ."').countdown({until: ". $time .",padZeroes: true})";
else
  $html .= 'jQuery(document).ready(function(){
            jQuery("#'. $id .'").ClassyCountdown({
              theme: "flat-colors",
              end: jQuery.now() + '. $time .',
              style: {
                  element: "",
                  textResponsive: .5,
                  days: {
                      gauge: {
                          thickness: .01,
                          bgColor: "rgba(0,0,0,0.05)",
                          fgColor: "#1abc9c"
                      },
                      textCSS: "color:#34495e;"
                  },
                  hours: {
                      gauge: {
                          thickness: .01,
                          bgColor: "rgba(0,0,0,0.05)",
                          fgColor: "#2980b9"
                      },
                      textCSS: "color:#34495e;"
                  },
                  minutes: {
                      gauge: {
                          thickness: .01,
                          bgColor: "rgba(0,0,0,0.05)",
                          fgColor: "#8e44ad"
                      },
                      textCSS: "color:#34495e;"
                  },
                  seconds: {
                      gauge: {
                          thickness: .01,
                          bgColor: "rgba(0,0,0,0.05)",
                          fgColor: "#f39c12"
                      },
                      textCSS: "color:#34495e;"
                  }
              },
            })
          })';
$html .= '</script>';
echo $html;