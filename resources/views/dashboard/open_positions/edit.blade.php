@extends('dashboard.layouts.dashboard')

@section('content')
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="w-full px-4 mb-6">
            <div class="flex justify-between items-center">
                <h2 class="font-semibold text-2xl">Edit Posisi</h2>
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
                <form action="{{ route('dashboard.open-positions.update', $openPosition) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="grid gap-4 mb-4">
                        <div>
                            <label for="nama_posisi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Nama Posisi
                            </label>
                            <input type="text" id="nama_posisi" name="nama_posisi"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                                value="{{ old('nama_posisi', $openPosition->nama_posisi) }}" required>
                            @error('nama_posisi')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <button type="submit"
                        class="text-white bg-primary-500 hover:bg-primary-600 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Perbarui Posisi
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
