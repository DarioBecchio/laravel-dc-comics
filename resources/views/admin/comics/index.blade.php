<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Comics</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
         
    </head>
    <body class="antialiased">
        @foreach ($comics as $comic)
        <div>
            <h1>{{$comic->title}}</h1>
            <a href="{{route('comics.show' , $comic)}}">view comic</a>
            <img src="{{$comic->cover_image}}" alt="">
        </div>
        
        @endforeach
        
        <a
            name=""
            id=""
            class="btn btn-primary"
            href="#"
            role="button"
            ><i class="fa-solid fa-circle-plus"></i></a
        >
        
    </body>
</html>
