@extends('dashboard.layouts.dashboard')

@section('content')
    <div class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="mb-8">
            <h1 class="text-2xl font-semibold text-gray-900">Tambah Admin</h1>
            <p class="mt-2 text-sm text-gray-600">Tambah admin untuk mengelola website</p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow mx-auto ">
            <form method="POST" action="{{ route('register.post') }}">
                @csrf
                <div class="grid grid-cols-1 gap-4">
                    <div class="grid grid-cols-3 gap-4">
                        <div>
                            <label for="name" class="text-sm font-semibold">Nama Lengkap</label>
                            <input type="text" name="name" placeholder="Nama lengkap" value="{{ old('name') }}"
                                class="my-2 block w-full rounded-md bg-slate-50 border-gray-100 shadow-sm focus:border-primary-500 focus:border-[1px] text-gray-600 text-sm p-2">
                        </div>

                        <div>
                            <label for="username" class="text-sm font-semibold">Username</label>
                            <input type="text" name="username" placeholder="Username" value="{{ old('username') }}"
                                class="my-2 block w-full rounded-md bg-slate-50 border-gray-100 shadow-sm focus:border-primary-500 focus:border-[1px] text-gray-600 text-sm p-2">
                        </div>

                        <div>
                            <label for="email" class="text-sm font-semibold">Email</label>
                            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"
                                class="my-2 block w-full rounded-md bg-slate-50 border-gray-100 shadow-sm focus:border-primary-500 focus:border-[1px] text-gray-600 text-sm p-2">
                        </div>
                    </div>







                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="password" class="text-sm font-semibold">Password</label>
                            <input type="password" name="password" placeholder="Password"
                                class="my-2 block w-full rounded-md bg-slate-50 border-gray-100 shadow-sm focus:border-primary-500 focus:border-[1px] text-gray-600 text-sm p-2">
                        </div>

                        <div>
                            <label for="password_confirmation" class="text-sm font-semibold">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation" placeholder="Konfirmasi password"
                                class="my-2 block w-full rounded-md bg-slate-50 border-gray-100 shadow-sm focus:border-primary-500 focus:border-[1px] text-gray-600 text-sm p-2">
                        </div>
                    </div>

                </div>

                <div class="mt-4">
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 text-sm rounded-lg">Simpan</button>
                </div>
            </form>
        </div>

    </div>
@endsection
