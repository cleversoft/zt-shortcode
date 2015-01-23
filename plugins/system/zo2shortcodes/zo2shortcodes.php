<?php

/**
 * Zo2 (http://www.zo2framework.org)
 * A powerful Joomla template framework
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

        public function __construct(&$subject, $config = array())
        {
            parent::__construct($subject, $config);

            require_once __DIR__ . '/core/bootstrap.php';
        }

        /**
         * 
         */
        public function onAfterRender()
        {
            $shortcodes = $this->_getShortcodes();
            $parser = new JBBCode\Parser();
            foreach ($shortcodes as $shortcode)
            {
                $shortcode = new JObject($shortcode);
                $builder = new JBBCode\CodeDefinitionBuilder($shortcode->get('tag'), $shortcode->get('tag'));
                $builder->setUseOption(true);
                $parser->addCodeDefinition($builder->build()->setShortcode($shortcode));
            }
            $html = JResponse::getBody();
            $parser->parse($html);
            $html = $parser->getAsHTML();
            JResponse::setBody($html);
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