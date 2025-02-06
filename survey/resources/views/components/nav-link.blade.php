@props(['active' => false])
<a {{ $attributes }}class="{{ $active  ? 'rounded-md bg-gray-900 text-white' : 'rounded-md text-gray-300 hover:bg-gray-700 hover:text-white' }}  rounded-md px-3 py-2 text-smfont-medium"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>