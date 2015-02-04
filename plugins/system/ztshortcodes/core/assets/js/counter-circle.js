/**
 * Created by chinhbeo on 2/3/15.
 */


jQuery(document).ready(function(){
    jQuery('.chart').each(function(){
        var chartEasing         = jQuery(this).attr('data-easing'),
            chartbarColor       = jQuery(this).attr('data-barcolor'),
            charttrackColor     = jQuery(this).attr('data-trackcolor'),
            chartscaleLength    = jQuery(this).attr('data-scalelength'),
            chartpercent        = jQuery(this).attr('data-percent'),
            chartlineCap        = jQuery(this).attr('data-linecap'),
            chartlineWidth      = jQuery(this).attr('data-linewidth'),
            chartsize           = jQuery(this).attr('data-size'),
            chartduration       = jQuery(this).attr('data-duration')


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
});

