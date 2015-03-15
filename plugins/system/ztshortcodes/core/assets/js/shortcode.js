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
            shortcodeWrapper: "#zt-sc-generator",
            shortcodeZtSub: "div.zt-sub",
            shortcodeZtMain: "div.zt-main",
            shortcodeFormChild: "form.child",
            shortcodeFormParent: "form.parent",
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
        /* Activate form */
        activateForm: null,
        _init: function () {
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
            _self.showDefaultForm();
            _self._hook();
            _self._iconSelector();
            _self._colorPicker();
        },
        /**
         * Shortcode event listener bind
         * @returns {undefined}
         */
        _hook: function () {
            var _self = this;
            var fields = _self.activateForm.find('[data-event]');
            fields.each(function () {
                var event = $(this).data('event');
                if (event !== '') {
                    $(this).unbind(event);
                    $(this).on(event, function () {
                        _self._update();
                    });
                }
            });
        },
        /**
         * Icon selector
         * @returns {undefined}
         */
        _iconSelector: function () {
            var $iconFields = $('div.list-awesome-font');
            $iconFields.on('click', 'a', function () {
                var $currentIconField = $(this).closest('div.list-awesome-font');
                $currentIconField.find('a.selected').removeClass('selected');
                $(this).addClass('selected');
                var icon = $(this).find('i').attr('class');
                var $hiddenField = $currentIconField.next();
                if (icon !== '') {
                    $hiddenField.val(icon);
                    $hiddenField.trigger($hiddenField.data('event'));
                }
                return false;
            });
        },
        _colorPicker: function () {
            var _self = this;
            console.log($('[type="colorpicker"]'));
            $('[type="colorpicker"]').spectrum({
                allowEmpty: true,
                color: this.value,
                showInput: true,
                containerClassName: "full-spectrum",
                showInitial: true,
                showPalette: true,
                showSelectionPalette: true,
                showAlpha: true,
                maxPaletteSize: 10,
                preferredFormat: "hex",
                localStorageKey: "spectrum.demo",
                change: function (color) {
                    color.toHexString();
                    _self._update();
                    console.log(this);
                },
                palette: [
                    ["rgb(0, 0, 0)", "rgb(67, 67, 67)", "rgb(102, 102, 102)", /*"rgb(153, 153, 153)","rgb(183, 183, 183)",*/
                        "rgb(204, 204, 204)", "rgb(217, 217, 217)", /*"rgb(239, 239, 239)", "rgb(243, 243, 243)",*/ "rgb(255, 255, 255)"],
                    ["rgb(152, 0, 0)", "rgb(255, 0, 0)", "rgb(255, 153, 0)", "rgb(255, 255, 0)", "rgb(0, 255, 0)",
                        "rgb(0, 255, 255)", "rgb(74, 134, 232)", "rgb(0, 0, 255)", "rgb(153, 0, 255)", "rgb(255, 0, 255)"],
                    ["rgb(230, 184, 175)", "rgb(244, 204, 204)", "rgb(252, 229, 205)", "rgb(255, 242, 204)", "rgb(217, 234, 211)",
                        "rgb(208, 224, 227)", "rgb(201, 218, 248)", "rgb(207, 226, 243)", "rgb(217, 210, 233)", "rgb(234, 209, 220)",
                        "rgb(221, 126, 107)", "rgb(234, 153, 153)", "rgb(249, 203, 156)", "rgb(255, 229, 153)", "rgb(182, 215, 168)",
                        "rgb(162, 196, 201)", "rgb(164, 194, 244)", "rgb(159, 197, 232)", "rgb(180, 167, 214)", "rgb(213, 166, 189)",
                        "rgb(204, 65, 37)", "rgb(224, 102, 102)", "rgb(246, 178, 107)", "rgb(255, 217, 102)", "rgb(147, 196, 125)",
                        "rgb(118, 165, 175)", "rgb(109, 158, 235)", "rgb(111, 168, 220)", "rgb(142, 124, 195)", "rgb(194, 123, 160)",
                        "rgb(166, 28, 0)", "rgb(204, 0, 0)", "rgb(230, 145, 56)", "rgb(241, 194, 50)", "rgb(106, 168, 79)",
                        "rgb(69, 129, 142)", "rgb(60, 120, 216)", "rgb(61, 133, 198)", "rgb(103, 78, 167)", "rgb(166, 77, 121)",
                        /*"rgb(133, 32, 12)", "rgb(153, 0, 0)", "rgb(180, 95, 6)", "rgb(191, 144, 0)", "rgb(56, 118, 29)",
                         "rgb(19, 79, 92)", "rgb(17, 85, 204)", "rgb(11, 83, 148)", "rgb(53, 28, 117)", "rgb(116, 27, 71)",*/
                        "rgb(91, 15, 0)", "rgb(102, 0, 0)", "rgb(120, 63, 4)", "rgb(127, 96, 0)", "rgb(39, 78, 19)",
                        "rgb(12, 52, 61)", "rgb(28, 69, 135)", "rgb(7, 55, 99)", "rgb(32, 18, 77)", "rgb(76, 17, 48)"]
                ]
            });
        },
        /**
         * Update shortcode
         * @returns {undefined}
         */
        _update: function () {
            var _self = this;
            var childrenForm = _self.activateForm.find(_self._elements.shortcodeFormChild);
            var parentForm = _self.activateForm.find(_self._elements.shortcodeFormParent);
            var childShortcode = '';
            var parentShortcode = '';
            /* Generate child shortcode */
            childrenForm.each(function () {
                var content = '';
                var tag = $(this).data('tag');
                childShortcode += '[' + tag;
                $(this).find('[data-event]').each(function () {
                    var property = $(this).data('property');
                    var value = $(this).val();
                    if ($(this).attr('type') === 'checkbox') {
                        value = $(this).is(':checked') ? 'yes' : 'no';
                    }
                    if (property === '' || property === 'maincontent') {
                        content = value;
                    }
                    else {
                        if (value !== '') {
                            childShortcode += ' ' + property + '="' + value + '"';
                        }
                    }
                });
                childShortcode += ']' + content + '[/' + tag + ']';
            });
            /* Generate parent shortcode */
            parentForm.each(function () {
                var tag = $(this).data('tag');
                var content = '';
                parentShortcode += '[' + tag;
                $(this).find('[data-event]').each(function () {
                    var property = $(this).data('property');
                    var value = $(this).val();
                    if ($(this).attr('type') === 'checkbox') {
                        value = $(this).is(':checked') ? 'yes' : 'no';
                    }
                    if (property === '' || property === 'maincontent') {
                        content = value;
                    }
                    else {
                        if (value !== '') {
                            parentShortcode += ' ' + property + '="' + value + '"';
                        }
                    }
                });
                if (childrenForm.length <= 0) {
                    parentShortcode += ']' + content + '[/' + tag + ']';
                } else {
                    parentShortcode += ']' + childShortcode + '[/' + tag + ']';
                }

            });
            /* Update shortcode preview */
            $(_self._elements.shortcodeBbcode).val(parentShortcode);
        },
        /**
         * Clone child form
         * @returns {undefined}
         */
        cloneChildForm: function () {
            var _self = this;
            var children = _self.activateForm.find(_self._elements.shortcodeFormChild);
            children.first().clone().appendTo(_self.activateForm.find(_self._elements.shortcodeZtSub));
            _self._hook();
            _self._update();
        },
        /**
         * Show default form
         * @returns {undefined}
         */
        showDefaultForm: function () {
            var _self = this;
            var formContainer = $(_self._elements.shortcodeWrapper).find('div[class^="form "]');
            formContainer.hide();
            _self.activateForm = formContainer.first();
            _self.activateForm.show();
            _self._update();
        },
        /**
         * Show a form
         * @param {type} thisPtr
         * @returns {undefined}
         */
        showForm: function (thisPtr) {
            var _self = this;
            if (_self.activateForm !== null)
                _self.activateForm.hide();
            _self.activateForm = $(_self._elements.shortcodeWrapper).find('div' + $(thisPtr).attr('href'));
            _self.activateForm.show('slow');
            _self._hook();
            _self._update();
            return false;
        }
    };
    /* Check for Zo2 javascript framework */
    if (typeof (w.zt) === 'undefined') {
        w.zt = {};
    }
    /* Append short code to Zo2 */
    w.zt.shortcode = _shortcode;
    /* Init shortcode */
    $(w.document).ready(function () {
        w.zt.shortcode._init();
    });
})(window, jQuery);