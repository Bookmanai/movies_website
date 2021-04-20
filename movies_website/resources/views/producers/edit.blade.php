<!doctype html>
<html lang="en">
<head>
    @include('head')
    <title>Edit Producer</title>
</head>

<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-felx align-items-center">
                        <h2>Edit Producer with ID {{$producer->id}}</h2>
                        <div class="ml-auto">
                            <a href="{{route('producers.index')}}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('producers.update', $producer->id)}}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="producer-firstname">Firstname</label>
                        <input type="text" name="firstname" value="{{$producer->firstname}}" id="producer-firstname" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="producer-nlastame">Lastname</label>
                        <input type="text" name="lastname" value="{{$producer->lastname}}" id="producer-lastname" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="producer-biography">Biography</label>
                        <input type="textarea" name="biography" value="{{$producer->biography}}" id="producer-biography" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="producer-photo">Photo</label>
                        <input type="image" name="photo" value="{{$producer->photo}}" id="producer-photo" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
