/**
 * Created by chinhbeo on 2/4/15.
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