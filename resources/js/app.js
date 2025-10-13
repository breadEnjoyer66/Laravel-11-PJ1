import './bootstrap';
import 'flowbite';
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

// Helper: create an adapter for builds that support SimpleUpload or to explicitly set headers
function createEditorWithUpload(textarea) {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    // First try to use the simpleUpload config (supported by the build)
    return ClassicEditor
        .create(textarea, {
            simpleUpload: {
                // Use dashboard route which is registered in routes/web.php
                uploadUrl: '/dashboard/news/upload-image',
                withCredentials: false,
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json'
                }
            }
        })
        .then(editor => {
            console.log('✅ CKEditor initialized with image upload support');

            // Ensure a FileRepository upload adapter is registered.
            // Some builds may ignore the simpleUpload option if the adapter plugin isn't bundled.
            try {
                const fileRepo = editor.plugins.get('FileRepository');
                if (fileRepo && typeof fileRepo.createUploadAdapter !== 'function') {
                    fileRepo.createUploadAdapter = loader => {
                        return {
                            upload: () => loader.file.then(file => new Promise((resolve, reject) => {
                                const formData = new FormData();
                                formData.append('upload', file);

                                fetch('/dashboard/news/upload-image', {
                                    method: 'POST',
                                    headers: {
                                        'X-CSRF-TOKEN': csrfToken,
                                        'Accept': 'application/json'
                                    },
                                    body: formData
                                })
                                    .then(response => response.json())
                                    .then(data => {
                                        if (data && data.url) {
                                            resolve({ default: data.url });
                                        } else {
                                            reject(data && data.error ? data.error : 'Upload failed');
                                        }
                                    })
                                    .catch(err => reject(err));
                            }))
                        };
                    };
                    console.log('✅ Registered fallback FileRepository upload adapter');
                }
            } catch (err) {
                console.warn('⚠️ Could not register fallback upload adapter:', err);
            }

            return editor;
        })
        .catch(error => {
            console.error('❌ CKEditor failed to initialize:', error);
            throw error;
        });
}

document.addEventListener("DOMContentLoaded", function () {
    const textarea = document.querySelector('#body');
    if (textarea) {
        createEditorWithUpload(textarea).catch(err => console.error('❌ CKEditor failed to initialize:', err));
    }
});
