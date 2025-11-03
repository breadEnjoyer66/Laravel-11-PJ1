@extends('clean.app')
@section('title', 'Forgot Password')

@section('content')
    <div class="min-h-screen flex items-center justify-center">
        <div class="w-full max-w-md bg-white rounded-2xl p-8 shadow">
            <h2 class="text-lg font-semibold mb-3">Reset Password</h2>
            <p class="text-sm text-gray-600 mb-4">Masukkan username atau email, jika akun ditemukan, Anda akan diarahkan ke
                halaman reset password.</p>

            <form method="POST" action="{{ route('password.forgot') }}">
                @csrf
                <input name="login" placeholder="Email atau Username" value="{{ old('login') }}"
                    class="w-full rounded-lg p-2 text-sm text-gray-500 bg-slate-200 py-3 active:border-primary-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:bg-white" />
                <div class="mt-4 flex justify-between items-center">
                    <a href="{{ route('login') }}" class="text-sm text-primary-500 hover:underline">Kembali ke Login</a>
                    <button class="bg-primary-500 text-white px-4 py-2 rounded-lg">Lanjutkan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
