<!doctype html>
<html lang="en">
<head>
    @include('head')
    <title>Edit Genres</title>
</head>

<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-felx align-items-center">
                        <h2>Edit Genre with ID {{$genre->id}}</h2>
                        <div class="ml-auto">
                            <a href="{{route('genres.index')}}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('genres.update', $genre->id)}}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="tag-name">Title</label>
                        <input type="text" name="name" value="{{$genre->name}}" id="tag-title" class="form-control">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
