/**
 * Zo2 Shortcode
 * @param {pointer} w Window pointer
 * @param {pointer} jQuery jQuery pointer
 * @returns {undefined}
 */



jQuery(document).ready(function(){
    var counter = jQuery('.zt-count-asset').find('.count-number');
    jQuery(counter).each(function(){
        var d = jQuery(this).data('speed'),
            f = jQuery(this).data('from'),
            t = jQuery(this).data('to'),
            u = jQuery(this).data('updown')


        jQuery(this).waypoint(function () {
            if(u == 'up'){
                jQuery(this).counter({
                    autoStart: true,
                    duration: d,
                    countFrom: f,
                    countTo: t,
                    placeholder: 0,
                    easing: "easeOutCubic"
                });
            } else {
                jQuery(this).counter({
                    autoStart: true,
                    countTo: t,
                    duration: 7000,
                    easing: "easeOutCubic"
                });
            }
        }, {triggerOnce: !0, offset: "bottom-in-view"});
    });
});


