@extends('dashboard.layouts.dashboard')

@section('content')
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">

        {{-- Flash messages are shown via global toast in the layout --}}

        <div class="flex items-center mb-4">
            <div class="mr-2">
                <h2 class="font-semibold text-2xl">News</h2>
            </div>
            <div>
                <a href="{{ route('dashboard.news.create') }}"
                    class="p-2 bg-slate-100 hover:bg-gray-200 border rounded-md text-primary-500 border-primary-400 text-sm">
                    Add Article
                </a>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 relative sm:rounded-lg overflow-hidden border">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                <div class="w-full md:w-1/2">
                    <form class="flex items-center">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="text" id="simple-search"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                placeholder="Search">
                        </div>
                    </form>
                </div>
            </div>

            {{-- Articles Table --}}
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 table-auto">
                    <thead class="text-sm text-gray-700 bg-gray-50">
                        <tr>
                            <th scope="col" class="px-4 py-3 font-normal">Title</th>

                            <th scope="col" class="px-4 py-3 font-normal">Author</th>
                            <th scope="col" class="px-4 py-3 font-normal">Category</th>
                            <th scope="col" class="px-4 py-3 font-normal">Publish Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($articles as $article)
                            <tr class="border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-4 py-3 font-medium text-slate-800 whitespace-nowrap dark:text-white">
                                    {{ $article->title }}<br>
                                    <div class="inline-flex space-x-2 items-center text-xs font-normal ">
                                        <a href="{{ route('news.show', $article->slug) }}"
                                            class="text-primary-400 hover:text-primary-600">View</a>
                                        <a href="{{ route('dashboard.news.edit', $article->slug) }}"
                                            class="text-primary-400 hover:text-primary-600">Edit</a>
                                        <form action="{{ route('dashboard.news.destroy', $article->slug) }}" method="POST"
                                            onsubmit="return confirm('Delete this article?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="text-primary-400 hover:text-red-600">Delete</button>
                                        </form>
                                    </div>

                                </th>

                                <td class="px-4 py-3">
                                    {{ $article->user->name ?? '—' }}
                                </td>
                                <td class="px-4 py-3">
                                    {{ $article->category->name ?? 'Uncategorized' }}
                                </td>
                                <td class="px-4 py-3">
                                    {{ $article->created_at->format('d M Y') }}
                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-6 text-gray-400">No articles found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- Pagination --}}
            @if ($articles instanceof \Illuminate\Pagination\LengthAwarePaginator)
                <div class="p-4">
                    {{ $articles->links() }}
                </div>
            @endif
        </div>
    </section>
@endsection
