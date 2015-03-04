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

$src = $attributes->get('link');
// Input video id
if (strpos($src, 'http') === false)
{
    $src = '//www.youtube.com/embed/' . $src;
}
if ($attributes->get('autohide', 2))
{
    $params[] = 'autohide=' . $attributes->get('autohide');
}
if ($attributes->get('autoplay'))
{
    $params[] = 'autoplay=' . $attributes->get('autoplay');
}
if ($attributes->get('cc_load_policy'))
{
    $params[] = 'cc_load_policy =' . $attributes->get('cc_load_policy');
}
if ($attributes->get('color'))
{
    $params[] = 'color=' . $attributes->get('color');
}
if ($attributes->get('controls'))
{
    $params[] = 'controls=' . $attributes->get('controls');
}
if ($attributes->get('disablekb'))
{
    $params[] = 'disablekb=' . $attributes->get('disablekb');
}
if ($attributes->get('enablejsapi'))
{
    $params[] = 'enablejsapi=' . $attributes->get('enablejsapi');
}
if ($attributes->get('enablejsapi'))
{
    $params[] = 'enablejsapi=' . $attributes->get('enablejsapi');
}
if ($attributes->get('enablejsapi'))
{
    $params[] = 'enablejsapi=' . $attributes->get('enablejsapi');
}
if ($attributes->get('enablejsapi'))
{
    $params[] = 'enablejsapi=' . $attributes->get('enablejsapi');
}
if ($attributes->get('enablejsapi'))
{
    $params[] = 'enablejsapi=' . $attributes->get('enablejsapi');
}
if ($attributes->get('enablejsapi'))
{
    $params[] = 'enablejsapi=' . $attributes->get('enablejsapi');
}
if ($attributes->get('enablejsapi'))
{
    $params[] = 'enablejsapi=' . $attributes->get('enablejsapi');
}
if ($attributes->get('enablejsapi'))
{
    $params[] = 'enablejsapi=' . $attributes->get('enablejsapi');
}
if ($attributes->get('enablejsapi'))
{
    $params[] = 'enablejsapi=' . $attributes->get('enablejsapi');
}
if ($attributes->get('end'))
{
    $params[] = 'end=' . $attributes->get('end');
}
if ($attributes->get('fs'))
{
    $params[] = 'fs=' . $attributes->get('fs');
}
if ($attributes->get('hl'))
{
    $params[] = 'hl=' . $attributes->get('hl');
}
if ($attributes->get('iv_load_policy'))
{
    $params[] = 'iv_load_policy=' . $attributes->get('iv_load_policy');
}
if ($attributes->get('list'))
{
    $params[] = 'list=' . $attributes->get('list');
}
if ($attributes->get('listType'))
{
    $params[] = 'listType=' . $attributes->get('listType');
}
if ($attributes->get('loop'))
{
    $params[] = 'loop=' . $attributes->get('loop');
}
if ($attributes->get('modestbranding'))
{
    $params[] = 'modestbranding=' . $attributes->get('modestbranding');
}
if ($attributes->get('origin'))
{
    $params[] = 'origin=' . $attributes->get('origin');
}
if ($attributes->get('playerapiid'))
{
    $params[] = 'playerapiid=' . $attributes->get('playerapiid');
}
if ($attributes->get('playlist'))
{
    $params[] = 'playlist=' . $attributes->get('playlist');
}
if ($attributes->get('playsinline'))
{
    $params[] = 'playsinline=' . $attributes->get('playsinline');
}
if ($attributes->get('rel'))
{
    $params[] = 'rel=' . $attributes->get('rel');
}
if ($attributes->get('showinfo'))
{
    $params[] = 'showinfo=' . $attributes->get('showinfo');
}
if ($attributes->get('start'))
{
    $params[] = 'start=' . $attributes->get('start');
}
if ($attributes->get('theme'))
{
    $params[] = 'theme=' . $attributes->get('theme');
}
if (!empty($params))
{
    $params = implode('&', $params);
}
if (!empty($params))
{
    $link = $src . '?' . $params;
} else
{
    $link = $src;
}
?>
<iframe id="ytplayer" 
        type="text/html" 
        width="<?php echo $attributes->get('width'); ?>" 
        height="<?php echo $attributes->get('height'); ?>"
        src="<?php echo $link; ?>"
        frameborder="0"/>