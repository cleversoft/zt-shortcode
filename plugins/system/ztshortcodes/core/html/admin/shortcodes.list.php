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

// Convert shortcodes list to groupping
foreach ($list as $tag => $data)
{
    $grouped[$data['group']][$tag] = $data;
}
?>
<div class="row-fluid">
    <div class="span12">
        <div id="crexsc-list" class="row-fluid" role="tabpanel" data-example-id="togglable-tabs">
            <!-- Nav tabs -->
            <ul id="myTab" class="nav nav-tabs">
                <?php $first = true; ?>
                <?php foreach ($grouped as $groupName => $shortcodes) : ?>
                    <?php $groupNameAlias = ZtShortcodesHelperCommon::getAlias($groupName); ?>
                    <li                                
                        class="<?php echo ($first) ? 'active' : ''; ?> crexsc-group-title">
                        <a 
                            href="#<?php echo $groupNameAlias; ?>" 
                            id="crexsc-group-tab-<?php echo $groupNameAlias; ?>" 
                            role="tab" 
                            data-toggle="tab" 
                            aria-controls="<?php echo $groupNameAlias; ?>" 
                            aria-expanded="<?php echo ($first) ? 'true' : ''; ?>">
                                <?php echo $groupName; ?>
                        </a>
                    </li>
                    <?php $first = false; ?>
                <?php endforeach; ?>      
            </ul>
            <!-- Tab panes -->
            <div id="myTabContent" class="tab-content">
                <?php $first = true; ?>
                <?php foreach ($grouped as $groupName => $shortcodes) : ?>
                    <?php $groupNameAlias = ZtShortcodesHelperCommon::getAlias($groupName); ?>
                    <div                                 
                        class="tab-pane fade<?php echo ($first) ? ' active in' : ''; ?> crexsc-group-content" 
                        id="<?php echo $groupNameAlias; ?>"                                 
                        <!-- Render each shortcodes in a group -->
                        <ul class="unstyled crexsc-shortcodes">
                                <?php foreach ($grouped[$groupName] as $shortcode => $data) : ?>
                                    <?php
                                    $title = (isset($data['description']) ? $data['description'] : '' );
                                    ?>
                                <li class="crexsc-shortcode">
                                    <i class="<?php echo $data['icon']; ?>"></i>
                                    <a href="#<?php echo ZtShortcodesHelperCommon::getAlias($shortcode); ?>" 
                                       onClick="crex.shortcodes.showForm(this);">
                                        <span class="hasTooltip" data-toggle="tooltip" title="<?php echo $title; ?>"><strong><var><?php echo $data['name']; ?></var></strong></span>
                                    </a>                       
                                </li>
                            <?php endforeach; ?> 
                        </ul>
                    </div>
                    <?php $first = false; ?>
                <?php endforeach; ?> 
            </div>                                  
        </div>
    </div>               
</div>