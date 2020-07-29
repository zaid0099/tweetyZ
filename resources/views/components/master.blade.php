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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/customStyle.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">



</head>

<body>
    <div id="app">
        <section class="px-8 py-4 mb-4">
            <header class="container mx-auto">
                <a href="/"><img src="{{asset('images/logo.svg')}}" alt="">
                </a>
            </header>
        </section>

        {{ $slot }}
    </div>

    <script src="http://unpkg.com/turbolinks"></script>
</body>

</html>
