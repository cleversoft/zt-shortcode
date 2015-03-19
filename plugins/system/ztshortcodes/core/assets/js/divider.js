/**
 * Zo2 Shortcode
 * @param {pointer} w Window pointer
 * @param {pointer} $ jQuery pointer
 * @returns {undefined}
 */



jQuery(document).ready(function () {
    // Animate Top Links
    jQuery('.animate-top').on('click', function (e) {
        e.preventDefault();
        jQuery('body,html').animate({scrollTop: 0}, 800, 'easeOutCubic');
    });
});