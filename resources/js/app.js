import './bootstrap';
import 'flowbite';

document.addEventListener("DOMContentLoaded", function () {
    const textarea = document.querySelector('#body');
    if (textarea) {
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        tinymce.init({
            target: textarea,
            plugins: 'image link lists table code paste',
            toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright | bullist numlist | link image | code',
            height: 500,
            menubar: true,
            images_upload_url: '/dashboard/news/upload-image',
            images_upload_credentials: true,
            images_reuse_filename: true,
            images_upload_handler: function (blobInfo, success, failure) {
                const formData = new FormData();
                formData.append('upload', blobInfo.blob(), blobInfo.filename());

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
                            success(data.url);
                        } else {
                            failure(data?.error || 'Upload failed');
                        }
                    })
                    .catch(err => failure(err.message));
            }
        });
    }
});
