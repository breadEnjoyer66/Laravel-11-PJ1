@extends('dashboard.layouts.dashboard')

@section('content')
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="flex items-center mb-4 justify-between">
            <div class="mr-2">
                <h2 class="font-semibold text-2xl">Posisi Tersedia</h2>
            </div>
            <div class="flex items-center space-x-4">
                <!-- Search Input -->
                <div class="relative">
                    <input type="text" id="searchInput"
                        class="w-64 pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500"
                        placeholder="Cari posisi..." value="{{ request('search') }}">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>

                <!-- Create New Position Button -->
                <a href="{{ route('dashboard.open-positions.create') }}"
                    class="px-4 py-2 bg-primary-500 text-white rounded-lg hover:bg-primary-600 inline-flex items-center">
                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Tambah Posisi Baru
                </a>
            </div>
        </div>

        @if (session('success'))
            <div class="w-full px-4 mb-6">
                <div class="p-4 rounded-lg bg-green-100 text-green-700">
                    {{ session('success') }}
                </div>
            </div>
        @endif

        <!-- Table Container -->
        <div id="tableContainer">
            @include('dashboard.open_positions.partials.table')
        </div>
    </section>

    @push('scripts')
        <script>
            let currentPage = {{ request('page', 1) }};
            let currentSort = '{{ request('sort', 'created_at') }}';
            let currentOrder = '{{ request('order', 'desc') }}';
            let searchTimer;

            // Function to update the URL with current parameters
            function updateURL() {
                const params = new URLSearchParams();
                const searchValue = document.getElementById('searchInput').value;

                if (searchValue) params.set('search', searchValue);
                if (currentSort !== 'created_at') params.set('sort', currentSort);
                if (currentOrder !== 'desc') params.set('order', currentOrder);
                if (currentPage !== 1) params.set('page', currentPage);

                const newUrl = `${window.location.pathname}${params.toString() ? '?' + params.toString() : ''}`;
                window.history.pushState({}, '', newUrl);
            }

            // Function to update table data
            function updateTable() {
                const searchValue = document.getElementById('searchInput').value;
                const params = new URLSearchParams();

                if (searchValue) params.set('search', searchValue);
                params.set('sort', currentSort);
                params.set('order', currentOrder);
                params.set('page', currentPage);

                fetch(`${window.location.pathname}?${params.toString()}`, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => response.text())
                    .then(html => {
                        document.getElementById('tableContainer').innerHTML = html;
                        updateURL();
                    });
            }

            // Handle search input
            document.getElementById('searchInput').addEventListener('input', function() {
                clearTimeout(searchTimer);
                searchTimer = setTimeout(() => {
                    currentPage = 1;
                    updateTable();
                }, 300);
            });

            // Handle sorting
            function sort(column) {
                if (currentSort === column) {
                    currentOrder = currentOrder === 'asc' ? 'desc' : 'asc';
                } else {
                    currentSort = column;
                    currentOrder = 'asc';
                }
                currentPage = 1;
                updateTable();
            }

            // Handle pagination
            function changePage(page) {
                currentPage = page;
                updateTable();
            }

            // Delete handling
            function confirmDelete(deleteUrl) {
                if (confirm('Apakah Anda yakin ingin menghapus posisi ini?')) {
                    const csrfToken = document.querySelector('meta[name="csrf-token"]').content;
                    const formData = new FormData();
                    formData.append('_method', 'DELETE');

                    fetch(deleteUrl, {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': csrfToken,
                                'X-Requested-With': 'XMLHttpRequest'
                            },
                            body: formData
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                updateTable();
                            } else {
                                alert('Terjadi kesalahan saat menghapus posisi');
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            alert('Terjadi kesalahan saat menghapus posisi');
                        });
                }
            }
        </script>
    @endpush
@endsection
