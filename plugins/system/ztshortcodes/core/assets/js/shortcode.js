/**
 * Zo2 Shortcode
 * @param {pointer} w Window pointer
 * @param {pointer} $ jQuery pointer
 * @returns {undefined}
 */
(function (w, $) {

    /* Short code main class */
    var _shortcode = {
        _init: function(){
        }
    };
    /* Check for Zo2 javascript framework */
    if (typeof (w.zo2) === 'undefined') {
        w.zo2 = {};
    }
    /* Append short code to Zo2 */
    w.zo2.shortcode = _shortcode;
    /* Init shortcode */
    $(w.document).ready(function () {
        w.zo2.shortcode._init();
    });
})(window, jQuery);