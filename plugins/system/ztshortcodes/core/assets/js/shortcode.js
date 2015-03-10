/**
 * Zo2 Shortcode
 * @param {pointer} w Window pointer
 * @param {pointer} $ jQuery pointer
 * @returns {undefined}
 */
(function (w, $) {

    /* Short code main class */
    var _shortcode = {
        _elements: {
            /* Control button */
            comButtons: "#zt-shortcode-controls",
            buttonInsert: "#zt-sc-insert",
            buttonPreview: "#zt-sc-preview",
            buttonClose: "#zt-sc-close",
            /* Shortcode preview */
            comPreview: "#zt-shortcode-preview",
            shortcodeBbcode: "#zt-sc-bbcode",
            shortcodeRender: "#zt-sc-render"
        },
        _init: function(){
            var _self = this;
            /* Insert button */
            $(_self._elements.comButtons).on('click', _self._elements.buttonInsert, function () {
                var code = $(_self._elements.shortcodeBbcode).val();
                if (typeof (w.parent) !== 'undefined') {
                    if (w.parent.hasOwnProperty('jInsertEditorText')) {
                        /* Insert to parent editor */
                        w.parent.jInsertEditorText(code);
                        /* Close the box */
                        w.parent.SqueezeBox.close();
                    }
                }
            });
            /* Close button */
            $(_self._elements.comButtons).on('click', _self._elements.buttonClose, function () {
                if (typeof (w.parent) !== 'undefined') {
                    if (w.parent.hasOwnProperty('SqueezeBox')) {
                        w.parent.SqueezeBox.close();
                    }
                }
            });
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