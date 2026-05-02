<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="font-gotham h-full overflow-x-hidden">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body class="min-h-full overflow-x-hidden bg-[#FCF9F2]">
    <x-layouts.header />
    <main class='flex flex-1 flex-col'>{{ $slot }}</main>
    <x-layouts.footer/>
    @livewireScripts
    @fluxScripts
</body>

</html>
