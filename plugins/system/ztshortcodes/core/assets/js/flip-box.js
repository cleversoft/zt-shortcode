/**
 * Zo2 Shortcode
 * @param {pointer} w Window pointer
 * @param {pointer} $ jQuery pointer
 * @returns {undefined}
 */



jQuery(document).ready(function () {
    jQuery('.zt-flip-box').each(function(){
        var frontHeight = jQuery(this).find('.zt-flip-box-inner').height();
        jQuery(this).find('.zt-flip-box-back').css("min-height", frontHeight);
    });
});