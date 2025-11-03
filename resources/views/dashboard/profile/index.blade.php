@extends('dashboard.layouts.dashboard')

@section('content')
    <div class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="">
            {{-- Profile Header --}}
            <div class="mb-8">
                <h1 class="text-2xl font-semibold text-gray-900">Profile Settings</h1>
                <p class="mt-2 text-sm text-gray-600">Atur dan kelola informasi profil Anda.</p>
            </div>

            @if (session('success'))
                <div class="mb-6 p-4 rounded-lg bg-green-100 text-green-700">
                    {{ session('success') }}
                </div>
            @endif

            <div class="md:flex gap-4 w-full">
                {{-- Profile Information Section --}}
                <div class="w-full bg-white rounded-lg shadow mb-6 overflow-hidden">
                    <div class="p-6 border-b">
                        <h2 class="text-lg font-medium">Informasi Profile</h2>
                        <p class="mt-1 text-sm text-gray-600">Perbarui informasi profil akun Anda.</p>
                    </div>
                    <div class="p-6">
                        <form action="{{ route('dashboard.profile.update') }}" method="POST" class="space-y-6">
                            @csrf
                            @method('PUT')

                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                <input type="text" name="name" id="name" value="{{ auth()->user()->name }}"
                                    class="mt-1 block w-full rounded-md bg-slate-50 border-gray-100 shadow-sm focus:border-primary-500 focus:border-[1px] text-gray-600 text-sm py-2">
                                @error('name')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                                <input type="text" name="username" id="username" value="{{ auth()->user()->username }}"
                                    class="mt-1 block w-full rounded-md bg-slate-50 border-gray-100 shadow-sm focus:border-primary-500 focus:border-[1px] text-gray-600 text-sm py-2">
                                @error('username')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" name="email" id="email" value="{{ auth()->user()->email }}"
                                    class="mt-1 block w-full rounded-md bg-slate-50 border-gray-100 shadow-sm focus:border-primary-500 focus:border-[1px] text-gray-600 text-sm py-2">
                                @error('email')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex justify-end">
                                <button type="submit"
                                    class="text-sm px-4 py-2 bg-primary-600 text-white rounded-md hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- Update Password Section --}}
                <div class="w-full bg-white rounded-lg shadow mb-6 overflow-hidden">
                    <div class="p-6 border-b">
                        <h2 class="text-lg font-medium">Ubah Password</h2>
                        <p class="mt-1 text-sm text-gray-600">Ensure your account is using a secure password.</p>
                    </div>
                    <div class="p-6">
                        <form action="{{ route('dashboard.profile.password') }}" method="POST" class="space-y-6">
                            @csrf
                            @method('PUT')

                            <div>
                                <label for="current_password" class="block text-sm font-medium text-gray-700">Password Saat
                                    Ini</label>
                                <input type="password" name="current_password" id="current_password"
                                    class="mt-1 block w-full rounded-md bg-slate-50 border-gray-100 shadow-sm focus:border-primary-500 focus:border-[1px] text-gray-600 text-sm py-2">
                                @error('current_password')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700">Password Baru</label>
                                <input type="password" name="password" id="password"
                                    class="mt-1 block w-full rounded-md bg-slate-50 border-gray-100 shadow-sm focus:border-primary-500 focus:border-[1px] text-gray-600 text-sm py-2">
                                @error('password')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="password_confirmation"
                                    class="block text-sm font-medium text-gray-700">Konfirmasi
                                    Password Baru</label>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    class="mt-1 block w-full rounded-md bg-slate-50 border-gray-100 shadow-sm focus:border-primary-500 focus:border-[1px] text-gray-600 text-sm py-2">
                            </div>

                            <div class="flex justify-end">
                                <button type="submit"
                                    class="text-sm px-4 py-2 bg-primary-600 text-white rounded-md hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- Your Articles Section --}}
            <div class="bg-white rounded-lg shadow mb-6 overflow-hidden">
                <div class="p-6 border-b">
                    <h2 class="text-lg font-medium">Artikel Anda</h2>
                    <p class="mt-1 text-sm text-gray-600">Artikel yang telah Anda posting.</p>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Title</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Date</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse (auth()->user()->articles as $article)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $article->title }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $article->created_at ? 'bg-primary-100 text-primary-800' : 'bg-yellow-100 text-yellow-800' }}">
                                            {{ $article->created_at ? 'Published' : 'Draft' }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $article->created_at->format('M d, Y') }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <a href="{{ route('dashboard.news.edit', $article) }}"
                                            class="text-primary-600 hover:text-primary-900">Edit</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-4 text-center text-sm text-gray-500">
                                        You haven't posted any articles yet.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>
@endsection
