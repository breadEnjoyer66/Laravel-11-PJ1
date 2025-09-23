<div class="bg-gradient-to-t from-gray-50 to-white py-8 md:py-14">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mb-20">
        <h2 class="mb-4 text-4xl font-bold text-gray-900 dark:text-white">Our Brand Partner</h2>
        <p class="text-gray-500 sm:text-lg dark:text-gray-400">With over 18 years of experience, PT. Primajaya
            Multi Technology has proven its expertise in delivering IT business solutions by partnering with top and
            leading companies.
        </p>

        <div class="py-4 my-4 mx-auto max-w-7xl lg:py-4">
            <div class="grid gap-4 lg:grid-cols-6 md:grid-cols-4 grid-cols-2">
                @foreach ($brands as $brand)
                    <div class="border border-slate-100 bg-white hover:shadow-md px-5 py-2 rounded-lg">
                        <img src="{{ asset('img/brands/' . $brand->file_name) }}" alt=""
                            class="filter saturate-[.8] hover:saturate-100 opacity-90 hover:opacity-100 hover:scale-105  transition-all duration-200 w-full h-20 object-contain">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
