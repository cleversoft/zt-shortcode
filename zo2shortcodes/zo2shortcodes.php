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

if (!class_exists('plgButtonZo2Shortcodes')) {

    class plgButtonZo2Shortcodes extends JPlugin {

        /**
         * @link https://gist.github.com/proweb/7569640
         * @param string $name Editor name
         * @return \JObject
         */
        public function onDisplay($name) {

            JHtml::_('behavior.modal');
            $doc = JFactory::getDocument();
            $content = $this->_subject->getContent($name);

            $js = "
		function insertMacro(shortcode) {
			jInsertEditorText(shortcode, '" . $name . "');
			SqueezeBox.close();
		}";

            $doc->addScriptDeclaration($js);

            /* Joomla! version checking */
            $version = new JVersion();
            /* Joomla! 3.x */
            if (version_compare($version->getShortVersion(), '3.0', '>=')) {
                $declaration = " .btn {} ";
            } else {
                /* Joomla! 2.x */
                $declaration = " .button2-left {} ";
            }
            $doc->addStyleDeclaration($declaration);

            $shortcodesFile = '../plugins/editors-xtd/zo2shortcodes/render.php';

            $button = new JObject();
            $button->set('modal', true);
            $button->set('class', 'btn');
            $button->set('link', $shortcodesFile);
            $button->set('text', 'Zo2Shortcodes');
            $button->set('name', 'arrow-up');
            $button->set('options', "{handler: 'iframe', size: {x: 770, y: 400}}");

            return $button;
        }

    }

}