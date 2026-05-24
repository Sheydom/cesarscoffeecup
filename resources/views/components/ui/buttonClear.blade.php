@props(['href' => null])

@if ($href)
    <a href="{{ $href }}"
        {{ $attributes->merge(['class' => 'p-2  bg-transparent border border-white rounded w-full backdrop-blur-sm hover:cursor-pointer text-center shadow-2xl  transition hover:scale-[1.03] duration-300 hover:-translate-y-1']) }}>{{ $slot }}</a>
@else
    <button
        {{ $attributes->merge(['class' => 'p-2  bg-transparent border border-white rounded w-full backdrop-blur-sm hover:cursor-pointer text-center shadow-2xl transition hover:scale-[1.03] duration-300 hover:-translate-y-1']) }}>
        {{ $slot }}</button>
@endif
