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
            /* Joomla article editor */
            joomlaEditor: "jform_articletext",
            /* Shortcode tabs */
            tabGroup: "#zt-shortcode-groups",
            tabList: "#zt-shortcode-tabs-wrapper > #myTab",
            tabContent: "#zt-shortcode-tabs-wrapper > #myTabContent",
            /* Common controls */
            comControls: "#zt-shortcode-common-controls",
            /* Shortcode preview */
            comPreview: "#zt-shortcode-preview",
            shortcodeContent: "#zt-sc-value",
            shortcodeRender: "#zt-sc-render",
            shortcodePreview: "#zt-sc-preview-content",
            shortcodeContainer: "#zt-sc-container",
            /* Add new tab */
            cloneChildElement: "#zt-sc-clone-element",
            /* Icon selector */
            inputIcon: "#zt-sc-icon",
            /* Control button */
            comButtons: "#zt-shortcode-controls",
            buttonInsert: "#zt-sc-insert",
            buttonPreview: "#zt-sc-preview",
            buttonClose: "#zt-sc-close",
            /* Shortcode breadcrumb */
            breadcrumdContainer: "#zt-shortcode-breadcrumd",
            breadcrumdHome: "#zt-sc-all-shortcode",
            breadcrumdCurrent: "#zt-sc-current-tab",
            /* Divider */
            dividerType: "#zt-sc-divider-type",
            dividerFieldText: "#zt-sc-divider-field-text",
            dividerFieldIcon: "#zt-sc-divider-field-icon",
            /* Counter circle */
            counterType: "#zt-sc-counter-contentType",
            counterFieldContent: "#zt-sc-counter-field-content",
            counterFieldIcon: "#zt-sc-counter-field-icon",
            counterContent: "#zt-sc-counter-content",
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
                $(_self._elements.comPreview)
                        .find(_self._elements.shortcodePreview)
                        .toggle('slow', function () {
                            /* Scroll to end of page */
                            $("html, body").animate({scrollTop: $(w.document).height()});
                        });
            });
            /* Hide tab & group after choice */
            $(_self._elements.tabList).on('click', 'li', function () {
                var currentTab = $(this).find('a').text();
                $(_self._elements.breadcrumdCurrent)
                        .html(' &rarr; ' + currentTab);
                $(_self._elements.tabList).hide('slow');
                $(_self._elements.tabGroup).hide('slow');
                $(_self._elements.breadcrumdContainer).show('slow');
                w.setTimeout(function () {
                    var $parentContainer = $(_self._elements.tabContent)
                            .find('.active')
                            .find('[data-root="true"]');
                    var $checkboxs = $parentContainer.find('div.container-child .sc-checkbox');
                    if ($checkboxs.find(':checked').length <= 0) {
                        $checkboxs.first().prop('checked', true);
                    }
                    /* Update default value */
                    _self._update($parentContainer);
                }, 500);
            });
            /* Bread crumd home */
            $(_self._elements.breadcrumdContainer).on('click', _self._elements.breadcrumdHome, function () {
                $(_self._elements.tabList).show('slow');
                $(_self._elements.tabGroup).show('slow');
                $(_self._elements.buttonPreview).text('Preview Shortcode');
                $(_self._elements.comPreview)
                        .find(_self._elements.shortcodePreview)
                        .hide('slow', function () {
                            $("html, body").animate({scrollTop: 0});
                        });
                _self.value('');
                _self.preview('');
                $(_self._elements.breadcrumdContainer).hide('slow');
                $(_self._elements.breadcrumdCurrent)
                        .html('');
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
            this._hook();
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
        },
        /**
         * Event hook
         * @returns {undefined}
         */
        _hook: function () {
            var _self = this;
            var $container = $('div' + this._elements.shortcodeContainer);
            $container.on('keyup', '.sc-textbox', function () {
                var $parent = $(this).closest(_self._elements.shortcodeContainer);
                _self._update($parent);
            });
            $container.on('change', '.sc-selectbox', function () {
                var $parent = $(this).closest(_self._elements.shortcodeContainer);
                _self._update($parent);
            });
            $container.on('click', '.sc-checkbox', function () {
                var $parent = $(this).closest(_self._elements.shortcodeContainer);
                if ($parent.hasClass('container-child')) {
                    var $root = $parent.closest('[data-root*="true"]');
                    $root.find('.sc-checkbox').prop('checked', false);
                    $(this).prop('checked', true);
                }
                _self._update($parent);
            });
            $('div' + _self._elements.inputIcon).find('a').on('click', function () {
                var $parent = $(this).closest('div' + _self._elements.inputIcon);
                $parent.find('a').removeClass('selected');
                $(this).addClass('selected');
                var selected = $parent.find('.selected');
                $parent.find('input').val((selected.length <= 0) ? '' : selected.find('i').attr('class')).trigger('change');
                return false;
            });
            /* Elements clone */
            $('button' + _self._elements.cloneChildElement).on('click', function () {
                var $main = $(this).closest('.form-group').parent();
                var $children = $main.find('div.container-child');
                $children.first()
                        .clone()
                        .appendTo($main.find('>div:first'));
                var $element = $main.find('div.container-child').last();
                $element.find('input').each(function () {
                    var value = $(this).data('default');
                    if (typeof (value) === 'undefined') {
                        value = '';
                    }
                    $(this).val(value);
                });
                $element.find('.sc-checkbox').prop('checked', false);
                _self._update($children.first());
            });
            $('select#zt-sc-column-number').on('change', function () {
                var $main = $(this).closest('.form-group').parent();
                var value = $(this).val();
                var bootstrapClass = 12 / value;
                var counter = 0;
                var $root = $main.find('[data-root*="true"]');
                var element = '';
                element += '<div id="zt-sc-container" data-tag="zt_column" class="container-child ">';
                element += '<div class="form-group clearfix">';
                element += '<input type="hidden" class="sc-selectbox" data-property="md" value="' + bootstrapClass + '">';
                element += '<textarea placeholder="Content Column" rows="3" data-property="" class="form-control sc-textbox">Content Column</textarea>';
                element += '</div>';
                element += '</div>';
                $root.html('');
                while (counter < value) {
                    $(element)
                            .addClass('col-sm-' + bootstrapClass)
                            .addClass('col-md-' + bootstrapClass)
                            .appendTo($root);
                    counter++;
                }
                _self._update($main.find('[data-root="true"]'));
            }).trigger('change');
            _self.value('');
            /* Divider special type filter */
            $(_self._elements.dividerType).on('change', function () {
                var $parent = $(this).closest(_self._elements.shortcodeContainer);
                $parent.find('input').val('');
                $parent.find('a').removeClass('selected');
                if ($(this).val() === 'text-only') {
                    $(_self._elements.dividerFieldText).show('slow');

                } else {
                    $(_self._elements.dividerFieldText).hide('slow');
                }
                if ($(this).val() === 'icon-type-1' || $(this).val() === 'icon-type-2') {
                    $(_self._elements.dividerFieldIcon).show('slow');
                } else {
                    $(_self._elements.dividerFieldIcon).hide('slow');
                }
            });
            /*Counter circle*/
            $(_self._elements.counterType).on('change', function () {
                var $parent = $(this).closest(_self._elements.shortcodeContainer);
                if ($(this).val() === '') {
                    $(_self._elements.counterFieldContent).show('slow');
                    $(_self._elements.counterContent).val('');
                } else {
                    $(_self._elements.counterFieldContent).hide('slow');
                }
                if ($(this).val() === 'icon') {
                    $(_self._elements.counterFieldIcon).show('slow');
                    $parent.find('a').removeClass('selected');
                }
                else {
                    $(_self._elements.counterFieldIcon).hide('slow');
                }
            });
        },
        /**
         * Update shortcode data
         * @param {type} $parent
         * @returns {undefined}
         */
        _update: function ($parent) {
            var _self = this;
            var $root = $parent.closest('[data-root*="true"]');
            var $elements = $root.find('div' + this._elements.shortcodeContainer);
            var shortcode = {};
            if ($elements.length > 0) {
                shortcode = _self._getData($root);
                $elements.each(function () {
                    shortcode._Content += _self._getShortcode(_self._getData($(this)));
                });
            } else {
                shortcode = _self._getData($elements);
            }
            _self.value(_self._getShortcode(shortcode));
        },
        /**
         * Get all data field
         * @param {type} $container
         * @returns {object}
         */
        _getData: function ($container) {
            var $inputs = $container.children().filter('.form-group').find('input,select,textarea');
            var shortcodeTag = $container.data('tag');
            var shortcode = {};
            shortcode._Tag = shortcodeTag;
            shortcode._Content = '';
            $inputs.each(function () {
                var inputType = $(this).prop('tagName');
                var property = $(this).data('property');
                var type = $(this).attr('type');
                switch (inputType) {
                    case 'INPUT':
                        switch (type) {
                            case 'checkbox':
                                var value = $(this).is(':checked') ? 'yes' : 'no';
                                break;
                            default:
                                var value = $(this).val();
                                break;
                        }
                        break;
                    default:
                        var value = $(this).val();
                        break;
                }
                if (value !== '' && property !== '') {
                    shortcode[property] = value;
                }
                if (property === '') {
                    shortcode['_Content'] = value;
                }
            });
            return shortcode;
        },
        /**
         * Generate shortcode from data
         * @param {type} data
         * @returns {String}
         */
        _getShortcode: function (data) {
            var shortcode = '';
            shortcode += (data._Tag !== '') ? '[' + data._Tag : '';
            $.each(data, function (key, value) {
                if (key !== '_Tag' && key !== '_Content') {
                    if (value !== '')
                        shortcode += ' ' + key + '="' + value + '"';
                }
            });
            shortcode += (data._Tag !== '') ? ']' : '';
            shortcode += data._Content;
            shortcode += (data._Tag !== '') ? '[/' + data._Tag + ']' : '';
            return shortcode;
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