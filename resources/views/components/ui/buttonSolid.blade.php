@props(['href' => null])

@if ($href)
    <a href="{{ $href }}"
        {{ $attributes->merge(['class' => ' bg-primary p-2 rounded w-full hover:cursor-pointer text-center  transition hover:scale-[1.03] duration-300 hover:-translate-y-1']) }}>{{ $slot }}</a>
@else
    <button
        {{ $attributes->merge(['class' => ' bg-primary p-2 rounded w-full hover:cursor-pointer text-center  transition hover:scale-[1.03] duration-300 hover:-translate-y-1']) }}>{{ $slot }}</button>
@endif
