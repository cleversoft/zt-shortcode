/**
 * Zo2 Shortcode
 * @param {pointer} w Window pointer
 * @param {pointer} $ jQuery pointer
 * @returns {undefined}
 */
(function (w, $) {

    /* Short code main class */
    var _shortcode = {
        /**
         * Elements selector
         */
        _elements: {
            /* Insert shortcode button */
            buttonInsertCode: ".button-insert-shortcode",
            /* Shortcode text editable value */
            textAreaCode: "#zo2-shortcode-value",
            /* Joomla article editor */
            joomlaEditor: "jform_articletext"
        },
        /**
         * Select function
         * @returns {undefined}
         */
        _init: function () {
            var _self = this;
            $(_self._elements.buttonInsertCode).on('click', function () {
                var code = $(_self._elements.textAreaCode).val();
                if (typeof (w.parent) !== 'undefined') {
                    if (w.parent.hasOwnProperty('jInsertEditorText')) {
                        /* Insert to parent editor */
                        w.parent.jInsertEditorText(code, _self._elements.joomlaEditor);
                        /* Close the box */
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