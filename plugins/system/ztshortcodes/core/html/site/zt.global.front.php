<?php
/**
 * Created by PhpStorm.
 * User: Thuan
 * Date: 6/22/2016
 * Time: 2:48 PM
 */

class ZtGlobalFrontVariables{
    public static $ztSliderVersion = "2.0";
    public static $ztslider_screens = array();
    public static $ztslider_fonts = array();
    public static $shortcode_tags = array();
    
    /*
     * get version
     */
    public static function getZtVersion(){
        return ZtGlobalFrontVariables::$ztSliderVersion;
    }

    public static function setZtVersion($v) {
        self::$ztSliderVersion = $v;
    }

    public static function getZtScreen(){
        return ZtGlobalFrontVariables::$ztslider_screens;
    }

    public static function setZtScreen($screen) {
        self::$ztslider_screens = $screen;
    }

    public static function getZtfonts(){
        return ZtGlobalFrontVariables::$ztslider_fonts;
    }

    public static function setZtfonts($font) {
        self::$ztslider_fonts = $font;
    }

    public static function getZtShortCodeTags(){
        return ZtGlobalFrontVariables::$shortcode_tags;
    }

    public static function setZtShortCodeTags($shr_tgs) {
        self::$shortcode_tags = $shr_tgs;
    }

}