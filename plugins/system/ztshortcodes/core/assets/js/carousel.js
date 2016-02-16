/**
 * Zo2 Shortcode
 * @param {pointer} w Window pointer
 * @param {pointer} $ jQuery pointer
 * @returns {undefined}
 */

jQuery(window).load(function () {

    jQuery('.carousel-wrap').each(function(){
        var itemCarousel = jQuery(this).find('.carousel-slider'),
            i = jQuery(itemCarousel).data('items'),
            d = jQuery(itemCarousel).data('duration'),
            r = jQuery(itemCarousel).data('responsinve');
        // Using custom configuration
        jQuery(itemCarousel).carouFredSel({
            prev: ".prev-btn",
            next: ".next-btn",
            pagination: ".zo2-carousel-pager",
            width: "100%",
            items: i,
            responsive: r,
            scroll: {
                duration: d,
                pauseOnHover: true
            },
            wrapper: {
                element: "div",
                classname: "carousel-wrap"
            }
        });
    });

});
