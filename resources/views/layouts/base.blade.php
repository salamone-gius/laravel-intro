<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- @yeld = segnaposto: fa sì che possiamo rimpiazzare dinamicamente quelle parti--}}
        <title>@yield('title')</title>
        @yield('head-scripts')
    </head>
    <body>
        {{-- include parte sempre dalla cartella views --}}
        @include('partials.header')
        <main>
            @yield('page-content')
        </main>
    </body>
</html>