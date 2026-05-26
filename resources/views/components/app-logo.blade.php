@props([
    'sidebar' => false,
])

@if($sidebar)
    <flux:sidebar.brand name="Laravel Starter Kit" {{ $attributes }}>
        <x-slot name="logo" class="flex aspect-square size-8 items-center justify-center rounded-md bg-accent-content text-accent-foreground">
             <x-app-logo-icon class="size-5 fill-current text-black dark:text-white" />
            {{-- <img src="{{asset('images/Cesars_Coffee_Cup_just_face.png')}}" alt="Cesars Coffe Cup Logo"> --}}
        </x-slot>
    </flux:sidebar.brand>
@else
    <flux:brand name="Laravel Starter Kit" {{ $attributes }}>
        <x-slot name="logo" class="flex aspect-square size-8 items-center justify-center rounded-md bg-accent-content text-accent-foreground">
            <x-app-logo-icon class="size-10 fill-current text-black dark:text-white" /> 
            {{-- <img src="{{asset('images/Cesars_Coffee_Cup_just_face.png')}}" alt="Cesars Coffe Cup Logo"> --}}
        </x-slot>
    </flux:brand>
@endif
