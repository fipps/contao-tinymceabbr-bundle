tinymce.PluginManager.requireLangPack('abbr','de')
tinymce.PluginManager.add('abbr', function(editor) {
    function showAbbrDialog() {
        title=editor.selection.getNode().title;
        lang=editor.selection.getNode().lang;
        txt=editor.selection.getContent({format : 'text'});

        editor.windowManager.open({
            title: 'Acronyme/Abbreviation',
            body: [{type: 'textbox', name: 'title', size: 40, label: 'Meaning', value: title},
                {type: 'textbox', name: 'lang', size: 40, label: 'Language', value: lang}],
            onsubmit: function(e) {

                var node = editor.dom.getParent(editor.selection.getNode(), "abbr");
                if (node) {
                    editor.execCommand('mceRemoveNode', false, node);
                }
                editor.selection.setNode(tinymce.activeEditor.dom.create('abbr', {title: e.data.title,lang: e.data.lang},txt));
            }
        });
    }

    function showLangDialog() {
        lang=editor.selection.getNode().lang;
        txt=editor.selection.getContent({format : 'text'});

        editor.windowManager.open({
            title: 'Language',
            body: {type: 'textbox', name: 'lang', size: 40, label: 'Language', value: lang},
            onsubmit: function(e) {

                var node = editor.dom.getParent(editor.selection.getNode(), "span");
                if (node) {
                    editor.execCommand('mceRemoveNode', false, node);
                }
                editor.selection.setNode(tinymce.activeEditor.dom.create('span', {lang: e.data.lang},txt));
            }
        });
    }

    editor.addMenuItem('abbr', {
        text: 'Acronyme/Abbreviation',
        context: 'insert',
        icon: 'books',
        onclick: showAbbrDialog
    });

    editor.addMenuItem('lang', {
        text: 'Language',
        context: 'insert',
        icon: 'translate',
        onclick: showLangDialog
    });
});
