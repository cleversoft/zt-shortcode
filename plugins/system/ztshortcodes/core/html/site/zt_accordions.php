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
$parentId = ZtShortcodesHelperCommon::getUniqueString('zt-accordion-');
?>
<div class="accordion<?php echo ' accordion-'. $attributes->get('type'); ?>" id="<?php echo $parentId; ?>">

    <!-- Sub content -->
    <?php
        echo $content;
    ?>    
</div>

