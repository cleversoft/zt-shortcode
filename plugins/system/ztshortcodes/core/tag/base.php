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
if (!class_exists('ZtShortcodesTagBase'))
{

    /**
     * 
     */
    class ZtShortcodesTagBase
    {

        /**
         * 
         * @param type $atts
         * @param type $content
         * @param type $tag
         * @return type
         */
        public function render($atts, $content, $tag)
        {
            $atts = new JObject($atts);
            $html = new ZtShortcodesHtml();
            $html->set('attributes', $atts);
            $html->set('content', $content);
            $html->set('tag', $tag);

            return $html->fetch('Shortcodes://html/site/' . $tag . '.php');
        }

    }

}