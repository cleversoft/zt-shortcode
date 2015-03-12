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
            _self.showDefaultForm();
            _self._hook();
        },
        /**
         * Shortcode event listener bind
         * @returns {undefined}
         */
        _hook: function(){
            var _self = this;
            var fields = _self.activateForm.find('[data-event]');
            fields.each(function(){
                var event = $(this).data('event');
                if( event !== ''){
                    $(this).unbind(event);
                    $(this).on(event, function(){
                        _self._update();
                    });
                }                   
            });
        },
        /**
         * Update shortcode
         * @returns {undefined}
         */
        _update: function(){
            var _self = this;
            var childrenForm = _self.activateForm.find(_self._elements.shortcodeFormChild);
            var parentForm = _self.activateForm.find(_self._elements.shortcodeFormParent);
            var childShortcode = '';
            var parentShortcode = '';
            /* Generate child shortcode */
            childrenForm.each(function(){
               var content = '';
               childShortcode += '[' + $(this).data('tag');
               $(this).find('[data-event]').each(function(){
                   if($(this).data('property') !== ''){
                       if($(this).val() !== ''){
                           childShortcode += ' ' + $(this).data('property') + '="' + $(this).val() + '"';
                       }
                   }else{
                       content = $(this).val();
                   }
               });
               childShortcode += ']' + content + '[/' + $(this).data('tag') + ']';
            });
            /* Generate parent shortcode */
            parentForm.each(function(){
               parentShortcode += '[' + $(this).data('tag');
               $(this).find('[data-event]').each(function(){
                   if($(this).data('property') !== ''){
                      parentShortcode += ' ' + $(this).data('property') + '="' + $(this).val() + '"';
                   }
               });
               parentShortcode += ']' + childShortcode + '[/' + $(this).data('tag') + ']';
            });
            /* Update shortcode preview */
            $(_self._elements.shortcodeBbcode).val(parentShortcode);
        },        
        /**
         * Clone child form
         * @returns {undefined}
         */
        cloneChildForm: function(){
            var _self = this;
            var children = _self.activateForm.find(_self._elements.shortcodeFormChild);
            children.first().clone().appendTo(_self.activateForm.find(_self._elements.shortcodeZtSub));
            _self._hook();
        },
        /**
         * Show default form
         * @returns {undefined}
         */
        showDefaultForm: function(){
            var _self = this;
            var formContainer = $(_self._elements.shortcodeWrapper).find('div[class^="form "]');
            formContainer.hide();
            _self.activateForm = formContainer.first();
            _self.activateForm.show();
        },
        /**
         * Show a form
         * @param {type} thisPtr
         * @returns {undefined}
         */
        showForm: function(thisPtr){
            var _self = this;
            if(_self.activateForm !== null)
                _self.activateForm.hide();
            _self.activateForm = $(_self._elements.shortcodeWrapper).find('div' + $(thisPtr).attr('href'));
            _self.activateForm.show('slow');
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