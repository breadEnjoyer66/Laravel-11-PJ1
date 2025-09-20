@props(['active' => false])
<a {{ $attributes }}
    class="pt-1 {{ $active ? 'border-b-2 border-blue-700 text-blue-700' : 'text-gray-700 hover:text-blue-700 border-b-2 hover:border-b-2 border-b-white hover:border-b-gray-300' }} px-2 h-full flex items-center text-sm"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
