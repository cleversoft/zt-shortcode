<?php
/**
 * Created by PhpStorm.
 * User: chinhbeo
 * Date: 1/26/15
 * Time: 9:02 AM
 */

?>

<div class="zo2-progress progress">
    <div class="progress-bar progress-bar-<?php echo $options->get('type'); ?> progress-bar-<?php echo $options->get('strip'); ?> <?php echo $options->get('animated'); ?>" role="progressbar" aria-valuenow="<?php echo $options->get('now-value'); ?>" aria-valuemin="<?php echo $options->get('min-value'); ?>" aria-valuemax="<?php echo $options->get('max-value'); ?>" style="width: <?php echo $options->get('now-value'); ?>%">
        <?php if($options->get('hidden-content') == 'hidden') {
            echo '<span class="sr-only">'. $content .'</span>';
        } else {
            echo $content;
        }
        ?>
    </div>
</div>