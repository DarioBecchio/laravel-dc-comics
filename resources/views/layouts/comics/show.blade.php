@extends('layouts.comics.app')


@section('content')

<div class="p-5 mb-4 bg-light rounded-3" style="background-image: url({{$comics->cover_image}}); min-height: 70vh; background-repeat: no-repeat; background-attachment: fixed; background-size: cover">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Custom jumbotron</h1>
        <p class="col-md-8 fs-4">
            Using a series of utilities, you can create this jumbotron, just
            like the one in previous versions of Bootstrap. Check out the
            examples below for how you can remix and restyle it to your liking.
        </p>
        <button class="btn btn-primary btn-lg" type="button">
            Example button
        </button>
    </div>
</div>
<div class="container">

    <div class="row">
        <div class="col">
            <img class="img-fluid" src="{{$comics->cover_image}}" alt="">
        </div>
        <div class="col">
            

            <div class="meta">
                <div>ref no. {{$house->title}}</div>
            </div>
            <hr>
            
        </div>
    </div>
</div>
@endsection