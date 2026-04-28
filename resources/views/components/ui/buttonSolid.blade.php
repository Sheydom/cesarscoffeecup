@props(['href' => null])

@if ('href')
    <a href="{{ $href }}"
        {{ $attributes->merge(['class' => ' bg-primary p-2 rounded w-full hover:cursor-pointer text-center']) }}>{{ $slot }}</a>
@else
    <button
        {{ $attributes->merge(['class' => ' bg-primary p-2 rounded w-full hover:cursor-pointer text-center']) }}>{{ $slot }}</button>
@endif
