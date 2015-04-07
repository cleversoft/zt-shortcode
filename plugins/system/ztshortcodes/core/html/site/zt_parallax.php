<?php
/**
 * Zt Shortcodes
 * A powerful Joomla plugin to help effortlessly customize your own content and style without HTML code knowledge
 * 
 * @name        Zt Shortcodes
 * @version     2.0.0
 * @package     Plugin
 * @subpackage  System
 * @author      ZooTemplate 
 * @email       support@zootemplate.com 
 * @link        http://www.zootemplate.com 
 * @copyright   Copyright (c) 2015 ZooTemplate
 * @license     GPL v2 
 */
defined('_JEXEC') or die('Restricted access');

$image = $attributes->get('image');
$ptype = $attributes->get('ptype');
$video1 = $attributes->get('video1');
$video2 = $attributes->get('video2');
$video3 = $attributes->get('video3');
$bgtype = $attributes->get('type');
$overlay = $attributes->get('overlay');
$bgoverlay = $attributes->get('bgoverlay');
$opacity = $attributes->get('opacity');
$padding = $attributes->get('padding');
$fullwidth = $attributes->get('fullwidth');
$class = $attributes->get('class');

$paddingNumber = explode(" ", $padding);

$classAll = '';
if ($bgtype == 'cover')
{
    $classAll .= 'zt-parallax-cover';
} else
{
    $classAll .= ' zt-parallax-repeat';
}
if ($fullwidth == 'yes')
{
    $classAll .= ' zt-parallax-full';
} else
{
    $classAll .= ' zt-parallax-no-full';
}
if ($class)
{
    $classAll .= $class;
}
?>

<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('.zt-parallax-asset-inner').videobackground({
            videoSource: [['http://video.zoodemo.com/sportlive/sportlive_1280.mp4', 'video/mp4'],
                ['video/big-buck-bunny.webm', 'video/webm'],
                ['video/big-buck-bunny.ogv', 'video/ogg']],
            controlPosition: '.zt-parallax-asset-inner',
            poster: 'video/big-buck-bunny.jpg',
            loop: true
        });
    });
</script>

    <?php if ($ptype == "image")
    { ?>
    <div style="background-image: url(<?php echo $image; ?>); padding-top: <?php echo $paddingNumber[0]; ?>; padding-bottom: <?php echo $paddingNumber[1]; ?>"
         class="zt-parallax-asset zt-parallax <?php echo $classAll; ?>">
    <?php if ($overlay)
    { ?>
            <div class="overlay" style="background-color: <?php echo $bgoverlay; ?>/*; opacity: */<?php echo $opacity; ?>"></div>
    <?php } ?>
        <div class="zt-content-parallax">
            <?php echo $content; ?>
        </div>
    </div>
<?php } else
{ ?>
    <div class="zt-parallax-asset-video zt-parallax <?php echo $classAll; ?>">
        <div class="zt-parallax-asset-inner">
    <?php if ($overlay)
    { ?>
                <div class="overlay" style="background-color: <?php echo $bgoverlay; ?>; opacity: <?php echo $opacity; ?>"></div>
    <?php } ?>
        </div>
        <div class="zt-content-parallax">
    <?php echo $content; ?>
        </div>
    </div>
<?php } ?>