<!doctype html>
<html lang="en">
<head>
    @include('head')
    <title>All Actors</title>
</head>

<body style = "position:absolute; right: 500px; top:2px;">
<ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
        </a>

        {{--                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        {{--                                </div>--}}
    </li>
</ul>

<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar" class="active">
        <div class="p-4">
            <h1><a href="{{route('actors.index')}}" class="logo">Menu</a></h1>
            <ul class="list-unstyled components mb-5">
                <li class="active">
                    <a href="#"><span class="fa fa-home mr-3"></span>Home</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-user mr-3"></span> About</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-briefcase mr-3"></span>Personal Info</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-sticky-note mr-3"></span> Settings</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-paper-plane mr-3"></span>Contacts</a>
                </li>
            </ul>

            <div class="mb-5">
                <h3 class="h6 mb-3">Search</h3>
                <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                        <div class="icon"><span class="icon-paper-plane"></span></div>
                        <input type="text" class="form-control" placeholder="Enter...">
                    </div>
                </form>
            </div>
        </div>
    </nav>


    <div class="content">
        <div class="container">
            <div class="row">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{session('success')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times</span>
                        </button>
                    </div>
                @endif
            </div>

            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="col-md-12 text-center">
                        <h5>Actors</h5>
                    </div>
                    <div class="col-md-12">
                        <div class="text-center mt-3">
                            <a href="{{route('actors.create')}}" class="btn btn-primary">Add Actor</a>
                        </div>

                        <br>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Firstname</th>
                                <th scope="col">Lastname</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($actors as $actor)
                                <tr>
                                    <td>{{$actor->id}}</td>
                                    <td>{{$actor->firstname}}</td>
                                    <td>{{$actor->lastname}}</td>
                                    <td><img src="{{Storage::url($actor->photo)}}" width="100"></td>
                                    <td class="text-center">
                                        <a href="{{ route('actors.edit', $actor->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('actors.destroy', $actor->id)}}" method="post" style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
