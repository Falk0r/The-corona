<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>The Corona</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.css" />
    </head>
    <body>
        <div class="container">
            @include('templates.header')
            @include('templates.navbar')
            @yield('contenu')
            @include('templates.footer')
        </div>
    </body>
</html>
