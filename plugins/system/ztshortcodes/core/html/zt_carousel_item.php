<?php
/**
 * Created by PhpStorm.
 * User: chinhbeo
 * Date: 2/5/15
 * Time: 11:16 AM
 */
defined('_JEXEC') or die('Restricted access');

?>

<div class="carousel-item">
    <div class="carousel-item-inner">
        <img src="<?php echo $options->get('image'); ?>" alt="carousel"/>
        <?php if($options->get('link') != '' || $options->get('title') != ''): ?>
        <div class="image-extras">
            <div class="image-extras-content">
                <?php if($options->get('link') != '') : ?>
                <a href="<?php echo $options->get('link'); ?>" class="icon-link"><i class="fa fa-link"></i></a>
                <?php endif; if($options->get('title') != ''): ?>
                <h3><a href="<?php echo $options->get('link'); ?>"><?php echo $options->get('title'); ?></a></h3>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>