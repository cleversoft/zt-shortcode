/**
 * Zo2 Shortcode
 * @param {pointer} w Window pointer
 * @param {pointer} $ jQuery pointer
 * @returns {undefined}
 */

jQuery(document).ready(function () {

    jQuery('.zt-carousel').each(function(){
        var id          = jQuery(this).attr('id'),
            md          = jQuery(this).data('items-md'),
            sm          = jQuery(this).data('items-sm'),
            xs          = jQuery(this).data('items-xs'),
            dur         = jQuery(this).data('duration');
            if (jQuery(this).data('control') == 'yes')
                var control = true;
            else
                var control = false;    
            if (jQuery(this).data('pager') == 'yes')
                var pager = true;
            else
                var pager = false;
        // Using custom configuration
        jQuery('#'+id).owlCarousel({
            nav: control,
            dots: pager,
            responsive: {
                0: {
                    items: xs
                },
                768: {
                    items: sm
                },
                992: {
                    items: md
                }
            }
        });
    });

});
