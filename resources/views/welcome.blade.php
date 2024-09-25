<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Warehouse</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 my_text_for_bg">
                    <div class="min-vh-100 py-5 d-flex flex-column justify-content-center align-items-center">
                        <div class="logo_laravel text-center">
                            <img src="/img/warehouse.png" alt="">
                            <h1 class="display-5 fw-bold">
                                <i class="bi bi-box"></i> Welcome to the Warehouse <i class="bi bi-box"></i>
                            </h1>
                        </div>
                        <p class="col-md-8 fs-4 mt-5 text-center">
                            There is a need for order, especially in the workplace. Let's think for example of a
                            warehouse of a large company, what would happen if there was no management system for
                            resources and materials?
                            <span class="text-danger">Chaos.</span>
                            <br>
                            Here comes the Jr. Web Developer who builds you a management system ad hoc for your company.
                        </p>
                        <a href="https://github.com/SimoneCerri" class="btn btn-primary btn-lg mt-5" type="button"
                            target="_blank">GitHub</a>
                    </div>
                </div>
            </div>

        </div>
    </main>

</body>

</html>
