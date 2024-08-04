<!DOCTYPE html>
<html>
<head>
    <title>Laravel with Livewire</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    @vite('resources/css/app.css')   
    @livewireStyles
</head>
<body class="fit-width" style="overflow: auto;">
    @yield('content')

    @livewireScripts
    @vite('resources/js/app.js')
</body>
</html>
