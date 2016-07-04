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
    data-tag="<?php echo $shortcode; ?>"
    >
    <!-- Render parent fields -->                                                
    <?php
    if (isset($data['sql_options'])) {
        if(is_array($data['sql_options']) and !empty($data['sql_options'])) {
            foreach ($data['fields'] as $k=>$d_f) {
                if (trim($data['sql']['target']) == trim($data['fields'][$k]['name'])) {
                    $data['fields'][$k]['options'] = array();
                    foreach ($data['sql_options'] as $key=>$d_op) :
                        $data['fields'][$k]['options'][$key]['value'] = $d_op['alias'];
                        $data['fields'][$k]['options'][$key]['label'] = $d_op['title'];
                    endforeach;
                }
            }

        }
    }
    $this->load('Shortcodes://html/admin/form.fields.php', array('fields' => isset($data['fields']) ? $data['fields'] : array()));
    ?>                                                                 
</form>  