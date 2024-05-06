@extends(layouts.app)

@section('content')
<div class="container">
    <div class="row">
       @forelse($comics as $comic) 
        <div class="col">
            <div class="card">
                <img src="{{$comic->cover_image}}" alt="The comic" class="card-img-top">
                <h1>{{$comic->title}}</h1>

            </div>
        </div>
        @empty
        <div class="col-12">
            <p>
                Sorry no comics yet
            </p>
        </div>
        @endif
    </div>
</div>
@endsection