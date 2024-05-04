<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Single comic</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
         
    </head>
    <body class="antialiased">
        <div>
            <h1>{{$comic->title}}</h1>
            <img src="{{$comic->cover_image}}" alt="">
        </div>
        
        
    </body>
</html>
