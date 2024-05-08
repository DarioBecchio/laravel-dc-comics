@extends(layouts.comics.app)

@section('content')
<h1 class="p-3 bg-dark text-white">Properties</h1>
<div class="container min-vh-100 py-5">
   <a class="btn btn-primary rounded-pill position-fixed bottom-0 end-0 m-3" href="{{route(admin.create)}}" role="button">
    <i class="fa fa-plus" aria-hidden="true"></i>
    <span>ADD</span>
   </a>
   <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Cover_image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($comics as $comic)
                <tr class="">
                    <td scope="row">{{$comic->title}}</td>
                    <td><img width="100" src="{{$comic->cover_image}}" alt=""></td>   
                    <td><a href="{{route('comics.show' , $comic)}}">view</a></td>    
                </tr>
            
                @empty
                <tr class="">
                    <td scope="row">Nessun fumetto trovato</td>       
                </tr>
                @endforelse
            </tbody>
        </table>
    </div> 
</div>

@endsection
