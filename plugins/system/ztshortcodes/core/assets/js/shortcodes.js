/**
 * 
 * @link    http://stackoverflow.com/questions/946534/insert-text-into-textarea-with-jquery/946556#946556
 * @param {type} param
 */
jQuery.fn.extend({
    insertAtCaret: function (myValue) {
        return this.each(function (i) {
            if (document.selection) {
                //For browsers like Internet Explorer
                this.focus();
                var sel = document.selection.createRange();
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
/**
 * Crex Shortcodes
 * @param {pointer} w Window pointer
 * @param {pointer} $ jQuery pointer
 * @returns {undefined}
 */
(function (w, $) {

    /* Base class */
    var _shortcodes = {
        _addOn: [],
        /**
         * Elements selector
         */
        _elements: {
            generatorWrapper: "#crexsc-generator",
            generatorForm: "#crexsc-generator .form",
            generatorParentForm: "form.crexsc-form.parent",
            generatorChildForm: "form.crexsc-form.child",
            textareaBBCode: "#crexsc-bbcode",
            preview: "#crexsc-preview",
            groupTitle: ".crexsc-group-title a"
        },
        /**
         * Select function
         * @returns {undefined}
         */
        _init: function () {
            var _self = this;
            // Hide on all forms when change group
            $(this._elements.groupTitle).on('click', function () {
                _self.hideForms();
            });
            $('.hasTooltip').tooltip({
                'html': false
            });
        },
        /**
         * 
         * @returns {undefined}
         */
        hideForms: function () {
            $(this._elements.generatorForm).removeClass('active');
        },
        /**
         * 
         * @param {type} el
         * @returns {undefined}
         */
        showForm: function (el) {
            // Hide all current active form
            this.hideForms();
            // Get href as id
            var href = $(el).attr('href');
            // Active form by this id
            $(this._elements.generatorWrapper + ' ' + href).toggleClass('active');
        },
        /**
         * 
         * @param {type} el
         * @returns {jQuery|Window.$jQuery|window.$jQuery|Window.jQuery|@exp;window@pro;jQuery}
         */
        _getParentForm: function (el) {
            return $(el + ' ' + this._elements.generatorParentForm);
        }, /**
         * 
         * @param {type} el
         * @returns {jQuery|Window.$jQuery|window.$jQuery|Window.jQuery|@exp;window@pro;jQuery}
         */
        _getChildForm: function (el) {
            return $(el + ' ' + this._elements.generatorChildForm);
        },
        /**
         * 
         * @param {type} el
         * @returns {undefined}
         */
        generateCode: function (el) {
            var _self = this;
            var $parentForm = this._getParentForm(el);
            var $childForm = this._getChildForm(el);
           
         
                var tag = $($parentForm).data('crexsc-tag');
                // For parent code we will not do close tag. We'll do it later
                var parentCode = this._generator($parentForm, false);
                var childCode = '';
                var _self = this;
                // Generate child code in all child forms
                $($childForm).each(function (i, form) {
                    childCode = childCode + _self._generator(form, true);
                });
                // Combine everything to final code
                var finalCode = parentCode + childCode + '[/' + tag + ']';
                console.log(finalCode);
                $(this._elements.textareaBBCode).insertAtCaret(finalCode);
                jQuery.ajax({
                    url: window.location.pathname + '?crexshortcodes_task=display&crexshortcodes_view=demo',
                    data: {
                        bbcode: finalCode
                    },
                    dataType: "html"
                }).done(function (data) {
                    $(_self._elements.preview).html(data);
                });
            


        },
        /**
         * 
         * @param {type} formEl
         * @param {type} close
         * @returns {String}
         */
        _generator: function (formEl, close) {
            // Serialize all form inputs data
            var data = $(formEl).serializeArray();
            // Get form tag
            var tag = $(formEl).data('crexsc-tag');
            // Build open tag
            var openTag = '[' + tag;
            // Prepare for attributes
            var attributes = new Array();
            // Prepare for main content
            var mainContent = '';
            // Generating
            $(data).each(function (i, field) {
                // For maincontent field will use for mainContent
                if (field.name == "maincontent") {
                    mainContent = field.value;
                } else {
                    // If value is not empty than push to attributes array
                    if (field.value != '') {
                        attributes.push(field.name + '="' + field.value + '"');
                    }
                }

            });
            // Prepare close tag
            var closeTag = '[/' + tag + ']';
            // If we asked not to close than empty closeTag
            if (close == false) {
                closeTag = '';
            }
            // Convert attributes array to string
            attributes = attributes.join(' ');
            attributes = attributes.trim();
            // Prepare final generated bbcode
            var finalBBcode = '';
            // If we have tag attributes than merge into final bbcode           
            if (attributes != '') {
                finalBBcode = openTag + ' ' + attributes + ']' + mainContent + closeTag;
            } else {
                // If not than use short tag
                finalBBcode = openTag + ']' + mainContent + closeTag;
            }
            return finalBBcode;
        },
        /**
         * 
         * @param {type} el
         * @returns {undefined}
         */
        cloneChildForm: function (el) {
            var $childForm = this._getChildForm(el);
            // Insert after last child
            $($childForm[0]).clone().insertAfter(el + ' form.child');
        },
        /**
         * 
         * @returns {undefined}
         */
        insertToEditor: function () {
            var bbcode = $(this._elements.textareaBBCode).val();
            window.parent.jInsertBBCode(bbcode);
        }
    };
    /* Check for Crex javascript framework */
    if (typeof (w.crex) === 'undefined') {
        w.crex = {};
    }

    /* Append short code to Crex */
    w.crex.shortcodes = _shortcodes;

    /* Init shortcode */
    $(w.document).ready(function () {
        w.crex.shortcodes._init();
    });

})(window, jQuery);