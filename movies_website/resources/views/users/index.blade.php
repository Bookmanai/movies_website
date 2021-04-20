<!doctype html>
<html lang="en">
<meta name="color-scheme" content="dark light">
<head>
    @include('head')
    {{--    <style>--}}
    {{--        body {--}}
    {{--            background-color: #222222;--}}
    {{--        }--}}
    {{--    </style>--}}
    <script>
        function changeBodyBg(color){
            document.body.style.background = color;
        }
    </script>
    <title>All users</title>
</head>

<body style = "position:absolute; right: 200px; top:2px;">
<br>
<div>
    <label>Change Webpage Background To:</label>
    <button type="button" onclick="changeBodyBg('#222222');">Dark</button>
    <button type="button" onclick="changeBodyBg('White');">White</button>
</div>

<br>
{{--<section class="no-padding-top no-padding-bottom">--}}
{{--    <div class="container-fluid">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-3 col-sm-6">--}}
{{--                <div class="statistic-block block">--}}
{{--                    <div class="progress-details d-flex align-items-end justify-content-between">--}}
{{--                        <div class="title">--}}
{{--                            <div class="icon"><i class="icon-user-1"></i></div><strong>New Users</strong>--}}
{{--                        </div>--}}
{{--                        <div class="number dashtext-1">27</div>--}}
{{--                    </div>--}}
{{--                    <div class="progress progress-template">--}}
{{--                        <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-3 col-sm-6">--}}
{{--                <div class="statistic-block block">--}}
{{--                    <div class="progress-details d-flex align-items-end justify-content-between">--}}
{{--                        <div class="title">--}}
{{--                            <div class="icon"><i class="icon-contract"></i></div><strong>New users</strong>--}}
{{--                        </div>--}}
{{--                        <div class="number dashtext-2">375</div>--}}
{{--                    </div>--}}
{{--                    <div class="progress progress-template">--}}
{{--                        <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-3 col-sm-6">--}}
{{--                <div class="statistic-block block">--}}
{{--                    <div class="progress-details d-flex align-items-end justify-content-between">--}}
{{--                        <div class="title">--}}
{{--                            <div class="icon"><i class="icon-paper-and-pencil"></i></div><strong>New Subscriptions</strong>--}}
{{--                        </div>--}}
{{--                        <div class="number dashtext-3">140</div>--}}
{{--                    </div>--}}
{{--                    <div class="progress progress-template">--}}
{{--                        <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-3 col-sm-6">--}}
{{--                <div class="statistic-block block">--}}
{{--                    <div class="progress-details d-flex align-items-end justify-content-between">--}}
{{--                        <div class="title">--}}
{{--                            <div class="icon"><i class="icon-writing-whiteboard"></i></div><strong>All users</strong>--}}
{{--                        </div>--}}
{{--                        <div class="number dashtext-4">41</div>--}}
{{--                    </div>--}}
{{--                    <div class="progress progress-template">--}}
{{--                        <div role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

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
<br>
<div class="wrapper d-flex align-items-lg-stretch">
    <nav id="sidebar" class="active">
        <div class="p-4">
            <h1><a href="{{route('users.index')}}" class="logo">Menu</a></h1>
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

                <div class="form-group d-flex">
                    <div class="icon"><span class="icon-paper-plane"></span></div>
                    <input id="myInput" type="text" class="form-control" placeholder="Enter...">
                    <script>
                        $(document).ready(function(){
                            $("#myInput").on("keyup", function() {
                                var value = $(this).val().toLowerCase();
                                $("#table tr").filter(function() {
                                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                });
                            });
                        });
                    </script>
                </div>

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
                        <h5>Users</h5>
                    </div>
                    <div class="col-md-12">
                        <table id="table" class="table table-dark table-hover ">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Roles</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>@foreach($user->roles as $role)
                                            <li>{{$role->name}}</li>
                                        @endforeach</td>
                                    <td class="text-center">
                                        <a href="{{ route('users.show', $user->id)}}" class="btn btn-success btn-sm">Read</a>
                                        <a href="{{ route('users.edit', $user->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('users.destroy', $user->id)}}" method="post" style="display: inline-block">
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

    <nav id="sidebar" >
        <div class="p-4 pt-lg-12">
            <h5>Roles</h5>
            <ul class="list-unstyled components mb-5">
                {{--                <li>--}}
                {{--                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Actors</a>--}}
                {{--                    <ul class="collapse list-unstyled" id="pageSubmenu3">--}}
                {{--                        @foreach($actors as $actor)--}}
                {{--                            <li><a class="fa fa-chevron-right mr-2" href="#">{{$actor->lastname}}</a><li>--}}
                {{--                        @endforeach--}}
                {{--                    </ul>--}}
                {{--                </li>--}}
            </ul>
        </div>
    </nav>
</div>



</body>
</html>
