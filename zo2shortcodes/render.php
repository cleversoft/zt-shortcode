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
define('_JEXEC', 1); //  This will allow to access file outside of joomla.

define('JPATH_BASE', realpath(dirname(__FILE__) . '/../../../'));
require_once ( JPATH_BASE . '/includes/defines.php' );
require_once ( JPATH_BASE . '/includes/framework.php' );

$jsonFile = JPATH_ROOT . '/plugins/system/zo2/assets/zo2/shortcodes.json';
$data = json_decode(file_get_contents($jsonFile));
?>
<script>
    function insertMacro(shortcode) {
        jInsertEditorText(shortcode, 'jform_articletext');
        SqueezeBox.close();
    }
</script>
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Pattern</th>               
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $index => $item) { ?>
            <tr>
                <td><?php echo $index + 1; ?></td>
                <td>                    
                    <a href="" onclick='window.parent.insertMacro("<?php echo $item->pattern; ?>");
                                return false;' >
                           <?php echo $item->name; ?>
                    </a>
                </td>
                <td><?php echo $item->pattern; ?></td>               
            </tr>           
        <?php } ?>
    </tbody>
</table>

