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
if (!class_exists('PlgButtonZtShortcodes')) {


    /**
     * 
     */
    class PlgButtonZtShortcodes extends JPlugin {

        /**
         * Load the language file on instantiation.
         *
         * @var    boolean
         * @since  3.1
         */
        protected $autoloadLanguage = true;

        /**
         * Display the button.
         *
         * @param   string   $name    The name of the button to display.
         * @param   string   $asset   The name of the asset being edited.
         * @param   integer  $author  The id of the author owning the asset being edited.
         *
         * @return  array    A two element array of (imageName, textToInsert) or false if not authorised.
         */
        public function onDisplay($name, $asset, $author) {
            $app = JFactory::getApplication();

            $extension = $app->input->get('option');

            if ($asset == '') {
                $asset = $extension;
            }


            $link = 'index.php?ztshortcodes_task=display&ztshortcodes_view=shortcodes';
            JHtml::_('behavior.modal');
            $button = new JObject;
            $button->modal = true;
            $button->class = 'btn';
            $button->link = $link;
            $button->text = JText::_('PLG_EDITORS-XTD_ZTSHORTCODES_BUTTON');
            $button->name = 'picture';
            $button->options = "{handler: 'iframe', size: {x: 900, y: 600}}";

            return $button;
        }

    }

}