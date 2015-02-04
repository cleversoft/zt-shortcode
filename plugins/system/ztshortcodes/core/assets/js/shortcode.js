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
        /* Short code add on */
        _addOn: [],
        /**
         * Elements selector
         */
        _elements: {
            /* Joomla article editor */
            joomlaEditor: "jform_articletext",
            /* Shortcode tabs */
            tabGroup: "#zo2-shortcode-groups",
            tabList: "#zo2-shortcode-tabs-wrapper > #myTab",
            tabContent: "#zo2-shortcode-tabs-wrapper > #myTabContent",
            /* Common controls */
            comControls: "#zo2-shortcode-common-controls",
            /* Shortcode preview */
            comPreview: "#zo2-shortcode-preview",
            shortcodeContent: "#zo2-sc-value",
            shortcodeRender: "#zo2-sc-render",
            /* Control button */
            comButtons: "#zo2-shortcode-controls",
            buttonInsert: "#zo2-sc-insert",
            buttonPreview: "#zo2-sc-preview",
            buttonReset: "#zo2-sc-reset",
            buttonClose: "#zo2-sc-close"
        },
        /**
         * Select function
         * @returns {undefined}
         */
        _init: function () {

            var _self = this;
            /* Insert button */
            $(_self._elements.buttonInsert).on('click', function () {
                var code = $(_self._elements.shortcodeContent).val();
                if (typeof (w.parent) !== 'undefined') {
                    if (w.parent.hasOwnProperty('jInsertEditorText')) {
                        /* Insert to parent editor */
                        w.parent.jInsertEditorText(code, _self._elements.joomlaEditor);
                        /* Close the box */
                        w.parent.SqueezeBox.close();
                    }
                }
            });

            /* Preview button */
            $(_self._elements.buttonPreview).on('click', function () {
                if ($(_self._elements.buttonPreview).text() === 'Preview Shortcode') {
                    $(_self._elements.buttonPreview).text('Hide Shortcode');
                } else {
                    $(_self._elements.buttonPreview).text('Preview Shortcode');
                }
                $(_self._elements.comPreview).toggle('slow', function () {
                    /* Scroll to end of page */
                    $("html, body").animate({scrollTop: $(w.document).height()});
                });
            });

            /* Hide tab & group after choice */
            $(_self._elements.tabList).on('click', 'li', function () {
                $(_self._elements.tabList).hide('slow');
                $(_self._elements.tabGroup).hide('slow');
            });

            /* Reset button */
            $(_self._elements.buttonReset).on('click', function () {
                $(_self._elements.tabList).show('slow');
                $(_self._elements.tabGroup).show('slow');
                $(_self._elements.buttonPreview).text('Preview Shortcode');
                $(_self._elements.comPreview).hide('slow', function () {
                    $("html, body").animate({scrollTop: 0});
                });
                _self.value('');
                _self.preview('');
                $(_self._elements.tabContent).find('.active').removeClass('active in');
                $(_self._elements.tabList).find('.active').removeClass('active');
            });

            /* Close button */
            $(_self._elements.buttonClose).on('click', function () {
                if (typeof (w.parent) !== 'undefined') {
                    if (w.parent.hasOwnProperty('SqueezeBox')) {
                        w.parent.SqueezeBox.close();
                    }
                }
            });

            /* Init shortcode add-on */
            $(this._addOn).each(function (key, item) {
                if (item.hasOwnProperty('_init')) {
                    item._init();
                }
            });
        },
        /**
         * Set shortcode value
         * @param {type} value
         * @returns {undefined}
         */
        value: function (value) {
            $(this._elements.shortcodeContent).val(value);
        },
        /**
         * Preview shortcode HTML
         * @param {type} html
         * @returns {undefined}
         */
        preview: function (html) {
            $(this._elements.shortcodeRender).html(html);
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

/**
 * Label shortcode add-on
 * @param {type} w
 * @param {type} $
 * @file shortcode.label.js
 * @returns {undefined}
 */
(function (w, $) {

    /* Label shortcode class */
    var _label = {
        name: 'Label shortcode add-on',
        /* Selector container */
        _elements: {
            /* Shortcode label */
            labelValue: "#zo2-sc-label-name",
            labelType: "#zo2-sc-label-type"
        },
        /**
         * Init function
         * @returns {undefined}
         */
        _init: function () {
            var _self = this;
            /* Label shortcode */
            $(_self._elements.labelValue + ', ' + _self._elements.labelType).on('change', function () {
                var type = $(_self._elements.labelType).val();
                var value = $(_self._elements.labelValue).val();
                w.zo2.shortcode.value('[zt_label type="' + type + '"]' + value + '[/zt_label]');
                w.zo2.shortcode.preview('<span class="label label-' + type + '">' + value + '</span>');
            });
        }
    };

    /* Append to shortcode add-on */
    w.zo2.shortcode._addOn.push(_label);

})(window, jQuery);