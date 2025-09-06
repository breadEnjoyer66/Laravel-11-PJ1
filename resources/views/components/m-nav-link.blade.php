@props(['active' => false])
<a {{ $attributes }}
    class="py-2 {{ $active ? 'text-blue-700' : 'hover:bg-neutral-100 text-gray-400 hover:text-blue-700' }} rounded-md px-2 h-full flex items-center text-md font-medium"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
