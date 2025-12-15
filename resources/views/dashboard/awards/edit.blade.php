@extends('dashboard.layouts.dashboard')

@section('content')
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="mb-4">
            <h2 class="font-semibold text-2xl">Edit Sertifikat/Piagam</h2>
        </div>

        <div class="bg-white overflow-hidden sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <form action="{{ route('dashboard.awards.update', $award) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama
                            Sertifikat/Piagam</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $award->name) }}"
                            class="rounded-lg w-full py-2 px-3 text-gray-700 bg-slate-100 focus:border-primary-500 @error('name') border-red-500 @enderror"
                            required>
                        @error('name')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="award_from" class="block text-gray-700 text-sm font-bold mb-2">Pemberi</label>
                        <input type="text" name="award_from" id="award_from"
                            value="{{ old('award_from', $award->award_from) }}"
                            class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('award_from') border-red-500 @enderror"
                            required>
                        @error('award_from')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="received_at" class="block text-gray-700 text-sm font-bold mb-2">Tanggal Diterima</label>
                        <input type="date" name="received_at" id="received_at"
                            value="{{ old('received_at', $award->received_at ? $award->received_at->format('Y-m-d') : '') }}"
                            class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('received_at') border-red-500 @enderror"
                            required>
                        @error('received_at')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Gambar</label>
                        <div class="mb-2">
                            <img src="{{ $award->image_url }}" alt="{{ $award->alt }}"
                                class="h-48 object-contain rounded-lg">
                        </div>
                        <input type="file" name="image" id="image"
                            class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('image') border-red-500 @enderror"
                            accept="image/*">
                        <p class="mt-1 text-sm text-gray-500">Format: JPG, JPEG, PNG, WEBP. Maksimum: 500KB</p>
                        @error('image')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="alt" class="block text-gray-700 text-sm font-bold mb-2">Deskripsi Gambar</label>
                        <input type="text" name="alt" id="alt" value="{{ old('alt', $award->alt) }}"
                            class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('alt') border-red-500 @enderror">
                        @error('alt')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                            Simpan Perubahan
                        </button>
                        <a href="{{ route('dashboard.awards.index') }}" class="text-gray-600 hover:text-gray-800">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
