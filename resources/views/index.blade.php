<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href={{asset('img/gvclogo.png')}} sizes="16x16">
        <link rel="stylesheet" href={{asset('css/bootstrap.min.css')}}>
        <link rel="stylesheet" href={{asset('css/styles.css')}}>
        <link rel="stylesheet" href={{asset('css/media-queries.css')}}>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Ubuntu" rel="stylesheet">
        <script src={{asset('js/jquery.js')}}></script>
        <script src={{asset('js/bootstrap.min.js')}}></script>
        <title>Greenvile College Library</title>
    </head>
    <body>
        @include('partials.navbar')
        <div class="wrapper">
            @yield('content')
        </div>
    </body>
</html>
