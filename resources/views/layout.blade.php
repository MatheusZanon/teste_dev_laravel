<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Teste API Laravel 8</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <main>
            @yield('content')
        </main>


    </body>
</html>
