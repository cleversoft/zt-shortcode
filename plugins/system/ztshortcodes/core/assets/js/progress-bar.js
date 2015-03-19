/**
 * Zo2 Shortcode
 * @param {pointer} w Window pointer
 * @param {pointer} $ jQuery pointer
 * @returns {undefined}
 */

jQuery(window).load(function (){
    jQuery().waypoint && jQuery(".progress-bar").waypoint(function () {
        jQuery(this).css("visibility", "visible");
        jQuery(".progress-bar").each(function () {
            var e = jQuery(this).find(".progress-bar-content").data("percentage");
            jQuery(this).find(".progress-bar-content").css("width", "0%");
            jQuery(this).find(".progress-bar-content").css("width", e + "%");
        })
    }, {triggerOnce: !0, offset: "bottom-in-view"});
});