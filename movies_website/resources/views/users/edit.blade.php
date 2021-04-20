<!doctype html>
<html lang="en">
<head>
    @include('head')

    <title>Edit Users</title>
</head>

<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-felx align-items-center">
                        <h2>Edit User with ID {{$user->id}}</h2>
                        <div class="ml-auto">
                            <a href="{{route('users.index')}}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('users.update', $user->id)}}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="user-name">Name</label>
                        <input type="text" name="name" value="{{$user->name}}" id="user-name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="user-email">Email</label>
                        <input type="text" name="email" value="{{$user->email}}" id="user-email" class="form-control">
                    </div>

                    <label for="movie-role">Role</label>
                        @foreach($roles as $role)
                            <div class="form-check">
                                <input type="checkbox" name="roles[]" value="{{$role->id}}"
                                {{$user->hasAnyRole($role->name)?'checked':''}}>
                                <label>{{$role->name}}</label>
                            </div>
                        @endforeach
                    <br>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
