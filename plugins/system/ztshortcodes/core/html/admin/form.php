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

$id = ZtShortcodesHelperCommon::getAlias($shortcode);
?>
<form 
    class="<?php echo $class; ?>" 
    id="<?php echo $id; ?>"
    data-crexsc-tag="<?php echo $shortcode; ?>"
    data-crexsc-options="<?php echo htmlentities(json_encode($data)); ?>"
    >
    <!-- Render parent fields -->                                                
    <?php
    $this->load('Shortcodes://html/admin/form.fields.php', array('fields' => isset($data['attributes']) ? $data['attributes'] : array()));
    ?>                                                                 
</form>  