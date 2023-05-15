<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="{{ asset('img/icono.png') }} " type="image/ico" />

    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet"> --}}

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @stack('styles')
    @livewireStyles

</head>

<body class="nav-md">
    <div class="container body ">
        <div class="main_container">
            {{-- <x-jet-banner /> --}}

            @include('layouts/menus')
            @livewire('navigation-menu')
            <!-- Page Content -->
            {{-- <main class=""> --}}
            {{ $slot }}
            {{-- </main> --}}
            @include('layouts/footer')
            @stack('modals')


            @livewireScripts

            @stack('scripts')
        </div>
    </div>
</body>
<!-- Scripts -->

<script defer src="https://kit.fontawesome.com/098c4b6e65.js" crossorigin="anonymous"></script>
<script defer src="{{ mix('js/app.js') }}"></script>
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script> --}}
</html>
