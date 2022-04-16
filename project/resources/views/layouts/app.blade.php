<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="/dist/output.css" rel="stylesheet">


        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.2/dist/flowbite.min.css" />

    </head>
    <body class="font-sans">

        @include('includes.header')
        {{-- @include('includes.sidebar') --}}

        <div class="container mx-auto mt-4 p-5 px-20">
            {{ $slot }}
        </div>
        <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
        @livewireScripts
    </body>
</html>
