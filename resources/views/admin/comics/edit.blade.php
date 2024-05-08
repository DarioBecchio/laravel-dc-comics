@section('content')

@dd($comics)
<body>
    <div class="container">
    <form action="{{route('comics.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input
                type="text"
                class="form-control"
                name="title"
                id="title"
                aria-describedby="titlehelper"
                placeholder="title here"
            />
            <small id="helpId" class="form-text text-muted">type a new Comic title here</small>
        </div>
        <div class="mb-3">
            <label for="cover_image" class="form-label">Image URL</label>
            <input
                type="cover_image"
                class="form-control"
                name="cover_image"
                id="cover_image"
                aria-describedby="cover_imagehelper"
                placeholder="URL here"
            />
            <small id="helpId" class="form-text text-muted">type an image URL here</small>
        </div>

        <button type="submit" class="btn btn-dark">Create</button>
    </form>
</div>

</body>
</html>

