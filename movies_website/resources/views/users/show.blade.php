<!doctype html>
<html lang="en">
<head>
    @include('head')
    <title>Details</title>
</head>

<body>

<div class="content">
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="col-md-12 text-center">
                    <h5>Info about User with ID: {{$user->id}}</h5>
                </div>

                    <div class="col-md-6 offset-3 mt-5">
                        <b>Name:</b> {{$user->name}}
                    </div>

                    <div class="col-md-6 offset-3 mt-5">
                        <b>Email:</b> {{$user->email}}
                    </div>

                    <div class="col-md-6 offset-3 mt-5">
                        <b>Roles:</b>
                        <ul>
                            @foreach($user->roles as $role)
                                <li>{{$role->name}}</li>
                            @endforeach
                        </ul>
                    </div>

                <p class="text-center mt-5">
                    <a href="{{route('users.index')}}" class="btn btn-primary">Back</a>
                </p>
            </div>
        </div>
    </div>
</div>

</body>

</html>


