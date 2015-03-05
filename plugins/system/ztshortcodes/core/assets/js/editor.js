
/**
 * Crex Shortcodes
 * @param {pointer} w Window pointer
 * @param {pointer} $ jQuery pointer
 * @returns {undefined}
 */
(function (w, $) {

    /* Base class */
    var _editor = {
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

            markitupBBCode = {
                previewParserPath: window.location.pathname + '?crexshortcodes_task=display&crexshortcodes_view=demo',
                previewParserVar: 'bbcode',
                markupSet: [
                    {name: 'Bold', key: 'B', openWith: '[b]', closeWith: '[/b]'},
                    {name: 'Italic', key: 'I', openWith: '[i]', closeWith: '[/i]'},
                    {name: 'Underline', key: 'U', openWith: '[u]', closeWith: '[/u]'},
                    {separator: '---------------'},
                    {name: 'Picture', key: 'P', replaceWith: '[img][![Url]!][/img]'},
                    {name: 'Link', key: 'L', openWith: '[url=[![Url]!]]', closeWith: '[/url]', placeHolder: 'Your text to link here...'},
                    {separator: '---------------'},
                    {name: 'Size', key: 'S', openWith: '[size=[![Text size]!]]', closeWith: '[/size]',
                        dropMenu: [
                            {name: 'Big', openWith: '[size=200]', closeWith: '[/size]'},
                            {name: 'Normal', openWith: '[size=100]', closeWith: '[/size]'},
                            {name: 'Small', openWith: '[size=50]', closeWith: '[/size]'}
                        ]},
                    {separator: '---------------'},
                    {name: 'Bulleted list', openWith: '[list]\n', closeWith: '\n[/list]'},
                    {name: 'Numeric list', openWith: '[list=[![Starting number]!]]\n', closeWith: '\n[/list]'},
                    {name: 'List item', openWith: '[*] '},
                    {separator: '---------------'},
                    {name: 'Quotes', openWith: '[quote]', closeWith: '[/quote]'},
                    {name: 'Code', openWith: '[code]', closeWith: '[/code]'},
                    {separator: '---------------'},
                    {name: 'Clean', className: "clean", replaceWith: function (markitup) {
                            return markitup.selection.replace(/\[(.*?)\]/g, "")
                        }},
                    {name: 'Preview', className: "preview", call: 'preview'},
                    {name: 'Insert', className: "insert", call: 'crex.shortcodes.insertToEditor();'}
                ]
            };
            jQuery(this._elements.textareaBBCode).markItUp(markitupBBCode);
        }
    };
    /* Check for Crex javascript framework */
    if (typeof (w.crex) === 'undefined') {
        w.crex = {};
    }
    /* Check for Crex Shortcodes javascript framework */
    if (typeof (w.crex.shortcodes) === 'undefined') {
        w.crex.shortcodes = {};
    }

    /* Append short code to Crex */
    w.crex.shortcodes.editor = _editor;

    /* Init shortcode */
    $(w.document).ready(function () {
        w.crex.shortcodes.editor._init();
    });

})(window, jQuery);