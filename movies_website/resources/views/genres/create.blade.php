<!doctype html>
<html lang="en">
<head>
    @include('head')
    <title>Create Genre</title>
</head>

<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-felx align-items-center">
                        <h2>Create New Genre</h2>
                        <div class="ml-auto">
                            <a href="{{route('genres.index')}}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('genres.store')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="genre-name">Name</label>
                        <input type="text" name="name" id="genre-name" class="form-control">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
