/**
 * Zo2 Shortcode
 * @param {pointer} w Window pointer
 * @param {pointer} $ jQuery pointer
 * @returns {undefined}
 */

jQuery(document).ready(function() {
    var accordion = jQuery('.accordion-accordion').find('.accordion-section-title'),
        toggle = jQuery('.accordion-toggle').find('.accordion-section-title');


    function close_accordion_section() {
        jQuery('.accordion-accordion .accordion-section-title').removeClass('active');
        jQuery('.accordion-accordion .accordion-section-content').slideUp(300).removeClass('open');
        jQuery('.accordion-accordion .accordion-section-title .fa').removeClass('fa-minus').addClass('fa-plus');
    }

    // Accordion
    jQuery(accordion).click(function(e) {
        var currentAttrValue = jQuery(this).attr('href');

        if(jQuery(e.target).is('.active')) {
            close_accordion_section();
        } else {
            if (!jQuery(e.target).is('i.fa-minus')) {
                close_accordion_section();
                // Add active class to section title
                jQuery(this).addClass('active');
                // Open up the hidden content panel
                jQuery('.accordion-accordion ' + currentAttrValue).slideDown(300).addClass('open');
                jQuery(this).find('.fa').removeClass('fa-plus').addClass('fa-minus');
            } else {
                close_accordion_section();
            }
        }
        e.preventDefault();
    });

    //Toggle
    jQuery(toggle).click(function(e) {
        var content = jQuery(this).parent().find('.accordion-section-content');
        if(jQuery(content).is(":visible")){
            jQuery(content).slideUp(300);
            jQuery(content).prev().removeClass('active');
            jQuery(this).find('.fa').removeClass('fa-minus').addClass('fa-plus');
        } else {
            jQuery(content).slideDown(300);
            jQuery(content).prev().addClass('active');
            jQuery(this).find('.fa').removeClass('fa-plus').addClass('fa-minus');
        }
        e.preventDefault();
    });
});