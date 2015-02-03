/**
 * Zo2 Shortcode
 * @param {pointer} w Window pointer
 * @param {pointer} $ jQuery pointer
 * @returns {undefined}
 */
(function (w, $) {

    /* Small extension for jQuery */
    $.fn.extend({
        insertAtCaret: function (myValue) {
            return this.each(function (i) {
                if (w.document.selection) {
                    //For browsers like Internet Explorer
                    this.focus();
                    var sel = w.document.selection.createRange();
                    sel.text = myValue;
                    this.focus();
                }
                else if (this.selectionStart || this.selectionStart == '0') {
                    //For browsers like Firefox and Webkit based
                    var startPos = this.selectionStart;
                    var endPos = this.selectionEnd;
                    var scrollTop = this.scrollTop;
                    this.value = this.value.substring(0, startPos) + myValue + this.value.substring(endPos, this.value.length);
                    this.focus();
                    this.selectionStart = startPos + myValue.length;
                    this.selectionEnd = startPos + myValue.length;
                    this.scrollTop = scrollTop;
                } else {
                    this.value += myValue;
                    this.focus();
                }
            });
        }
    });

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
            joomlaEditor: "jform_articletext",
            /* Shortcode label */
            labelValue: "#zo2-sc-label-name",
            labelType: "#zo2-sc-label-type"
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
        },
        /**
         * Event hook for label shortcode generation
         * @returns {undefined}
         */
        _labelHook: function () {
            
        },
        _labelShortCode: function (value, type) {
            return '[label type="' + type + '"]' + value + '[/label]';
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