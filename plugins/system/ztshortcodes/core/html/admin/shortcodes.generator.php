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
?>

<div id="zt-sc-generator" class="">
    <!-- Display form for each shortcode -->
    <?php foreach ($list as $shortcode => $data) : ?>
        <?php $shortcodeAlias = ZtShortcodesHelperCommon::getAlias($shortcode); ?>
        <div
            class="form <?php echo $shortcodeAlias; ?>"
            id="<?php echo $shortcodeAlias; ?>"
            >
                <!-- Parent fields -->
                    <!-- Parent form -->
                    <div class="zt-main">
                        <?php
                        $this->load('Shortcodes://html/admin/form.php', array(
                            'data' => $data,
                            'class' => 'zt-form parent',
                            'shortcode' => $shortcode
                        ));
                        ?>
                        <?php if (isset($data['subTag'])) : ?>
                        <!-- Sub tag -->
                        <div class="container-child">

                                <?php $subTag = $data['subTag']; ?>
                                <?php foreach ($subTag as $subShortcode => $data) : ?>
                                    <?php $subShortcodeAlias = ZtShortcodesHelperCommon::getAlias($subShortcode); ?>
                                    <div class="zt-sub">
                                        <?php
                                        $this->load('Shortcodes://html/admin/form.php', array(
                                            'data' => $data,
                                            'class' => 'zt-form child',
                                            'shortcode' => $subShortcode
                                        ));
                                        ?>
                                    </div>

                                <?php endforeach; ?>

                                <button
                                    type="button"
                                    class="btn btn-default"
                                    onClick="zt.shortcode.cloneChildForm('#<?php echo $shortcodeAlias; ?>')"
                                    >Add item</button>
                        </div>
                        <?php endif; ?>
                    </div>
        </div>
    <?php endforeach; ?>
</div>