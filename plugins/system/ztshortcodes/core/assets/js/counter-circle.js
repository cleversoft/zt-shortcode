/**
 * Zo2 Shortcode
 * @param {pointer} w Window pointer
 * @param {pointer} $ jQuery pointer
 * @returns {undefined}
 */

jQuery(window).load(function (){
        var c = jQuery('body').find('.chart');
        jQuery(c).each(function(){
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
                animate: {duration: chartduration, enabled: true}
            });
        });
});

