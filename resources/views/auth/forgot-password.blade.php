@extends('layouts.app')
@section('title', 'Forgot Password')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-50 p-6">
        <div class="w-full max-w-md bg-white rounded-2xl p-8 shadow">
            <h2 class="text-lg font-semibold mb-3">Reset Password (no email token)</h2>
            <p class="text-sm text-gray-600 mb-4">Enter your email or username. If an account exists, you will be taken to a
                password reset form.</p>

            <form method="POST" action="{{ route('password.forgot') }}">
                @csrf
                <input name="login" placeholder="Email or Username" value="{{ old('login') }}"
                    class="w-full rounded border-gray-200 p-2">
                <div class="mt-4 flex justify-end">
                    <button class="bg-orange-500 text-white px-4 py-2 rounded">Continue</button>
                </div>
            </form>
        </div>
    </div>
@endsection
