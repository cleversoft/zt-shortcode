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
<div class="row-fluid">              
    <div class="span12">
        <div id="crexsc-generator" class="">
            <!-- Display form for each shortcode -->
            <?php foreach ($list as $shortcode => $data) : ?>                          
                <?php $shortcodeAlias = ZtShortcodesHelperCommon::getAlias($shortcode); ?>                                  
                <div 
                    class="form <?php echo $shortcodeAlias; ?>" 
                    id="<?php echo $shortcodeAlias; ?>"                                
                    >    
                    <div class="row-fluid">
                        <!-- Parent fields -->
                        <div class="span6">
                            <!-- Parent form -->                   
                            <blockquote>Parent fields<small>Use for parent tag generator</small></blockquote>                         
                            <div class="crexsc-main">
                                <?php
                                $this->load('Shortcodes://html/admin/form.php', array(
                                    'data' => $data,
                                    'class' => 'crexsc-form parent',
                                    'shortcode' => $shortcode
                                ));
                                ?>                              
                            </div>
                        </div>

                        <!-- Sub fields -->
                        <div class="span6">                                        
                            <?php if (isset($data['subTag'])) : ?>
                                <blockquote>Child fields<small>Use for sub tag generator</small></blockquote>                                          
                                <?php $subTag = $data['subTag']; ?>
                                <?php foreach ($subTag as $subShortcode => $data) : ?>                                        
                                    <?php $subShortcodeAlias = ZtShortcodesHelperCommon::getAlias($subShortcode); ?>
                                    <div class="crexsc-sub">                                                                          
                                        <?php
                                        $this->load('Shortcodes://html/admin/form.php', array(
                                            'data' => $data,
                                            'class' => 'crexsc-form child',
                                            'shortcode' => $subShortcode
                                        ));
                                        ?>                                          
                                    </div>

                                <?php endforeach; ?>

                                <button 
                                    type="button" 
                                    class="btn btn-default"
                                    onClick="crex.shortcodes.cloneChildForm('#<?php echo $shortcodeAlias; ?>')"
                                    >Add item</button>
                                <?php endif; ?>
                        </div>
                    </div>

                    <button 
                        type="button" 
                        class="btn btn-primary" 
                        onClick="crex.shortcodes.generateCode('#<?php echo $shortcodeAlias; ?>')">Generate</button>                                                                   
                </div>
            <?php endforeach; ?>                                     
        </div>
    </div>
</div>