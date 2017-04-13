/**
 * Zo2 Shortcode
 * @param {pointer} $ jQuery pointer
 * @returns {undefined}
 */

jQuery(document).ready(function(){
  jQuery('.zt-persons').each(function(){
    var id = jQuery(this).attr('id');
    var i = jQuery(this).attr('data-show');
    var a = jQuery(this).attr('data-auto') == 'yes' ? true : false;
    var c = jQuery(this).attr('data-controls') == 'yes' ? true : false;
    var p = jQuery(this).attr('data-pager') == 'yes' ? true : false;
    if(jQuery(this).hasClass('owl-carousel')) {
      jQuery(this).find('.zt-person').attr('class', 'zt-person');
      jQuery('#'+id).owlCarousel({
        autoplay: a,
        nav: c,
        dots: p,
        responsive : {
          0:{
            items: 1
          },
          480:{
            items: i
          }
        }
      });
    }
  });
});