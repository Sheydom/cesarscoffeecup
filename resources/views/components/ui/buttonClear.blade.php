@props(['href' => null])

@if ('href')
    <a href="{{ $href }}"
        {{ $attributes->merge(['class' => 'p-2  bg-transparent border border-white rounded w-full backdrop-blur-sm hover:cursor-pointer text-center']) }}>{{ $slot }}</a>
@else
    <button
        {{ $attributes->merge(['class' => 'p-2  bg-transparent border border-white rounded w-full backdrop-blur-sm hover:cursor-pointer text-center']) }}>
        {{ $slot }}</button>
@endif
