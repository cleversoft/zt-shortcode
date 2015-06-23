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


jimport('joomla.plugin.plugin');

/**
 * Class exists checking
 */
if (!class_exists('plgSystemZtShortcodes'))
{

    /**
     * 
     */
    class plgSystemZtShortcodes extends JPlugin
    {

        /**
         * 
         * @param type $subject
         * @param type $config
         */
        public function __construct(&$subject, $config = array())
        {
            parent::__construct($subject, $config);
            require_once __DIR__ . '/core/bootstrap.php';
        }

        /**
         * Service for backend request
         */
        public function onAfterRoute()
        {
            $jinput = JFactory::getApplication()->input;
            if ($task = $jinput->get('ztshortcodes_task'))
            {
                $view = $jinput->get('ztshortcodes_view');
                $html = new ZtShortcodesHtml();
                $buffer = $html->fetch('Shortcodes://html/admin/' . $view . '.php');
                echo $buffer;
                exit();
            }
        }

        /**
         * On before render event handler
         */
        public function onBeforeRender()
        {
            $jApp = JFactory::getApplication();
            if ($jApp->isSite())
            {
                $document = JFactory::getDocument();
                /* Fix Kunenka conflict */
                $document->_metaTags['standard']['og:description'] = $this->_removeShortCode($document->_metaTags['standard']['og:description']);
                /* Fix Joomla! conflict */
                $document->description = $this->_removeShortCode($document->description);
            }
        }

        /**
         * Make description
         * @param type $content
         * @return type
         */
        private function _removeShortCode($content)
        {
            $content = str_replace('[', '<', $content);
            $content = str_replace(']', '>', $content);
            $content = str_replace(PHP_EOL, '', $content);
            $content = strip_tags($content);
            return substr($content, 0, (strlen($content) > 255) ? 255 : strlen($content));
        }

        /**
         * After render event handler
         */
        public function onAfterRender()
        {
            // Only process for frontend
            if (JFactory::getApplication()->isSite())
            {
                require_once __DIR__ . '/core/bootstrap.php';
                $template = JFactory::getApplication()->getTemplate();
                $templateDir = JPATH_ROOT . '/templates/' . $template . '/html/plg_system_ztshortcodes';
                ZtShortcodesPath::getInstance()->registerNamespace('Shortcodes', $templateDir);
                // Get body
                $html = JResponse::getBody();
                $parser = ZtShortcodesParser::getInstance();
                // Execute shortcodes
                $html = $parser->do_shortcode($html);
                // Set back to Joomla!
                JResponse::setBody($html);
            }
        }

        /**
         * 
         * @return array
         */
        private function _getShortcodes()
        {
            $jsonFile = ZtShortcodesPath::getInstance()->getPath('Shortcodes://assets/shortcodes.json');
            if ($jsonFile)
            {
                return json_decode(file_get_contents($jsonFile), true);
            }
            return array();
        }

    }

}