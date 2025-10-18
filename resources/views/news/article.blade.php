<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>


    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 antialiased">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex justify-between">
            <article class="w-full lg:w-5/6 pr-8">
                <header class="mb-4 lg:mb-6 not-format">
                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $article->title }}</h1>

                    <address class="flex items-center my-6 not-italic justify-between">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-10 h-10 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                alt="{{ $article->user->name }} avatar" />

                            <div class="flex gap-2 text-gray-500">
                                <a href="/news?user={{ $article->user->username }}" rel="user"
                                    class="">written by {{ $article->user->name }} | </a>

                                <p class="">
                                    {{ $article->created_at->format('d M Y') }} |</p>

                                <a href="/news?category={{ $article->category->slug }}">
                                    <span class="">
                                        {{ $article->category->name }}
                                    </span>
                                </a>
                            </div>
                        </div>
                        @auth
                            <div class="flex justify-end my-2">
                                <a href="{{ route('dashboard.news.edit', $article) }}"
                                    class="flex text-sm text-primary-400 hover:text-blue-700">
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                    </svg>
                                    <span>edit this article</span></a>
                            </div>
                        @endauth
                    </address>



                    <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->title }} thumbnail"
                        loading="lazy" itemprop="image" class="w-full h-auto object-cover rounded-md mb-4">
                </header>

                <div class="prose prose-lg max-w-none">
                    {!! $article->body !!}
                </div>
            </article>
            <div class="border-l border-slate-100 w-1/6 pl-4">
                <div class="sticky top-28">
                    <h2 class="font-bold mb-4">Recent Articles</h2>

                </div>


            </div>


    </main>


</x-layout>
