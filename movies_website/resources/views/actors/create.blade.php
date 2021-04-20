<!doctype html>
<html lang="en">
<head>
    @include('head')
    <title>Create actor</title>
</head>

<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-felx align-items-center">
                        <h2>Create New Actor</h2>
                        <div class="ml-auto">
                            <a href="{{route('actors.index')}}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('actors.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="actor-firstname">Firstname</label>
                        <input type="text" name="firstname" id="actor-firstname" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="actor-lastname">Lastname</label>
                        <input type="text" name="lastname" id="actor-lastname" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="actor-biography">Biography</label>
                        <textarea type="textarea" name="biography" id="actor-biography" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="actor-photo">Photo</label>
                        <input type="file" name="photo" id="actor-photo" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
