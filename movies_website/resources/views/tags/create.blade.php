<!doctype html>
<html lang="en">
<head>
    @include('head')
    <title>Create Tags</title>
</head>

<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-felx align-items-center">
                        <h2>Create New Tag</h2>
                        <div class="ml-auto">
                            <a href="{{route('tags.index')}}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('tags.store')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="tag-name">Name</label>
                        <input type="text" name="name" id="tag-name" class="form-control">
                    </div>

{{--                    <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}" class="form-control">--}}

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
