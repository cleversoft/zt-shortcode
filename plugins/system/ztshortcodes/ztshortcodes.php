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
            if ($view = $jinput->get('ztshortcodes_view'))
            {
                $html = new ZtShortcodesHtml();
                $buffer = $html->fetch('Shortcodes://html/admin/' . $view . '.php');
                echo $buffer;
                exit();
            }
        }

        /**
         * 
         */
        public function onAfterRender()
        {
            // Only process for frontend
            if (JFactory::getApplication()->isSite())
            {
                $path = ZtShortcodesPath::getInstance();
                // Prepare buffer
                $buffer = array();
                // Init with Bootstrap 3
                if ($this->params->get('load_bs3', true))
                {
                    $buffer [] = '<link rel="stylesheet" type="text/css" href="' . $path->getUrl('Shortcodes://assets/bootstrap/css/bootstrap.min.css') . '">';
                    $buffer [] = '<script src="' . $path->getUrl('Shortcodes://assets/bootstrap/js/bootstrap.min.js') . '"></script>';
                }
                // Init with Font-awesome
                if ($this->params->get('load_fa', true))
                {
                    $buffer [] = '<link rel="stylesheet" type="text/css" href="' . $path->getUrl('Shortcodes://assets/font-awesome/css/font-awesome.min.css') . '">';
                }
                // Shortcodes process
                $shortcodes = $this->_getShortcodes();
                $parser = new JBBCode\Parser();
                foreach ($shortcodes as $shortcode)
                {
                    // Convert to JObject
                    $shortcode = new JObject($shortcode);
                    // Load depend if needed
                    $depend = ZtShortcodesPath::getInstance()->getPath('Shortcodes://depends/' . $shortcode->get('tag') . '.php');
                    // Include depends to buffer
                    if ($depend)
                    {
                        $buffer[] = file_get_contents($depend);
                    }
                    // Setup shortcode
                    $builder = new JBBCode\CodeDefinitionBuilder($shortcode->get('tag'), $shortcode->get('tag'));
                    // This shortcode required to input options
                    if (count($shortcode->get('options')) > 0)
                    {
                        echo $shortcode->get('tag') . '<br />';
                        $builder->setUseOption(true);
                        $parser->addCodeDefinition($builder->build()->setShortcode($shortcode));
                    } else // This shortcode do not required to input options
                    {
                        $builder->setUseOption(false);
                        $parser->addCodeDefinition($builder->build()->setShortcode($shortcode));
                    }
                }
                // Get body
                $html = JResponse::getBody();
                // Parsing
                $parser->parse($html);
                // Parse to HTML
                $html = $parser->getAsHTML();
                $buffer = implode(PHP_EOL, $buffer);
                $html = str_replace('</head>', $buffer . '</head>', $html);
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