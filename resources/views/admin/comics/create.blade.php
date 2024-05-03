@extends('index.blade.php')

@section('pageTitle', 'Create a new comic')

@section ('content')

<div class="container">
    <form action="" method="post">
        @crsf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input
                type="text"
                class="form-control"
                name="title"
                id="title"
                aria-describedby="helpId"
                placeholder="type a new Comic title here"
            />
            <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="mb-3">
            <label for="cover_image" class="form-label">Image URL</label>
            <input
                type="cover_image"
                class="form-control"
                name="cover_image"
                id="cover_image"
                aria-describedby="helpId"
                placeholder="type an image URL here"
            />
            <small id="helpId" class="form-text text-muted">Help text</small>
        </div>

    </form>
</div>

@endsection