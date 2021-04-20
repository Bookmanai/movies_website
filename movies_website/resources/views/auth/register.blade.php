<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="{{ ('css/bootstrap-reboot.min.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ ('css/bootstrap-grid.min.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ ('css/owl.carousel.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ ('css/jquery.mCustomScrollbar.min.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ ('css/nouislider.min.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ ('css/ionicons.min.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ ('css/plyr.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ ('css/photoswipe.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ ('css/default-skin.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ ('css/main.css') }}"/>

    <link rel="icon" type="image/png" href="{{ ('icon/favicon-32x32.png') }}" sizes="32x32">

    <title>FlixGo</title>

</head>
<body class="body">

<div class="sign section--bg" data-bg="img/section/section.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sign__content">

                    <form method="POST" action="{{ route('register') }}" class="sign__form">
                        @csrf
                        <a class="sign__logo">
                            <img src="{{ ('img/logo.svg') }}" alt="">
                        </a>

                        <div class="sign__group">
                            <input id="name" type="text" class="sign__input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name" >
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="sign__group">
                            <input id="email" type="email" class="sign__input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="sign__group">
                            <?php $roles = DB::table('roles')->paginate(3);?>
                                <select name="role_id" id="user-role_id" class="sign__input" >
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                        </div>

                        <div class="sign__group">
                            <input id="cardnumber" type="text" class="sign__input" name="cardnumber" placeholder="Card Number">
                        </div>

                        <div class="sign__group">
                            <input id="password" type="password" class="sign__input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                        </div>

                        <div class="sign__group">
                            <input id="password-confirm" type="password" class="sign__input" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                        </div>

                        <div class="sign__group sign__group--checkbox">
                            <input id="remember" name="remember" type="checkbox" checked="checked">
                            <label for="remember">I agree to the <a href="#">Privacy Policy</a></label>
                        </div>

                        <button class="sign__btn" type="submit">Sign up</button>

                        <span class="sign__text">Already have an account? <a href="{{route('login')}}">Sign in!</a></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{ ('js/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript" src="{{ ('js/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ ('js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ ('js/jquery.mousewheel.min.js') }}"></script>
<script type="text/javascript" src="{{ ('js/jquery.mCustomScrollbar.min.js') }}"></script>
<script type="text/javascript" src="{{ ('js/wNumb.js') }}"></script>
<script type="text/javascript" src="{{ ('js/nouislider.min.js') }}"></script>
<script type="text/javascript" src="{{ ('js/plyr.min.js') }}"></script>
<script type="text/javascript" src="{{ ('js/jquery.morelines.min.js') }}"></script>
<script type="text/javascript" src="{{ ('js/photoswipe.min.js') }}"></script>
<script type="text/javascript" src="{{ ('js/photoswipeuidefault.min.js') }}"></script>
<script type="text/javascript" src="{{ ('js/main.js') }}"></script>
</body>

</html>
