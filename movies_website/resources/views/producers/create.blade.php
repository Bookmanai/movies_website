<!doctype html>
<html lang="en">
<head>
    @include('head')
    <title>Create Producer</title>
</head>

<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-felx align-items-center">
                        <h2>Create New Producer</h2>
                        <div class="ml-auto">
                            <a href="{{route('producers.index')}}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('producers.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="producer-firstname">Firstname</label>
                        <input type="text" name="firstname" id="producer-firstname" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="producer-lastname">Lastname</label>
                        <input type="text" name="lastname" id="producer-lastname" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="producer-biography">Biography</label>
                        <textarea type="textarea" name="biography" id="producer-biography" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="producer-photo">Photo</label>
                        <input type="file" name="photo" id="producer-photo" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
