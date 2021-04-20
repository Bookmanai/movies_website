<!doctype html>
<html lang="en">
<head>
    @include('head')
    <title>Edit Tags</title>
</head>

<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-felx align-items-center">
                        <h2>Edit Tag with ID {{$tag->id}}</h2>
                        <div class="ml-auto">
                            <a href="{{route('tags.index')}}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('tags.update', $tag->id)}}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="tag-name">Title</label>
                        <input type="text" name="name" value="{{$tag->name}}" id="tag-title" class="form-control">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
