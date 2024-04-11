<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ (auth()->user()->role === 1 ? 'Admin' : auth()->user()->role === 2) ? 'Patient Account' : 'Healthcare' }}
    </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased">


    @include('layouts.navigation')

    <div style="margin-top: 50px;" class="p-5 sm:ml-64 ">
        {{ $slot }}
    </div>

</body>

</html>
