import Editor from '@toast-ui/editor'
import 'codemirror/lib/codemirror.css';
import '@toast-ui/editor/dist/toastui-editor.css';

const editor = new Editor({
    el: document.querySelector('#editor'),
    height: '400px',
    initialEditType: 'markdown',
    placeholder: 'Write something cool!',
})

document.querySelector('#createPostForm').addEventListener('submit', e => {
    e.preventDefault();
    document.querySelector('#content').value = editor.getMarkdown();
    e.target.submit();
});
