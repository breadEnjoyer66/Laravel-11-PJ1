@extends('dashboard.layouts.dashboard')


@section('content')
    <div class="max-w-7xl">
        <div class="px-5 sm:py-5">
            <h2 class="text-gray-500 text-2xl font-semibold">Welcome {{ Auth::user()->name }}</h2>
            <p class="text-md text-gray-400">{{ Auth::user()->email }}</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
            <div class="px-5 sm:py-6 border border-gray-200 bg-gradient-to-bl from-white to-gray-100 shadow-sm rounded-lg">
                <h3 class="text-gray-500 text-xl font-semibold">Artikel Tayang</h3>
                <p class="text-3xl font-bold text-gray-700 mb-4">{{ $articleCount }}</p>
                <a href="{{ route('dashboard.news.index') }}"
                    class="hover:text-white text-sm bg-slate-600 text-white px-3 py-2 hover:bg-primary-600 rounded-lg">Lihat
                    semua
                    artikel</a>
            </div>
            <div class="px-5 sm:py-6 border border-gray-200 bg-gradient-to-bl from-white to-gray-100 shadow-sm rounded-lg">
                <h3 class="text-gray-500 text-xl font-semibold">Lamaran Kerja Masuk</h3>
                <p class="text-3xl font-bold text-gray-700 mb-4">{{ $jobApplicationCount }}</p>
                <a href="{{ route('dashboard.job-applications.index') }}"
                    class="hover:text-white text-sm bg-slate-600 text-white px-3 py-2 hover:bg-primary-600 rounded-lg">Lihat
                    semua
                    lamaran</a>
            </div>
        </div>
    </div>
@endsection
