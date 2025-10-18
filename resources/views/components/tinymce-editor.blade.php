@props(['name', 'value' => ''])

<textarea id="{{ $name }}" name="{{ $name }}" class="block w-full rounded-lg border border-gray-300">{!! $value !!}</textarea>

@push('scripts')
    <script src="https://cdn.tiny.cloud/1/tx3ve6k2hzohcmmviqzgo5k5fhu84pt08v5e7kpgn9su18xn/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            tinymce.init({
                selector: '#{{ $name }}',
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
                images_upload_url: '/dashboard/news/upload-image',
                images_upload_handler: function(blobInfo, progress) {
                    return new Promise((resolve, reject) => {
                        const formData = new FormData();
                        formData.append('upload', blobInfo.blob(), blobInfo.filename());

                        fetch('/dashboard/news/upload-image', {
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector(
                                        'meta[name="csrf-token"]').getAttribute(
                                        'content'),
                                    'Accept': 'application/json'
                                },
                                body: formData
                            })
                            .then(response => {
                                if (!response.ok) {
                                    throw new Error('HTTP Error: ' + response.status);
                                }
                                return response.json();
                            })
                            .then(result => {
                                if (result && result.url) {
                                    resolve(result.url);
                                } else {
                                    reject('Image upload failed');
                                }
                            })
                            .catch(err => {
                                reject(err.message || 'Image upload failed');
                            });
                    });
                },
                height: 500,
                branding: false,
                promotion: false,
                statusbar: true,
                resize: true,
                skin: 'oxide',
                content_css: 'default',
                setup: function(editor) {
                    editor.on('init', function() {
                        editor.getContainer().style.transition = "border .3s"
                        editor.getContainer().style.border = "1px solid #ccc"
                        editor.getContainer().style.borderRadius = "0.5rem"
                    });
                    editor.on('focus', function() {
                        editor.getContainer().style.border = "1px solid #2563eb"
                    });
                    editor.on('blur', function() {
                        editor.getContainer().style.border = "1px solid #ccc"
                    });
                }
            });
        });
    </script>
@endpush
