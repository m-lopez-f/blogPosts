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
            @foreach ($posts as $post)
                <div class="row p-5">
                    <div class="col-2">ID post: {{ $post['id'] }}</div>
                    <div class="col-2">title post: {{ $post['title'] }}</div>
                    <a href="/post/{{$post['id']}}" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Link to Post</a>
                </div>
            @endforeach
        </div>
    </body>
</html>
