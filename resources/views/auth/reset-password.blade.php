@extends('layouts.app')
@section('title', 'Reset Password')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-50 p-6">
        <div class="w-full max-w-md bg-white rounded-2xl p-8 shadow">
            <h2 class="text-lg font-semibold mb-3">Reset Password for {{ $user->email }}</h2>

            <form method="POST" action="{{ route('password.reset.post', $user->id) }}">
                @csrf
                <input type="password" name="password" placeholder="New password" class="w-full rounded border-gray-200 p-2">
                <input type="password" name="password_confirmation" placeholder="Confirm password"
                    class="w-full rounded border-gray-200 p-2 mt-3">
                <div class="mt-4 text-right">
                    <button class="bg-blue-600 text-white px-4 py-2 rounded">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
