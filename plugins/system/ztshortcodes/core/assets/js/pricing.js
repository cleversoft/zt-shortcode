/**
 * Zo2 Shortcode
 * @param {pointer} w Window pointer
 * @param {pointer} $ jQuery pointer
 * @returns {undefined}
 */

jQuery(document).ready(function(){
    jQuery('.pricing-tables').each(function(){
        var c = jQuery(this).find('.pricing-item').length;
        jQuery(this).addClass('pricing-' + c);
    });
});
