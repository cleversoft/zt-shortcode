/**
 * Created by chinhbeo on 1/30/15.
 */



jQuery(document).ready(function () {
    // Animate Top Links
    jQuery('.animate-top').on('click', function (e) {
        e.preventDefault();
        jQuery('body,html').animate({scrollTop: 0}, 800, 'easeOutCubic');
    });
});