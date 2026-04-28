<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="font-gotham">

<head>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta charset='UTF-8'>
    <meta>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" 
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body class="min-h-screen flex bg-[#FCF9F2]">
    <main class='flex flex-1 flex-col'>{{ $slot }}</main>
    @livewireScripts
    @fluxScripts
</body>

</html>

