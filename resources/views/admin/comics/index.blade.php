

@section('content')

<div
    class="table-responsive"
>
    <table
        class="table table-primary"
    >
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
@endsection
