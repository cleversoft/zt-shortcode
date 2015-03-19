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

/**
 * Class exists checking
 */
if (!class_exists('ZtShortcodesTagZt_tabs'))
{

    /**
     * 
     */
    class ZtShortcodesTagZt_tabs extends ZtShortcodesTagBase
    {

        /**
         * Prepare attributes for this tag
         * @param array $atts
         * @param type $tag
         * @return type
         */
        public function init($atts, $tag)
        {
            $atts['id'] = ZtShortcodesHelperCommon::getUniqueString($tag);
            return $atts;
        }

    }

}