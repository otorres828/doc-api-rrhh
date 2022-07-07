<!DOCTYPE html>
<html lang="es " class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">    
    @yield('css')
    <title>@yield('title')</title>
    @livewireStyles

</head>
<body >

    @yield('main')
    <script src="{{ mix('js/app.js') }}"></script>
    @yield('js')
    @livewireScripts
</body>
</html>