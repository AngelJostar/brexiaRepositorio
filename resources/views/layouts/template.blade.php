<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="css/styles.css" />
        <link rel="stylesheet" href="css/normalize.css" />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,700;1,800&display=swap" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body class="fuente">
        
        <div>
        @include("layouts.cabecera")
        @yield("header")
        </div>

    </body>
</html>
