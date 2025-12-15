@extends('dashboard.layouts.dashboard')

@section('content')
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="flex items-center justify-start gap-4 mb-4">
            <div>
                <h2 class="font-semibold text-2xl">Awards & Certifications</h2>
            </div>
            <button type="button" id="addAwardButton" class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded-lg">
                Add New
            </button>
        </div>

        <!-- Add Award Modal -->
        <div id="addAwardModal" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog"
            aria-modal="true">
            <!-- Background overlay -->
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

            <!-- Modal panel -->
            <div class="flex min-h-full items-center justify-center p-4">

                <div
                    class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                    <form action="{{ route('dashboard.awards.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="bg-white px-4 pb-4 pt-5 sm:p-6">
                            <h2 class="text-2xl font-bold text-gray-900 mb-4">Add Awards</h2>
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 text-sm font-semibold mb-2">Nama
                                    Sertifikat/Piagam</label>
                                <input type="text" name="name" id="name" placeholder="Asus Golden Partner 20XX"
                                    class="placeholder:text-sm placeholder:text-gray-400 rounded-lg w-full py-2 px-3 text-gray-700 bg-gray-50 border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 @error('name') border-red-500 @enderror"
                                    required>
                                @error('name')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="award_from" class="block text-gray-700 text-sm font-semibold mb-2">Diberikan
                                    Oleh</label>
                                <input type="text" name="award_from" id="award_from" placeholder="ex: Asus, Lenovo"
                                    class="placeholder:text-sm placeholder:text-gray-400 rounded-lg w-full py-2 px-3 text-gray-700 bg-gray-50 border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 @error('award_from') border-red-500 @enderror"
                                    required>
                                @error('award_from')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="received_at" class="block text-gray-700 text-sm font-semibold mb-2">Tanggal
                                    Diterima</label>
                                <input type="date" name="received_at" id="received_at"
                                    class="rounded-lg w-full py-2 px-3 text-gray-700 bg-gray-50 border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 @error('received_at') border-red-500 @enderror"
                                    required>
                                @error('received_at')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="image" class="block text-gray-700 text-sm font-semibold mb-2">Foto</label>
                                <input type="file" name="image" id="image"
                                    class="rounded-lg w-full py-2 px-3 text-gray-700 bg-gray-50 border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 @error('image') border-red-500 @enderror"
                                    accept="image/*" required>
                                <p class="mt-1 text-sm text-gray-500">Format: JPG, JPEG, PNG, WEBP. Maksimum: 500KB</p>
                                @error('image')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                            <button type="submit"
                                class="inline-flex w-full justify-center rounded-lg bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 sm:ml-3 sm:w-auto">
                                Simpan
                            </button>
                            <button type="button" id="closeModal"
                                class="mt-3 inline-flex w-full justify-center rounded-lg bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">
                                Batal
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>



        <!-- Edit Award Modal -->
        <div id="editAwardModal" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="modal-title"
            role="dialog" aria-modal="true">
            <!-- Background overlay -->
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

            <!-- Modal panel -->
            <div class="flex min-h-full items-center justify-center p-4">
                <div
                    class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                    <form id="editForm" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="bg-white px-4 pb-4 pt-5 sm:p-6">
                            <h2 class="text-2xl font-bold text-gray-900 mb-4">Edit Award</h2>
                            <div class="mb-4">
                                <label for="edit_name" class="block text-gray-700 text-sm font-semibold mb-2">Nama
                                    Sertifikat/Piagam</label>
                                <input type="text" name="name" id="edit_name"
                                    class="placeholder:text-sm placeholder:text-gray-400 rounded-lg w-full py-2 px-3 text-gray-700 bg-gray-50 border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 @error('name') border-red-500 @enderror"
                                    required>
                                @error('name')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="edit_award_from"
                                    class="block text-gray-700 text-sm font-semibold mb-2">Diberikan
                                    Oleh</label>
                                <input type="text" name="award_from" id="edit_award_from"
                                    class="placeholder:text-sm placeholder:text-gray-400 rounded-lg w-full py-2 px-3 text-gray-700 bg-gray-50 border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 @error('award_from') border-red-500 @enderror"
                                    required>
                                @error('award_from')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="edit_received_at" class="block text-gray-700 text-sm font-semibold mb-2">Tanggal
                                    Diterima</label>
                                <input type="date" name="received_at" id="edit_received_at"
                                    class="rounded-lg w-full py-2 px-3 text-gray-700 bg-gray-50 border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 @error('received_at') border-red-500 @enderror"
                                    required>
                                @error('received_at')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="edit_image" class="block text-gray-700 text-sm font-semibold mb-2">Foto</label>
                                <div class="mb-2">
                                    <img id="currentImage" src="" alt="Current award image"
                                        class="h-48 object-contain rounded-lg">
                                </div>
                                <input type="file" name="image" id="edit_image"
                                    class="rounded-lg w-full py-2 px-3 text-gray-700 bg-gray-50 border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 @error('image') border-red-500 @enderror"
                                    accept="image/*">
                                <p class="mt-1 text-sm text-gray-500">Format: JPG, JPEG, PNG, WEBP. Maksimum: 500KB</p>
                                @error('image')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                            <button type="submit"
                                class="inline-flex w-full justify-center rounded-lg bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 sm:ml-3 sm:w-auto">
                                Update
                            </button>
                            <button type="button" id="closeEditModal"
                                class="mt-3 inline-flex w-full justify-center rounded-lg bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">
                                Batal
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 relative sm:rounded-lg overflow-hidden shadow-md">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-6">
                <div class="w-full md:w-1/2">
                    <div class="flex items-center">
                        <label for="search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="text" id="search"
                                class="bg-gray-50 border border-gray-300 placeholder:text-gray-400 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                placeholder="Cari dengan nama atau pemberi penghargaan.." value="{{ request('search') }}">
                        </div>

                    </div>
                </div>

            </div>
            <div class="px-6">
                {{ $awards->links() }}
            </div>
            <div id="awards-list">
                @include('dashboard.awards.partials.list')
            </div>
        </div>
    </section>

    @push('scripts')
        <script>
            // Search functionality
            let timeout;
            const searchInput = document.getElementById('search');
            const awardsList = document.getElementById('awards-list');
            const editModal = document.getElementById('editAwardModal');
            const editForm = document.getElementById('editForm');

            searchInput.addEventListener('input', function() {
                clearTimeout(timeout);
                timeout = setTimeout(() => {
                    const searchTerm = this.value;
                    fetch(`{{ route('dashboard.awards.index') }}?search=${encodeURIComponent(searchTerm)}`, {
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        })
                        .then(response => response.text())
                        .then(html => {
                            awardsList.innerHTML = html;
                        });
                }, 300);
            });

            // Modal functionality
            const modal = document.getElementById('addAwardModal');
            const addButton = document.getElementById('addAwardButton');
            const closeButton = document.getElementById('closeModal');

            // Open modal
            addButton.addEventListener('click', () => {
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden'; // Prevent scrolling
            });

            // Close modal functions
            const closeModal = () => {
                modal.classList.add('hidden');
                document.body.style.overflow = ''; // Re-enable scrolling
            };

            // Close on button click
            closeButton.addEventListener('click', closeModal);

            // Close on background click
            modal.addEventListener('click', (e) => {
                if (e.target === modal || e.target.classList.contains('bg-opacity-75')) {
                    closeModal();
                }
            });

            // Close on Escape key
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
                    closeModal();
                }
            });

            // Prevent modal close when clicking inside the form
            modal.querySelector('form').addEventListener('click', (e) => {
                e.stopPropagation();
            });

            // Edit Modal Functionality
            const closeEditModal = document.getElementById('closeEditModal');

            // Function to open edit modal with award data
            window.openEditModal = (awardId, name, awardFrom, receivedAt, imageUrl) => {
                editForm.action = `/dashboard/awards/${awardId}`;
                document.getElementById('edit_name').value = name;
                document.getElementById('edit_award_from').value = awardFrom;
                document.getElementById('edit_received_at').value = receivedAt;
                document.getElementById('currentImage').src = imageUrl;

                editModal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            };

            // Close edit modal functions
            const closeEditModalFunc = () => {
                editModal.classList.add('hidden');
                document.body.style.overflow = '';
                editForm.reset();
            };

            closeEditModal.addEventListener('click', closeEditModalFunc);

            editModal.addEventListener('click', (e) => {
                if (e.target === editModal || e.target.classList.contains('bg-opacity-75')) {
                    closeEditModalFunc();
                }
            });

            // Prevent edit modal close when clicking inside the form
            editModal.querySelector('form').addEventListener('click', (e) => {
                e.stopPropagation();
            });
        </script>
    @endpush
@endsection
