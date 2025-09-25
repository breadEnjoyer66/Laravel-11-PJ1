<div class="grid gap-4 lg:grid-cols-6 md:grid-cols-4 grid-cols-2 mt-10">
    @foreach ($brands as $brand)
        <div class="border border-slate-100 bg-white hover:shadow-md px-5 py-2 rounded-lg">
            <img src="{{ asset('img/brands/' . $brand->file_name) }}" alt="{{ $brand->alt }}"
                class="filter saturate-[.8] hover:saturate-100 opacity-90 hover:opacity-100 hover:scale-105  transition-all duration-200 w-full h-20 object-contain">
        </div>
    @endforeach
</div>
