<?php
/*
Plugin Name: Slider Revolution
Plugin URI: http://revolution.themepunch.com/
Description: Slider Revolution - Premium responsive slider
Author: ThemePunch
Version: 5.2.5.1
Author URI: http://themepunch.com
*/

// If this file is called directly, abort.

defined('_JEXEC') or die('Restricted access');
if (!defined('ZT_ASSETS_PATH'))define('ZT_ASSETS_PATH',JPATH_ROOT.'/administrator/components/com_zt_layerslider');
if (!defined('ZT_ASSETS_URL'))define('ZT_ASSETS_URL',JUri::root().'administrator/components/com_zt_layerslider');

$document = JFactory::getDocument();

defined('DS') or define('DS', DIRECTORY_SEPARATOR);
require_once (dirname(__FILE__).'/zt.global.front.php');
$rs_ext_url = JUri::root().'administrator/components/com_zt_layerslider/';
if(strpos($rs_ext_url, 'http') === false) {
    $site_url = JUri::root();
    $rs_ext_url = (substr($site_url, -1) === '/') ? substr($site_url, 0, -1). $rs_ext_url : $site_url. $rs_ext_url;
}

if (!defined('ZT_EXT_PATH'))define( 'ZT_EXT_PATH',  dirname(__FILE__) );
if (!defined('ZT_FILE_PATH'))define( 'ZT_FILE_PATH', JPATH_ROOT.'/administrator/components/com_zt_layerslider/helpers/classes/' );
if (!defined('ZT_EXT_URL'))define( 'ZT_EXT_URL', $rs_ext_url);

//set the RevSlider Plugin as a Theme. This hides the activation notice and the activation area in the Slider Overview


//include frameword files

//include bases
require_once(ZT_FILE_PATH . 'zt.slider.functions.php');
require_once(ZT_FILE_PATH . 'zt.cssparser.class.php');
require_once(ZT_FILE_PATH . 'zt.operations.class.php');
require_once(ZT_FILE_PATH . 'zt.slider.class.php');
require_once(ZT_FILE_PATH . 'zt.output.class.php');
require_once(ZT_FILE_PATH . 'zt.slide.class.php');
require_once(ZT_FILE_PATH . 'zt.navigation.class.php');
require_once(ZT_FILE_PATH . 'zt.template.class.php');

try{
    //register the revolution slider widget
    //add shortcode
    if (!function_exists('rev_slider_shortcode')) {
    function rev_slider_shortcode($args, $mid_content = null){
        //check if defer js is enabled
        $zt_params = JComponentHelper::getParams('com_zt_layerslider');
        $js_defer = $zt_params->get('js_defer') ? 'defer="defer"' : '';
        extract(shortcode_atts(array('alias' => ''), $args, 'zt_layerslider'));
        extract(shortcode_atts(array('settings' => ''), $args, 'zt_layerslider'));
        extract(shortcode_atts(array('order' => ''), $args, 'zt_layerslider'));

        if($settings !== '') $settings = json_decode(str_replace(array('({', '})', "'"), array('[', ']', '"'), $settings) ,true);
        if($order !== '') $order = explode(',', $order);

        $sliderAlias = ($alias != '') ? $alias : ZTSliderFunctions::getVal($args,0);

        $gal_ids = check_for_shortcodes($mid_content); //check for example on gallery shortcode and do stuff

        ob_start();
        if(!empty($gal_ids)){ //add a gallery based slider
            $slider = ZTSliderOutput::putSlider($sliderAlias, '', $gal_ids);
        }else{
            $slider = ZTSliderOutput::putSlider($sliderAlias, '', array(), $settings, $order);
        }
        $content = ob_get_contents();
        ob_clean();
        ob_end_clean();

        if(!empty($slider)){
            // Do not output Slider if we are on mobile
            $disable_on_mobile = $slider->getParam("disable_on_mobile","off");
            if($disable_on_mobile == 'on'){
                $mobile = (strstr($_SERVER['HTTP_USER_AGENT'],'Android') || strstr($_SERVER['HTTP_USER_AGENT'],'webOS') || strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') ||strstr($_SERVER['HTTP_USER_AGENT'],'iPod') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad') || strstr($_SERVER['HTTP_USER_AGENT'],'Windows Phone') || wp_is_mobile()) ? true : false;
                if($mobile) return false;
            }

            $show_alternate = $slider->getParam("show_alternative_type","off");

            if($show_alternate == 'mobile' || $show_alternate == 'mobile-ie8'){
                if(strstr($_SERVER['HTTP_USER_AGENT'],'Android') || strstr($_SERVER['HTTP_USER_AGENT'],'webOS') || strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') ||strstr($_SERVER['HTTP_USER_AGENT'],'iPod') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad') || strstr($_SERVER['HTTP_USER_AGENT'],'Windows Phone') || wp_is_mobile()){
                    $show_alternate_image = $slider->getParam("show_alternate_image","");
                    return '<img class="tp-slider-alternative-image" src="'.$show_alternate_image.'" data-no-retina>';
                }
            }

            //handle slider output types
            echo "<link rel='stylesheet' type='text/css' href='".JUri::root(true) . '/administrator/components/com_zt_layerslider/assets/css/settings.css'."'>";
            echo "<script type='text/javascript' src='".JUri::root(true) . '/administrator/components/com_zt_layerslider/assets/js/jquery.themepunch.tools.min.js'."' ".$js_defer." ></script>";
            echo "<script type='text/javascript' src='".JUri::root(true) . '/administrator/components/com_zt_layerslider/assets/js/jquery.themepunch.revolution.min.js'."' ".$js_defer." ></script>";
            echo $content;
        }else
            echo $content; //normal output

    }
    }
    if (!function_exists('has_shortcode')) {

        function has_shortcode( $content, $tag ) {
        if ( false === strpos( $content, '[' ) ) {
            return false;
        }
        if (class_exists('ZtShortcodesParser')) {$scp = new ZtShortcodesParser();}
        else {require_once JPATH_ROOT.'/plugins/system/ztshortcodes/core/parser.php';$scp = new ZtShortcodesParser();}

        if ( $scp->shortcode_exists( $tag ) ) {
            preg_match_all( '/' . $scp->get_shortcode_regex() . '/', $content, $matches, PREG_SET_ORDER );
            if ( empty( $matches ) )
                return false;

            foreach ( $matches as $shortcode ) {
                if ( $tag === $shortcode[2] ) {
                    return true;
                } elseif ( ! empty( $shortcode[5] ) && has_shortcode( $shortcode[5], $tag ) ) {
                    return true;
                }
            }
        }
        return false;
    }
    }

    if (!function_exists('shortcode_atts')) {
        function shortcode_atts($pairs, $atts, $shortcode = '')
        {
            $atts = (array)$atts;
            $out = array();
            foreach ($pairs as $name => $default) {
                if (array_key_exists($name, $atts))
                    $out[$name] = $atts[$name];
                else
                    $out[$name] = $default;
            }
            return $out;
        }
    }

    if (!function_exists('check_for_shortcodes')) {
        function check_for_shortcodes($mid_content)
        {
            if ($mid_content !== null) {
                if (has_shortcode($mid_content, 'gallery')) {

                    preg_match('/\[gallery.*ids=.(.*).\]/', $mid_content, $img_ids);

                    if (isset($img_ids[1])) {
                        if ($img_ids[1] !== '') return explode(',', $img_ids[1]);
                    }
                }
            }
            return false;
        }
    }
    /**
     *
     * put rev slider on the page.
     * the data can be slider ID or slider alias.
     */
    if (!function_exists('checkRevSliderExists')) {
        function checkRevSliderExists($alias)
        {
            $rev = new ZTSlider();
            return $rev->isAliasExists($alias);
        }
    }

//	//doing
//	ob_start();
//	$content = ob_get_contents();
//	preg_match_all( '/' . '\\['                              // Opening bracket
//		. '(\\[?)'                           // 1: Optional second opening bracket for escaping shortcodes: [[tag]]
//		. "(zt_layerslider)"                     // 2: Shortcode name
//		. '(?![\\w-])'                       // Not followed by word character or hyphen
//		. '('                                // 3: Unroll the loop: Inside the opening shortcode tag
//		. '[^\\]\\/]*'                   // Not a closing bracket or forward slash
//		. '(?:'
//		. '\\/(?!\\])'               // A forward slash not followed by a closing bracket
//		. '[^\\]\\/]*'               // Not a closing bracket or forward slash
//		. ')*?'
//		. ')'
//		. '(?:'
//		. '(\\/)'                        // 4: Self closing tag ...
//		. '\\]'                          // ... and closing bracket
//		. '|'
//		. '\\]'                          // Closing bracket
//		. '(?:'
//		. '('                        // 5: Unroll the loop: Optionally, anything between the opening and closing shortcode tags
//		. '[^\\[]*+'             // Not an opening bracket
//		. '(?:'
//		. '\\[(?!\\/\\2\\])' // An opening bracket not followed by the closing shortcode tag
//		. '[^\\[]*+'         // Not an opening bracket
//		. ')*+'
//		. ')'
//		. '\\[\\/\\2\\]'             // Closing shortcode tag
//		. ')?'
//		. ')'
//		. '(\\]?)' . '/', $content, $matches, PREG_SET_ORDER );
    if(isset($attributes) and !empty($attributes)) {
        if (isset($attributes->alias)) {
            $args = array();
            $args['alias'] = $attributes->alias;
            rev_slider_shortcode($args);
        }
    } else {echo JText::_('SLIDER COULD NOT BE FOUND');}



}catch(Exception $e){
    $message = $e->getMessage();
    $trace = $e->getTraceAsString();
    echo JText::_("Revolution Slider Error:",'revslider')." <b>".$message."</b>";
}

?>