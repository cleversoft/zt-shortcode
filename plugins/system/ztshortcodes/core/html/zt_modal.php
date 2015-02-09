<?php
/**
 * Created by PhpStorm.
 * User: chinhbeo
 * Date: 2/3/15
 * Time: 9:16 AM
 */

?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-<?php echo $options->get('button-type'); ?> btn-<?php echo $options->get('button-size'); ?>" data-toggle="modal" data-target="#<?php echo $options->get('id'); ?>">
    <?php echo $options->get('button-text'); ?>
</button>

<!-- Modal -->
<div class="zt-modal modal fade" id="<?php echo $options->get('id'); ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $options->get('id'); ?>Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><?php echo $options->get('title'); ?></h4>
            </div>
            <div class="modal-body">
                <?php echo $content; ?>
            </div>
        </div>
    </div>
</div>
