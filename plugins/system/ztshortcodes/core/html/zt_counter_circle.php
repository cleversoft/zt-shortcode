<?php
/**
 * Created by PhpStorm.
 * User: chinhbeo
 * Date: 2/3/15
 * Time: 11:31 AM
 */
?>

<div class="zo2-counter-wrap">
    <span class="chart <?php echo $options->get('extra-class'); ?>"
          data-easing="<?php echo $options->get('easing'); ?>"
          data-percent="<?php echo $options->get('percent'); ?>"
          data-barcolor="<?php echo $options->get('barColor'); ?>"
          data-trackcolor="<?php echo $options->get('trackColor'); ?>"
          data-scalelength="<?php echo $options->get('scaleLength'); ?>"
          data-linecap="<?php echo $options->get('lineCap'); ?>"
          data-linewidth="<?php echo $options->get('lineWidth'); ?>"
          data-size="<?php echo $options->get('size'); ?>"
          data-duration="<?php echo $options->get('duration'); ?>"
          style="width: <?php echo $options->get('size') . 'px'; ?>; height: <?php echo $options->get('size') . 'px'; ?>; line-height: <?php echo $options->get('size') . 'px'; ?>">

        <?php if ($options->get('content-type') == 'percent') {
            echo '<span class="percent"></span>';
        } elseif ($options->get('content-type') == 'icon') {
            echo '<span><i class="' . $options->get('icon') . '"></i></span>';
        } else {
            echo '<span>' . $content . '</span>';
        } ?>


    </span>
</div>