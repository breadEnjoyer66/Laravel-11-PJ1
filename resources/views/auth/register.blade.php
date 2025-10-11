@extends('dashboard.layouts.dashboard')
@section('title', 'Create User')

@section('header')
    <div class="flex items-center justify-between">
        <h1 class="text-2xl font-semibold">Create User</h1>
    </div>
@endsection

@section('content')
    <div class="bg-white p-6 rounded-lg shadow">
        <form method="POST" action="{{ route('register.post') }}">
            @csrf
            <div class="grid grid-cols-1 gap-4">
                <input name="name" placeholder="Full name" value="{{ old('name') }}"
                    class="w-full rounded border-gray-200 p-2">
                <input name="username" placeholder="Username" value="{{ old('username') }}"
                    class="w-full rounded border-gray-200 p-2">
                <input name="email" placeholder="Email" value="{{ old('email') }}"
                    class="w-full rounded border-gray-200 p-2">
                <input type="password" name="password" placeholder="Password" class="w-full rounded border-gray-200 p-2">
                <input type="password" name="password_confirmation" placeholder="Confirm Password"
                    class="w-full rounded border-gray-200 p-2">
            </div>

            <div class="mt-4">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Create</button>
            </div>
        </form>
    </div>
@endsection
