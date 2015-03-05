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
         * 
         */
        public function onAfterRender()
        {
            // Only process for frontend
            if (JFactory::getApplication()->isSite())
            {
                $template = JFactory::getApplication()->getTemplate();
                $templateDir = JPATH_ROOT . '/templates/' . $template . '/html/plg_system_ztshortcodes';
                ZtShortcodesPath::getInstance()->registerNamespace('Shortcodes', $templateDir);

                global $zo2Shortcodes;
                $path = ZtShortcodesPath::getInstance();
                // Prepare buffer
                $buffer = array();
                // Shortcodes process
                $shortcodes = $this->_getShortcodes();
                $parser = new JBBCode\Parser();
                foreach ($shortcodes as $shortcode)
                {
                    // Convert to JObject
                    $shortcode = new JObject($shortcode);
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

                if (!empty($zo2Shortcodes['_css']))
                {
                    foreach ($zo2Shortcodes['_css'] as $key => $url)
                    {
                        $buffer[] = '<link rel="stylesheet" type="text/css" href="' . $url . '">';
                    }
                }
                if (!empty($zo2Shortcodes['_js']))
                {
                    foreach ($zo2Shortcodes['_js'] as $key => $url)
                    {
                        $buffer[] = '<script src="' . $url . '"></script>';
                    }
                }
                $buffer = implode(PHP_EOL, $buffer);
                $html = str_replace('</body>', $buffer . '</body>', $html);
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