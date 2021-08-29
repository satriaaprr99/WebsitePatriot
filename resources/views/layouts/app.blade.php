<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-mutate-approach="sync"></script>
    <script src="https://kit.fontawesome.com/4ca762900c.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <livewire:styles />
    <livewire:scripts />
</head>
<body>
    <div id="app">
       
        <livewire:navbar />
        <main class="py-4">
            @yield('content')
        </main>

        <div class="container">
        <footer id="footer" class="sticky-footer d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <span class="text-white">© 2021 Patriots Project</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3 pr-2"><a class="text-muted" href="#"><img class="bi" src="assets/img/instagram.png" width="24"></a></li>
                <li class="ms-3 pr-2"><a class="text-muted" href="#"><img class="bi" src="assets/img/facebook.png" width="24"></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><img class="bi" src="assets/img/gmail.png" width="24"></a></li>
            </ul>
        </footer>
        </div>
    </div>
</body>
</html>
