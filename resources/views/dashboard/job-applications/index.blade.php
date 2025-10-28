@extends('dashboard.layouts.dashboard')

@section('content')
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">

        {{-- Flash messages are shown via global toast in the layout --}}

        <div class="flex items-center mb-4">
            <div class="mr-2">
                <h2 class="font-semibold text-2xl">Job Applications</h2>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 relative sm:rounded-lg overflow-hidden border">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                <div class="w-full md:w-1/2">
                    <div class="flex items-center">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="text" id="searchInput"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                placeholder="Search by name or email" value="{{ request('search') }}">
                        </div>
                    </div>
                </div>
            </div>

            <div id="tableContainer">
                @include('dashboard.job-applications.partials.table')
            </div>

            @push('scripts')
                <script>
                    let currentPage = {{ request('page', 1) }};
                    let searchTimer;

                    // Function to update the URL with current parameters
                    function updateURL() {
                        const params = new URLSearchParams();
                        const searchValue = document.getElementById('searchInput').value;

                        if (searchValue) params.set('search', searchValue);
                        if (currentPage !== 1) params.set('page', currentPage);

                        const newUrl = `${window.location.pathname}${params.toString() ? '?' + params.toString() : ''}`;
                        window.history.pushState({}, '', newUrl);
                    }

                    // Function to update table data
                    function updateTable() {
                        const searchValue = document.getElementById('searchInput').value;
                        const params = new URLSearchParams();

                        if (searchValue) params.set('search', searchValue);
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

                    // Handle pagination
                    document.addEventListener('click', function(e) {
                        const element = e.target.closest('[data-page]');
                        if (element) {
                            e.preventDefault();
                            currentPage = element.dataset.page;
                            updateTable();
                        }
                    });

                    // Delete handling
                    function confirmDelete(deleteUrl) {
                        if (confirm('Delete this application?')) {
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
                                        alert('Error deleting application');
                                    }
                                })
                                .catch(error => {
                                    console.error('Error:', error);
                                    alert('Error deleting application');
                                });
                        }
                    }
                </script>
            @endpush
        </div>
    </section>
@endsection
