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

?>

<?php
$class = $attributes->get('class');
?>

<div class="zt-flip-box<?php echo ' '.$class; ?>">
    <div class="zt-flip-box-inner">
        <?php echo $content; ?>
    </div>
</div>