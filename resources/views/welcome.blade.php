<!DOCTYPE html>
<html lang="uk">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset ('css/app.css') }}" rel="stylesheet"/>
        <link href="{{ asset ('css/header.css') }}" rel="stylesheet"/>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=ABeeZee&display=swap" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet" />
    </head>
    <body>
    @include('includes/header')
    @yield('content')
    @include('includes/footer')
    </body>
</html>
