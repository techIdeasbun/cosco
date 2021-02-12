<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Cosco') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation')

            
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <footer>
            <div class="footer">
                <div class="copyrights text-center">                    
                    Copyright © 2021 Cosco Ltda. - Buenaventura, Valle Del Cauca. Todos los Derechos Reservados.
                </div>
            </div>
        </footer>
        @stack('modals')

        @livewireScripts
    </body>
</html>
