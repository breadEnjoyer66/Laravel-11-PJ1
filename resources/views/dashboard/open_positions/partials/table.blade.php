<div class="mx-auto">
    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3">#</th>
                        <th scope="col" class="px-4 py-3">
                            <button type="button" class="flex items-center" onclick="sort('nama_posisi')">
                                Nama Posisi
                                @if (request('sort') === 'nama_posisi')
                                    @if (request('order') === 'asc')
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 15l7-7 7 7" />
                                        </svg>
                                    @else
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    @endif
                                @endif
                            </button>
                        </th>
                        <th scope="col" class="px-4 py-3">
                            <button type="button" class="flex items-center" onclick="sort('created_at')">
                                Tanggal Dibuat
                                @if (request('sort', 'created_at') === 'created_at')
                                    @if (request('order', 'desc') === 'asc')
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 15l7-7 7 7" />
                                        </svg>
                                    @else
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    @endif
                                @endif
                            </button>
                        </th>
                        <th scope="col" class="px-4 py-3">
                            <span class="sr-only">Actions</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($open_positions as $position)
                        <tr class="border-b dark:border-gray-700">
                            <td class="px-4 py-3">
                                {{ ($open_positions->currentPage() - 1) * $open_positions->perPage() + $loop->iteration }}
                            </td>
                            <td class="px-4 py-3">{{ $position->nama_posisi }}</td>
                            <td class="px-4 py-3">{{ $position->created_at->format('d F Y') }}</td>
                            <td class="px-4 py-3 flex items-center justify-end space-x-2">
                                <a href="{{ route('dashboard.open-positions.edit', $position) }}"
                                    class="px-3 py-1 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600">
                                    Edit
                                </a>
                                <button type="button"
                                    onclick="confirmDelete('{{ route('dashboard.open-positions.destroy', $position) }}')"
                                    class="px-3 py-1 bg-red-500 text-white rounded-lg hover:bg-red-600">
                                    Hapus
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr class="border-b dark:border-gray-700">
                            <td colspan="4" class="px-4 py-3 text-center">
                                Belum ada posisi yang tersedia.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @include('dashboard.open_positions.partials.pagination')
    </div>
</div>
