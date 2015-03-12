/**
 * Zo2 Shortcode
 * @param {pointer} w Window pointer
 * @param {pointer} jQuery jQuery pointer
 * @returns {undefined}
 */


var counter = jQuery('.zt-count-asset').find('.count-number');
jQuery(counter).each(function (){
    var d = jQuery(this).data('speed'),
        f = jQuery(this).data('from'),
        t = jQuery(this).data('to'),
        u = jQuery(this).data('updown')

    if(u == 'up'){
        jQuery(this).counter({
            autoStart: false,
            duration: d,
            countFrom: f,
            countTo: t,
            placeholder: 0,
            easing: "easeOutCubic"
        });
    } else {
        jQuery(this).counter({
            autoStart: false,
            countTo: t,
            duration: 7000,
            easing: "easeOutCubic"
        });
    }
});

jQuery(window).load(function(){
    jQuery('.counter-box-wrap').each(function(){
        jQuery().waypoint && jQuery(this).waypoint(function () {
            counter.counter("start");
        }, {triggerOnce: !0, offset: "bottom-in-view"});
    });
});


