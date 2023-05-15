<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="icon" href="{{ asset('img/icono.png') }} " type="image/ico" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('css/custom2.css') }}">

        <!-- Scripts -->
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
        {{-- <script src="https://kit.fontawesome.com/098c4b6e65.js" crossorigin="anonymous"></script> --}}
        <script defer src="https://kit.fontawesome.com/098c4b6e65.js" crossorigin="anonymous"></script>
        <script src="{{ mix('js/app.js') }}" defer></script>
        @livewireStyles
    </head>
    <body>

        {{ $slot }}
        @livewireScripts

        @stack('scripts')
    </body>
</html>
