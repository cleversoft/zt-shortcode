/**
 * Zo2 Shortcode
 * @param {pointer} w Window pointer
 * @param {pointer} $ jQuery pointer
 * @returns {undefined}
 */

jQuery(document).ready(function(){
    jQuery('.zt-persons.bxslider').each(function(){
       var c = jQuery(this).find('.zt-person').length,
           i = jQuery(this).data('show'),
           w = jQuery(this).parent().width(),
           ws = '';

        if(i < c){
            ws = w / i;
        } else {
            ws = w / c;
        }
       jQuery(this).bxSlider({
           pager: jQuery(this).data('pager'),
           controls: jQuery(this).data('controls'),
           auto: jQuery(this).data('auto'),
           minSlides: 1,
           maxSlides: i,
           slideWidth: ws - jQuery(this).data('margin'),
           slideMargin: jQuery(this).data('margin'),
           nextText: '<i class="fa fa-chevron-right"></i>',
           prevText: '<i class="fa fa-chevron-left"></i>'
       });
    });
});