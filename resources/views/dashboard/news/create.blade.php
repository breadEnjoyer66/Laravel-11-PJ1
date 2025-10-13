@extends('dashboard.layouts.dashboard')

@section('content')
    <div class="p-3 sm:p-5 rounded-lg">

        <div class="mb-4">
            <h2 class="font-semibold text-2xl">Add a new Article</h2>
        </div>

        <div class="bg-white border p-4 rounded-lg">
            {{-- The form posts to DashboardArticleController@store --}}

            <form action="{{ url('/dashboard/news') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    {{-- Title --}}
                    <div class="sm:col-span-2">
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                        <input type="text" name="title" id="title" value="{{ old('title') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-400 focus:border-primary-400 block w-full p-2.5 placeholder:text-sm placeholder:text-gray-400"
                            placeholder="Type article title" required>
                        @error('title')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Slug --}}
                    <div class="w-full">
                        <label for="slug" class="block mb-2 text-sm font-medium text-gray-900">Slug</label>
                        <input type="text" name="slug" id="slug" value="{{ old('slug') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-400 focus:border-primary-400 block w-full p-2.5 placeholder:text-sm placeholder:text-gray-400"
                            placeholder="auto-generated if empty">
                        <p class="text-xs text-gray-500 mt-1">SEO friendly URL (leave as is if auto-generated)</p>
                        @error('slug')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Category --}}
                    <div>
                        <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900">Category</label>
                        <select id="category_id" name="category_id"
                            class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-primary-400 focus:border-primary-400 block w-full p-2.5"
                            required>
                            <option selected disabled>Select category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Content --}}
                    <div class="sm:col-span-2">
                        <label for="body" class="block mb-2 text-sm font-medium text-gray-900">Article
                            Content</label>
                        <textarea id="body" name="body" rows="24"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 border-gray-300 focus:ring-primary-400 focus:border-primary-400 placeholder:text-sm placeholder:text-gray-400"
                            placeholder="Write your article here...">{{ old('body') }}</textarea>


                        @error('body')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Thumbnail --}}
                    <div>
                        <label for="thumbnail" class="block mb-2 text-sm font-medium text-gray-900">Thumbnail
                            Image</label>
                        <div class="mb-3">
                            <img id="thumbnailPreview" src="" alt="Thumbnail preview"
                                class="w-48 h-32 object-cover rounded-md hidden">
                        </div>
                        <input type="file" name="thumbnail" id="thumbnail"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none">
                        <div class="mt-2">
                            <label class="inline-flex items-center text-sm text-gray-700">
                                <input type="checkbox" id="clear_thumbnail_selection" class="mr-2">
                                Clear selected thumbnail
                            </label>
                        </div>
                        <p class="text-xs text-gray-500 mt-1">Recommended: 1200×630px (for SEO/social)</p>
                        @error('thumbnail')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Meta Title --}}
                    <div class="sm:col-span-2">
                        <label for="meta_title" class="block mb-2 text-sm font-medium text-gray-900">Meta Title</label>
                        <input type="text" name="meta_title" id="meta_title" value="{{ old('meta_title') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-400 focus:border-primary-400 block w-full p-2.5"
                            placeholder="SEO title for Google results">
                    </div>

                    {{-- Meta Description --}}
                    <div class="sm:col-span-2">
                        <label for="meta_description" class="block mb-2 text-sm font-medium text-gray-900">Meta
                            Description</label>
                        <textarea id="meta_description" name="meta_description" rows="3"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-400 focus:border-primary-400 placeholder:text-sm placeholder:text-gray-400"
                            placeholder="Short summary for SEO (under 160 chars)">{{ old('meta_description') }}</textarea>
                    </div>


                </div>

                <button type="submit"
                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-600 rounded-lg focus:ring-4 focus:ring-primary-200 hover:bg-primary-700">
                    Publish Article
                </button>

            </form>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const title = document.querySelector('#title');
            const slug = document.querySelector('#slug');
            let typingTimer;
            const delay = 400;

            title.addEventListener('blur', generateSlug);
            title.addEventListener('keyup', function() {
                clearTimeout(typingTimer);
                typingTimer = setTimeout(generateSlug, delay);
            });

            function generateSlug() {
                if (!slug.dataset.manual && title.value.trim() !== '') {
                    fetch(`/dashboard/news/checkSlug?title=${encodeURIComponent(title.value)}`)
                        .then(response => response.json())
                        .then(data => {
                            slug.value = data.slug;
                        })
                        .catch(err => console.error('Slug generation failed:', err));
                }
            }

            slug.addEventListener('input', function() {
                slug.dataset.manual = true;
            });

            // Thumbnail preview for create form
            const thumbnailInput = document.querySelector('#thumbnail');
            const thumbnailPreview = document.querySelector('#thumbnailPreview');
            if (thumbnailInput) {
                const clearCheckbox = document.querySelector('#clear_thumbnail_selection');
                thumbnailInput.addEventListener('change', function(event) {
                    const file = event.target.files[0];
                    if (!file) {
                        thumbnailPreview.src = '';
                        thumbnailPreview.classList.add('hidden');
                        return;
                    }
                    // client-side size validation (2 MB)
                    const MAX_SIZE = 2 * 1024 * 1024; // 2MB
                    if (file.size > MAX_SIZE) {
                        showGlobalToast('Selected file is too large. Maximum size is 2 MB.', 4000, 'error');
                        thumbnailInput.value = '';
                        thumbnailPreview.src = '';
                        thumbnailPreview.classList.add('hidden');
                        return;
                    }
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        thumbnailPreview.src = e.target.result;
                        thumbnailPreview.classList.remove('hidden');
                        if (clearCheckbox) clearCheckbox.checked = false;
                    };
                    reader.readAsDataURL(file);
                });

                if (clearCheckbox) {
                    clearCheckbox.addEventListener('change', function(e) {
                        if (e.target.checked) {
                            thumbnailInput.value = '';
                            thumbnailPreview.src = '';
                            thumbnailPreview.classList.add('hidden');
                        }
                    });
                }
            }
        });
    </script>
@endsection
