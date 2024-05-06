<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a new comic</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<body>
    <div class="container">
    <form action="{{route('comics.store')}}" method="post">
        @crsf
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


