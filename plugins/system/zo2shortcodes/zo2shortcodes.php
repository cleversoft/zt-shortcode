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

        public function __construct(&$subject, $config = array())
        {
            parent::__construct($subject, $config);

            require_once __DIR__ . '/core/bootstrap.php';
            if (JFactory::getApplication()->isSite())
            {
                if ($this->params->get('load_bs3', true))
                {
                    $doc = JFactory::getDocument();
                    $doc->addStyleSheet(Zo2ShortcodesPath::getInstance()->getUrl('Shortcodes://assets/bootstrap/css/bootstrap.min.css'));
                    $doc->addStyleSheet(Zo2ShortcodesPath::getInstance()->getUrl('Shortcodes://assets/bootstrap/js/bootstrap.min.js'));
                }
            }
        }

        /**
         * 
         */
        public function onAfterRender()
        {
            if (JFactory::getApplication()->isSite())
            {
                $shortcodes = $this->_getShortcodes();
                $parser = new JBBCode\Parser();
                foreach ($shortcodes as $shortcode)
                {
                    $shortcode = new JObject($shortcode);
                    // Load depend if needed
                    $depend = Zo2ShortcodesPath::getInstance()->getPath('Shortcodes://depends/' . $shortcode->get('tag') . '.php');
                    if ($depend)
                    {
                        require_once $depend;
                    }
                    $builder = new JBBCode\CodeDefinitionBuilder($shortcode->get('tag'), $shortcode->get('tag'));

                    if (count($shortcode->get('options')) > 0)
                    {
                        $builder->setUseOption(true);
                        $parser->addCodeDefinition($builder->build()->setShortcode($shortcode));
                    } else
                    {
                        $builder->setUseOption(false);
                        $parser->addCodeDefinition($builder->build()->setShortcode($shortcode));
                    }
                }
                $html = JResponse::getBody();
                $parser->parse($html);
                $html = $parser->getAsHTML();
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