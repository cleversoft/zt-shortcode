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
            joomlaEditor: "jform_content",
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
                        if($('#jform_articletext') > 0) {
                            _self._elements.joomlaEditor = 'jform_articletext';
                        } else {
                            _self._elements.joomlaEditor = 'jform_content';
                        }
                        w.parent.jInsertEditorText(code, _self._elements.joomlaEditor);
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
            _self._datePicker();
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
            $iconFields.unbind('click');
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
            $('.bootstrapColorPicker').colorpicker().on('changeColor.colorpicker', function(e){
                $(this).css('background-color', e.color.toHex());
                _self._update();
            });
        },
        _datePicker: function () {
            var _self = this;
            $('.datepicker').datepicker().on('change', function(e) {
                _self._update();
            });;
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
            _self._iconSelector();
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
        },
        /**
         * show API warming when not exist
         *
         */
        showApiWaring:function(thisEle) {
            var squeezeBox = w.parent.SqueezeBox;
            squeezeBox.open('index.php?ztshortcodes_task=display&ztshortcodes_view=apiwarming', {handler: 'iframe',size: {x: 300, y: 200}});
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