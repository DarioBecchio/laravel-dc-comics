@section('content')


<body>
    <div class="container">
        <h1>Edit:{{$comic->title}}</h1>
        <form action="{{route('comics.update', $comic)}}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input
                    type="text"
                    class="form-control"
                    name="title"
                    id="title"
                    aria-describedby="titlehelper"
                    placeholder="title here"
                    value="{{$comic->title}}"
                />
                <small id="helpId" class="form-text text-muted">type the new Comic title here</small>
            </div>

            <div class="d-flex gap-2">
                <img width="200" class="img-fluid" src="{{$comic->cover_image}}" alt="">
                <div class="mb-3">
                    <label for="cover_image" class="form-label w-100">Image URL</label>
                    <input
                        type="cover_image"
                        class="form-control"
                        name="cover_image"
                        id="cover_image"
                        aria-describedby="cover_imagehelper"
                        placeholder="URL here"
                        value="{{$comic->cover_image}}"
                    />
                    <small id="helpId" class="form-text text-muted">type the new URL here</small>
                </div>
            </div>
            

            <button type="submit" class="btn btn-dark">Create</button>
        </form>
</div>

</body>
</html>


