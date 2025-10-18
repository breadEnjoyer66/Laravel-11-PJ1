import ClassicEditorBase from '@ckeditor/ckeditor5-editor-classic/src/classiceditor';
import Essentials from '@ckeditor/ckeditor5-essentials/src/essentials';
import Paragraph from '@ckeditor/ckeditor5-paragraph/src/paragraph';
import Bold from '@ckeditor/ckeditor5-basic-styles/src/bold';
import Italic from '@ckeditor/ckeditor5-basic-styles/src/italic';
import Link from '@ckeditor/ckeditor5-link/src/link';
import Image from '@ckeditor/ckeditor5-image/src/image';
import ImageToolbar from '@ckeditor/ckeditor5-image/src/imagetoolbar';
import ImageUpload from '@ckeditor/ckeditor5-image/src/imageupload';
import ImageStyle from '@ckeditor/ckeditor5-image/src/imagestyle';
import ImageResize from '@ckeditor/ckeditor5-image/src/imageresize';
import { GeneralHtmlSupport } from '@ckeditor/ckeditor5-html-support/src/index';
import Heading from '@ckeditor/ckeditor5-heading/src/heading';
import List from '@ckeditor/ckeditor5-list/src/list';
import Table from '@ckeditor/ckeditor5-table/src/table';
import TableToolbar from '@ckeditor/ckeditor5-table/src/tabletoolbar';
import Alignment from '@ckeditor/ckeditor5-alignment/src/alignment';
import FileRepository from '@ckeditor/ckeditor5-upload/src/filerepository';
import SimpleUploadAdapter from '@ckeditor/ckeditor5-upload/src/adapters/simpleuploadadapter';

export default class ClassicEditor extends ClassicEditorBase { }

ClassicEditor.builtinPlugins = [
    Essentials,
    Paragraph,
    Bold,
    Italic,
    Link,
    Image,
    ImageToolbar,
    ImageUpload,
    ImageStyle,
    ImageResize,
    Heading,
    List,
    Table,
    TableToolbar,
    Alignment,
    FileRepository,
    SimpleUploadAdapter
    ,
    GeneralHtmlSupport
];

ClassicEditor.defaultConfig = {
    toolbar: {
        items: [
            'heading', '|',
            'bold', 'italic', 'link', '|',
            'bulletedList', 'numberedList', '|',
            'insertTable', 'uploadImage', '|',
            'undo', 'redo'
        ]
    },
    // inside create(textarea, { ... })
    image: {
        // toolbar shown when image is selected
        toolbar: [
            'imageStyle:full',
            'imageStyle:side',
            '|',
            'resizeImage',
            '|',
            'imageTextAlternative',
            '|',
            'alignment'
        ],

        // available styles
        styles: [
            'full', // default - image block full width
            'side'  // image styled to the side (inline-floating)
            // you can add custom style names and map CSS classes if needed
        ],

        // resize options (buttons in the dropdown; requires ImageResize plugin)
        resizeOptions: [
            {
                name: 'resizeImage:original',
                value: null,
                label: 'Original'
            },
            {
                name: 'resizeImage:75',
                value: '75',
                label: '75%'
            },
            {
                name: 'resizeImage:50',
                value: '50',
                label: '50%'
            }
        ],

        // how the editor handles inserting images via url (optional)
        insert: {
            integrations: ['insertImageViaUrl']
        }
    },
    simpleUpload: {
        uploadUrl: '/dashboard/news/upload-image', // 👈 We'll create this route
        withCredentials: false,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        }
    },
    // General HTML Support (GHS) configuration - keep allow list minimal for safety
    htmlSupport: {
        allow: [
            // allow basic attributes on links
            {
                name: 'a',
                attributes: {
                    href: true,
                    target: true,
                    rel: true
                }
            },
            // allow iframes but only common attributes (use sparingly)
            {
                name: 'iframe',
                attributes: {
                    src: true,
                    width: true,
                    height: true,
                    frameborder: true,
                    allowfullscreen: true
                }
            }
        ]
    },
    language: 'en'
};
