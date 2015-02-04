<?php
/**
 * Created by PhpStorm.
 * User: chinhbeo
 * Date: 1/26/15
 * Time: 9:02 AM
 */

?>

<div class="zo2-progress progress-bar progress-<?php echo $options->get('strip'); ?> <?php echo $options->get('animated'); ?>" style="height: <?php echo $options->get('height').'px'; ?>; background-color: <?php echo $options->get('trackColor'); ?>">
    <div class="progress progress-bar-content"
         role="progressbar"
         data-percentage="<?php echo $options->get('now-value'); ?>"
         aria-valuenow="<?php echo $options->get('now-value'); ?>"
         aria-valuemin="<?php echo $options->get('min-value'); ?>"
         aria-valuemax="<?php echo $options->get('max-value'); ?>"
         style="background-color: <?php echo $options->get('barColor'); ?>">

    </div>
    <?php
        echo '<span style="color: '. $options->get('titleColor') .'" class="progress-title sr-only">'. $content .'</span>';
    ?>
</div>