<html>
<head>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="/dist/output.css" rel="stylesheet">
    @livewireStyles
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.1/dist/flowbite.min.css" />

</head>
<body>

    @include('includes.header')
    <div class="container mx-auto mt-4 px-20">
        {{ $slot }}
    </div>

    @livewireScripts
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>

</body>
</html>