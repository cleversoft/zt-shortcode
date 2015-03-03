<?php

/**
 * ZT Shortcodes
 * A powerful Joomla plugin to help effortlessly customize your own content and style without HTML code knowledge
 *
 * @version     1.0.0
 * @author      ZooTemplate
 * @email       support@zootemplate.com
 * @link        http://www.zootemplate.com
 * @copyright   Copyright (c) 2015 ZooTemplate
 * @license     GPL v2
 */
?>

<?php
$socialArray = array(
    $options->get('facebook'),
    $options->get('twitter'),
    $options->get('instagram'),
    $options->get('dribbble'),
    $options->get('google'),
    $options->get('linkedin'),
    $options->get('blogger'),
    $options->get('tumblr'),
    $options->get('reddit'),
    $options->get('yahoo'),
    $options->get('deviantart'),
    $options->get('vimeo'),
    $options->get('youtube'),
    $options->get('pinterest'),
    $options->get('rss'),
    $options->get('digg'),
    $options->get('flickr'),
    $options->get('forrst'),
    $options->get('myspace'),
    $options->get('skype'),
    $options->get('paypal'),
    $options->get('dropbox'),
    $options->get('soundcloud'),
    $options->get('vk')
);

$colorIcon = $options->get('color');
$bgIcon = $options->get('bgColor');
?>

<div class="clearfix zt-social-networks <?php echo ($options->get('boxed')) ? 'boxed-icons' : ''; ?>">

    <?php $i = 0; foreach ($socialArray as $item) {
        $iconFont = str_replace("#", "", $item);

        ?>
                <?php if ($item != NULL) { ?>

                    <a title="Facebook"
                       style="color:<?php echo $colorIcon; ?>;background-color:<?php echo $bgIcon; ?>;border-color:<?php echo $bgIcon; ?>;border-radius: <?php echo $options->get('radius') . 'px'; ?>;"
                       href="<?php echo $item; ?>" target="_blank" class="zt-social-icon-item zt-icon-<?php echo $iconFont; ?>">
                        <?php if($iconFont == 'vimeo') { ?>
                        <i class="fa fa-<?php echo $iconFont . '-square'; ?>"></i>
                        <?php } elseif($iconFont == 'blogger') { ?>
                        <i class="fa fa-<?php echo 'adn'; ?>"></i>
                        <?php } elseif($iconFont == 'forrst') { ?>
                        <i class="fa fa-<?php echo 'xing-square'; ?>"></i>
                        <?php } elseif($iconFont == 'myspace') { ?>
                        <i class="fa fa-<?php echo 'wifi'; ?>"></i>
                        <?php } else { ?>
                        <i class="fa fa-<?php echo $iconFont; ?>"></i>
                        <?php } ?>
                    </a>

            <?php }
        $i++;
    } ?>
</div>
