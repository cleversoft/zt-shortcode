<?php

/**
 * Zo2 Shortcodes (http://www.zo2framework.org)
 *
 * @link        http://www.zo2framework.org
 * @link        http://github.com/aploss/zo2
 * @author      ZooTemplate <http://zootemplate.com>
 * @copyright   Copyright (c) 2013 APL Solutions (http://apl.vn)
 * @license     GPL v2
 */
defined('_JEXEC') or die('Restricted access');

jimport('joomla.plugin.plugin');

/**
 * Class exists checking
 */
if (!class_exists('plgSystemZo2Shortcodes'))
{

    /**
     * 
     */
    class plgSystemZo2Shortcodes extends JPlugin
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

        public function onAfterRoute()
        {
            $jinput = JFactory::getApplication()->input;
            if ($view = $jinput->get('zo2shortcodes_view'))
            {
                $html = new Zo2ShortcodesHtml();
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
                $path = Zo2ShortcodesPath::getInstance();
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
                    $depend = Zo2ShortcodesPath::getInstance()->getPath('Shortcodes://depends/' . $shortcode->get('tag') . '.php');
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
            $jsonFile = Zo2ShortcodesPath::getInstance()->getPath('Shortcodes://assets/shortcodes.json');
            if ($jsonFile)
            {
                return json_decode(file_get_contents($jsonFile), true);
            }
            return array();
        }

    }

}