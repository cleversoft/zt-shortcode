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
defined('_JEXEC') or die('Restricted access');

/**
 * Class exists checking
 */
if (!class_exists('ZtShortcodesHtml'))
{

    /**
     * @since 1.4.3
     * Used to fetch template file
     */
    class ZtShortcodesHtml extends JObject
    {

        /**
         *
         * @var Zo2Path 
         */
        private $_path;

        /**
         * Constructor
         * @param object|array $properties
         */
        public function __construct($properties = null)
        {
            parent::__construct($properties);
            /* Init local variables */
            $this->_path = ZtShortcodesPath::getInstance();
        }

        /**
         * Fetch template file
         * @param string $key
         * @return string
         */
        public function fetch($key)
        {
            $tplFile = $this->_path->getPath($key);
            /* Make sure this template file is exists */
            if ($tplFile)
            {
                $properties = $this->getProperties();
                ob_start();
                extract($properties, EXTR_REFS);
                include($tplFile);
                $content = ob_get_contents();
                ob_end_clean();
                return $content;
            }
        }

        /**
         * Include another template into current template
         * @return \Zo2Html
         */
        public function load($key)
        {
            $tplFile = $this->_path->getPath($key);
            if ($tplFile)
            {
                $properties = $this->getProperties();
                extract($properties, EXTR_REFS);
                include($tplFile);
            }
            return $this;
        }

    }

}