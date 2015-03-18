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
global $ztShortcodes;
if (isset($ztShortcodes['tabs'][$attributes->get('id')])) :
    $tabs = $ztShortcodes['tabs'][$attributes->get('id')];


?>
<div role="tabpanel" class="zt-tabs zt-tab-<?php echo $attributes->get('type');  ?>">
<ul
    class="nav nav-tabs">
    <?php foreach ($tabs as $key => $tab) :
        $tabkey = str_replace(" ", "-", $tab['attributes']->get('title'));
        $tabhref = strtolower($tabkey);
        ?>
        <li class="<?php echo ($tab['attributes']->get('active') == 'yes') ? 'active' : ''; ?>">
            <a
                href="#<?php echo $tabhref; ?>"
                data-toggle="tab">
                <?php echo $tab['attributes']->get('title'); ?>
            </a>
        </li>
    <?php
    endforeach;
    ?>
</ul>
<div
    class="tab-content"
    >
    <?php foreach ($tabs as $key => $tab) :
        $tabkey = str_replace(" ", "-", $tab['attributes']->get('title'));
        $tabhref = strtolower($tabkey);
        ?>
        <div class="tab-pane fade <?php echo ($tab['attributes']->get('active') == 'yes') ? 'active in' : ''; ?>" id="<?php echo $tabhref; ?>">
            <?php echo $tab['content']; ?>
        </div>
    <?php
    endforeach;
    ?>
</div>
<?php endif; ?>
