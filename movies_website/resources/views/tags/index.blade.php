<!doctype html>
<html lang="en">
<head>
    @include('head')
    <title>All Tags</title>
</head>

<body style = "position:absolute; right: 500px; top:2px;">

<div class="wrapper d-flex ">
    <nav id="sidebar" class="active">
        <div class="p-4">
            <h1><a href="{{route('tags.index')}}" class="logo">Menu</a></h1>
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


    <div class="content; position:absolute; right: 500px; top:2px;">
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
                        <h5>Tags</h5>
                    </div>
                    <div class="col-md-12">
                        <div class="text-center mt-3">
                            <a href="{{route('tags.create')}}" class="btn btn-primary">Add Tag</a>
                        </div>

                        <br>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tags as $tag)
                                <tr>
                                    <td>{{$tag->id}}</td>
                                    <td>{{$tag->name}}</td>
                                    <td class="text-center">
                                        <a href="{{ route('tags.edit', $tag->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('tags.destroy', $tag->id)}}" method="post" style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="text-left mt-3">
                            <a href="{{route('movies.index')}}" class="btn btn-danger">Back</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
