<?php
/**
 * @name        Crex Shortcodes
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
?>
<!-- Render all fields of shortcode -->
<?php foreach ($fields as $field): ?>
    <?php echo CrexShortcodesField::_($field); ?>
<?php endforeach; ?>      