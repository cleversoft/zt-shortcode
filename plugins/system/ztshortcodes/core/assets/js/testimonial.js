/**
 * Zo2 Shortcode
 * @param {pointer} w Window pointer
 * @param {pointer} $ jQuery pointer
 * @returns {undefined}
 */

jQuery(document).ready(function(){
  jQuery('.owl-carousel').each(function(e){
    var id = jQuery(this).attr('id');
    var items = jQuery(this).attr('data-items');
    var auto = jQuery(this).attr('data-auto') == 'yes' ? true : false;
    var paging = jQuery(this).attr('data-paging') == 'yes' ? true : false;
    var controls = jQuery(this).attr('data-controls') == 'yes' ? true : false;
    jQuery('#'+id).owlCarousel({
      dots: paging,
      nav: controls,
      autoplay: auto,
      items: items
    });
  })
});