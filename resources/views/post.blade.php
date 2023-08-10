<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ mix('dist/app.css') }}">

    </head>
    <body class="antialiased">
        <div class="container-fluid">
            <div class="row p-5">
                <div class="col-2">ID post: {{ $post['id'] }}</div>
                <div class="col-2">title post: {{ $post['title'] }}</div>
                <div class="col-2">userId post: {{ $post['userId'] }}</div>
                <div class="col-2">body post: {{ $post['body'] }}</div>
            </div>
        </div>
    </body>
</html>
