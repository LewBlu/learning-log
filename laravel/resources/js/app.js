import './bootstrap';
import ace from 'ace-builds/src-noconflict/ace';

let editorElement = document.getElementById('editor');

// Check if page requires editor
if (editorElement) {
    let editorOptions = {
        maxLines: 50,
        minLines: 10,
        fontSize: 14,
        readOnly: editorElement.classList.contains('editor-readonly'),
    };

    // pass options to ace.edit
    let editor = ace.edit(document.getElementById('editor'), editorOptions);

    // Trigger event when code is updated
    editor.on("change", function (e) {
        Livewire.dispatch('code-updated', { code: editor.getValue() });
    });

    // use setOptions method to set several options at once
    editor.setOptions({
        autoScrollEditorIntoView: true,
        copyWithEmptySelection: true,
    });
}

window.Alpine = Alpine;

Alpine.start();
