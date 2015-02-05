/**
 * Created by chinhbeo on 2/3/15.
 */


jQuery(window).load(function (){
    jQuery('.zo2-counter-wrap').waypoint(function(){
        jQuery('.chart').each(function(){
            var chartEasing         = jQuery(this).data('easing'),
                chartbarColor       = jQuery(this).data('barcolor'),
                charttrackColor     = jQuery(this).data('trackcolor'),
                chartscaleLength    = jQuery(this).data('scalelength'),
                chartpercent        = jQuery(this).data('percent'),
                chartlineCap        = jQuery(this).data('linecap'),
                chartlineWidth      = jQuery(this).data('linewidth'),
                chartsize           = jQuery(this).data('size'),
                chartduration       = jQuery(this).data('duration')


            jQuery(this).easyPieChart({
                easing: chartEasing,
                barColor: chartbarColor,
                trackColor: charttrackColor,
                scaleLength: chartscaleLength,
                percent: chartpercent,
                lineCap: chartlineCap,
                lineWidth: chartlineWidth,
                size: chartsize,
                animate: {duration: chartduration, enabled: true},
                onStep: function (from, to, percent) {
                    $(this.el).find('.percent').text(Math.round(percent));
                }
            });
        });
    }, {triggerOnce: !0, offset: "bottom-in-view"});
});

