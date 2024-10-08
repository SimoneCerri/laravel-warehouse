<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Warehouse</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div id="app">
        <main class="">
            @yield('content')
        </main>
    </div>
</body>

</html>
