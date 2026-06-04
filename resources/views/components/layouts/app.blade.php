@php
    $metaTitle = $metaTitle ?? "Cesar's Coffee Cup";
    $metaDescription = $metaDescription ?? 'Specialty coffee roaster in Melbourne';
    $ogTitle = $ogTitle ?? $metaTitle;
    $ogDescription = $ogDescription ?? $metaDescription;
    $ogImage = $ogImage ?? asset('images/Cesars_Coffee_Cup_just_face.svg');
    $ogUrl = $ogUrl ?? url()->current();
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="font-gotham h-full overflow-x-hidden">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="icon" type="image/png" href="{{ asset('images/Cesars_Coffee_Cup_just_face_black.png') }}">

    <meta property="og:type" content="website">

    <link rel="canonical" href="{{ $ogUrl }}">
    <title>{{ $metaTitle }}</title>

    <meta name="description" content="{{ $metaDescription  }}">

    <meta property="og:title" content="{{ $ogTitle }}">

    <meta property="og:description" content="{{ $ogDescription  }}">

    <meta property="og:image" content="{{ $ogImage }}">

    <meta property="og:url" content="{{ $ogUrl }}">

    <meta name="twitter:card" content="summary_large_image">

    <meta name="twitter:title" content="{{ $ogTitle }}">

    <meta name="twitter:description" content="{{ $ogDescription }}">

    <meta name="twitter:image" content="{{ $ogImage }}">
</head>

<body class="min-h-full flex flex-col overflow-x-hidden bg-[#FCF9F2]">
    <x-layouts.header />
    <main class='flex flex-1 flex-col'>{{ $slot }}</main>
    <x-layouts.footer />
    @livewireScripts
    @fluxScripts
</body>

</html>
