jQuery(document).ready(function() {
    var accordion = jQuery('.accordion-accordion').find('.accordion-section-title'),
        toggle = jQuery('.accordion-toggle').find('.accordion-section-title');


    function close_accordion_section() {
        jQuery('.accordion-accordion .accordion-section-title').removeClass('active');
        jQuery('.accordion-accordion .accordion-section-content').slideUp(300).removeClass('open');
    }

    // Accordion
    jQuery(accordion).click(function(e) {
        var currentAttrValue = jQuery(this).attr('href');
        close_accordion_section();
        jQuery(this).addClass('active');
        jQuery('.accordion ' + currentAttrValue).slideDown(300).addClass('open');
        e.preventDefault();
    });

    //Toggle
    jQuery(toggle).click(function(e) {
        var content = jQuery(this).parent().find('.accordion-section-content');
        if(jQuery(content).is(":visible")){
            jQuery(content).slideUp(300);
            jQuery(content).prev().removeClass('active');
        } else {
            jQuery(content).slideDown(300);
            jQuery(content).prev().addClass('active');
        }
        e.preventDefault();
    });
});