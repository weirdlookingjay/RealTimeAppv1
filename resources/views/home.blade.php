<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="/css/app.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
        <title>SandBox</title>

    </head>
    <body>
        <div id="app">
            <v-app>
                <app-home></app-home>
            </v-app>
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
