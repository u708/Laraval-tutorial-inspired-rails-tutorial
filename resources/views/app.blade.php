<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title') | Laravel Tutorial Sample App</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" media="all">
    </head>
    <body>
        <h1>Sample App</h1>
        @yield('body')
    </body>
</html>
