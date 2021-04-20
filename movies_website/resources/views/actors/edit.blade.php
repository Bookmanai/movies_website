<!doctype html>
<html lang="en">
<head>
    @include('head')
    <title>Edit Actors</title>
</head>

<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-felx align-items-center">
                        <h2>Edit Actor with ID {{$actor->id}}</h2>
                        <div class="ml-auto">
                            <a href="{{route('actors.index')}}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('actors.update', $actor->id)}}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="actor-firstname">Firstname</label>
                        <input type="text" name="firstname" value="{{$actor->firstname}}" id="actor-firstname" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="actor-nlastame">Lastname</label>
                        <input type="text" name="lastname" value="{{$actor->lastname}}" id="actor-lastname" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="actor-biography">Biography</label>
                        <input type="textarea" name="biography" value="{{$actor->biography}}" id="actor-biography" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="actor-photo">Photo</label>
                        <input type="image" name="photo" value="{{$actor->photo}}" id="actor-photo" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
