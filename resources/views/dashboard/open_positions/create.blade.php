@extends('dashboard.layouts.dashboard')

@section('content')
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="w-full px-4 mb-6">
            <div class="flex justify-between items-center">
                <h2 class="font-semibold text-2xl">Tambah Posisi Baru </h2>
                <a href="{{ route('dashboard.open-positions.index') }}"
                    class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 inline-flex items-center">
                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                    Kembali
                </a>
            </div>
        </div>

        <div class="mx-auto">
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden p-4">
                <form action="{{ route('dashboard.open-positions.store') }}" method="POST">
                    @csrf
                    <div id="positions-container" class="space-y-4 mb-4">
                        <div class="position-input grid gap-4">
                            <div class="flex items-center gap-2">
                                <div class="flex-1">
                                    <label for="nama_posisi_0"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Nama Posisi
                                    </label>
                                    <input type="text" id="nama_posisi_0" name="positions[]"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                                        required>
                                </div>
                                <button type="button" onclick="removePosition(this)"
                                    class="self-end mb-[5px] p-2.5 text-gray-500 hover:text-red-500 rounded-lg hover:bg-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </button>
                            </div>
                            @error('positions.*')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex gap-2">
                        <button type="button" onclick="addNewPosition()"
                            class="text-primary-500 bg-primary-50 hover:bg-primary-100 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                            Tambah Posisi Lain
                        </button>
                        <button type="submit"
                            class="text-white bg-primary-500 hover:bg-primary-600 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Simpan Semua Posisi
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    @push('scripts')
        <script>
            let positionCount = 1;

            function addNewPosition() {
                const container = document.getElementById('positions-container');
                const newPosition = document.createElement('div');
                newPosition.className = 'position-input grid gap-4';
                newPosition.innerHTML = `
                    <div class="flex items-center gap-2">
                        <div class="flex-1">
                            <label for="nama_posisi_${positionCount}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Nama Posisi
                            </label>
                            <input type="text" id="nama_posisi_${positionCount}" name="positions[]"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                                required>
                        </div>
                        <button type="button" onclick="removePosition(this)"
                            class="self-end mb-[5px] p-2.5 text-gray-500 hover:text-red-500 rounded-lg hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </button>
                    </div>
                `;
                container.appendChild(newPosition);
                positionCount++;
            }

            function removePosition(button) {
                const positionInputs = document.querySelectorAll('.position-input');
                if (positionInputs.length > 1) {
                    button.closest('.position-input').remove();
                } else {
                    showGlobalToast('Minimal harus ada satu posisi', 3000, 'error');
                }
            }
        </script>
    @endpush
@endsection
