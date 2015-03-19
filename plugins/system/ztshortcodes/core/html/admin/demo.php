<?php
/**
 * @name        Zt Shortcodes
 * @package     Plugin
 * @subpackage  System
 * @author      Viet Vu <info@jooservices.com>
 * @link        http://jooservices.com
 * @copyright   JOOservices Ltd
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * 
 * @version    1.0.2
 * @since      1.0.0
 */
defined('_JEXEC') or die('Restricted access');

$root = rtrim(JUri::root(), '/');
$path = ZtShortcodesPath::getInstance();
require_once JPATH_ROOT . '/plugins/system/crexshortcodes/core/bootstrap.php';
$jinput = JFactory::getApplication()->input;
$html = $_REQUEST['bbcode'];
$parser = ZtShortcodesParser::getInstance();
?>
<html>
    <head>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="<?php echo $root . '/media/jui/js/bootstrap.min.js'; ?>"></script>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="<?php echo $root . '/media/jui/css/bootstrap.min.css'; ?>">
    </head>
    <body>
        <div class="container-fluid" style="margin-top: 10px;">
            <div class="row-fluid">
                <div class="span12">
                    <?php echo $parser->do_shortcode($html); ?>
                </div>
            </div>
        </div>
    </body>
</html>