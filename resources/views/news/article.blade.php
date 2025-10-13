<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>


    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 antialiased">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex justify-between">
            <article class="w-full lg:w-5/6 px-2">
                <header class="mb-4 lg:mb-6 not-format">
                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $article->title }}</h1>

                    <address class="flex items-center my-6 not-italic">
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
                    </address>

                    <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->title }} thumbnail"
                        loading="lazy" itemprop="image" class="w-full h-96 object-cover rounded-md mb-4">
                </header>

                {!! $article->body !!}
            </article>
            <div class="border-l border-slate-100 w-1/6 px-2">
                <div class="sticky top-28">
                    <h2 class="font-bold mb-4">Recent Articles</h2>

                </div>


            </div>


    </main>


</x-layout>
