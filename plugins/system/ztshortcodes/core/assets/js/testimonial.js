/**
 * Zo2 Shortcode
 * @param {pointer} w Window pointer
 * @param {pointer} $ jQuery pointer
 * @returns {undefined}
 */

jQuery(document).ready(function(){
    jQuery('.bxslider').bxSlider({
        pager: true,
        controls: true,
        auto: true,
        minSlides: 2,
        maxSlides: 3,
        moveSlides : 1
    });
});