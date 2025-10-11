@extends('dashboard.layouts.dashboard')


@section('content')
    <div class="p-3 sm:p-5">
        <h2 class="text-gray-500 text-2xl font-semibold">Welcome {{ Auth::user()->name }}</h2>
        <p class="text-md text-gray-400">{{ Auth::user()->email }}</p>
    </div>
@endsection
