@extends('layouts.comics.app')

@section('content')
<div class="container">
    <div class="row">
       @forelse($comics as $comic) 
        <div class="col-4">
            <div class="card">
                <img width="500" src="{{$comic->cover_image}}" alt="The comic" class="card-img-top">
                <div class="card-body">
                  <h1>{{$comic->title}}</h1>  
                </div>
                
            </div>
        </div>
        @empty
        <div class="col-12">
            <p>
                Sorry no comics yet
            </p>
        </div>
        @endforelse
    </div>
</div>
@endsection