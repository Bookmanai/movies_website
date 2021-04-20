<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plyr.css') }}">
    <link rel="stylesheet" href="{{ asset('css/photoswipe.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default-skin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <link rel="icon" type="image/png" href="{{ ('icon/favicon-32x32.png') }}" sizes="32x32">

    <title>FlixGo</title>

</head>
<body class="body">

<!-- header -->
<header class="header">
    <div class="header__wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header__content">

                        <a class="header__logo">
                            <img src="{{ asset('img/logo.svg') }}" alt="">
                        </a>
                        <ul class="header__nav">
                            <li class="header__nav-item">
                                <a href="{{route('pricing')}}" class="header__nav-link">Pricing Plan</a>
                            </li>
                            <li class="header__nav-item">
                                <a href="{{route('faq')}}" class="header__nav-link">Help</a>
                            </li>
                        </ul>

                        <div class="header__auth">
                            <a href="{{ route('logout') }}" class="header__sign-in" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <i class="icon ion-ios-log-in"></i>
                                <span>sign out</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="section details">

    <div class="details__bg" data-bg="{{ ('img/home/home__bg.jpg') }}"></div>

    <div class="container">
        <div class="row">

            <div class="col-12">
                <h1 class="details__title">{{$movie->title}}</h1>
            </div>

            <div class="col-12 col-xl-6">
                <div class="card card--details">
                    <div class="row">

                        <div class="col-12 col-sm-4 col-md-4 col-lg-3 col-xl-5">
                            <div class="card__cover">
                                <img src="{{Storage::url($movie->poster)}}" alt="">
                            </div>
                        </div>

                        <div class="col-12 col-sm-8 col-md-8 col-lg-9 col-xl-7">
                            <div class="card__content">
                                <div class="card__wrap">
                                    <span class="card__rate"><i class="icon ion-ios-star"></i>{{$movie->rating}}</span>
                                    <ul class="card__list">
                                        <li>HD</li>
                                    </ul>
                                </div>

                                <ul class="card__meta">
                                    <li><span>Genre:</span>
                                    @foreach($movie->genres as $genre)
                                        <a>{{$genre->name}}</a>
                                    @endforeach
                                    </li>
                                    <li><span>Release year:</span> {{substr($movie->release_date, 0, 4)}}</li>
                                    <li><span>Running time:</span> {{$movie->runtime}}</li>
                                    <li><span>Producer:</span>{{$movie->producer->firstname}} {{$movie->producer->lastname}}</li>
                                </ul>
                                <div class="card__description card__description--details">
                                    {{$movie->description}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-6">
                <iframe width="520" height="345" src="{{$movie->video}}"></iframe>
            </div>

            <div class="col-12">
                <div class="details__wrap">

                    <div class="details__devices">
                        <span class="details__devices-title">Available on devices:</span>
                        <ul class="details__devices-list">
                            <li><i class="icon ion-logo-apple"></i><span>IOS</span></li>
                            <li><i class="icon ion-logo-android"></i><span>Android</span></li>
                            <li><i class="icon ion-logo-windows"></i><span>Windows</span></li>
                            <li><i class="icon ion-md-tv"></i><span>Smart TV</span></li>
                        </ul>
                    </div>

                    <div class="details__share">
                        <span class="details__share-title">Share with friends:</span>
                        <ul class="details__share-list">
                            <li class="facebook"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
                            <li class="instagram"><a href="#"><i class="icon ion-logo-instagram"></i></a></li>
                            <li class="twitter"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
                            <li class="vk"><a href="#"><i class="icon ion-logo-vk"></i></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<footer class="footer">
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-3">
                <h6 class="footer__title">Download Our App</h6>
                <ul class="footer__app">
                    <li><a href="#"><img src="{{ asset('img/Download_on_the_App_Store_Badge.svg') }}" alt=""></a></li>
                    <li><a href="#"><img src="{{ asset('img/google-play-badge.png') }}" alt=""></a></li>
                </ul>
            </div>

            <div class="col-6 col-sm-4 col-md-3">
                <h6 class="footer__title">Resources</h6>
                <ul class="footer__list">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Pricing Plan</a></li>
                    <li><a href="#">Help</a></li>
                </ul>
            </div>

            <div class="col-6 col-sm-4 col-md-3">
                <h6 class="footer__title">Legal</h6>
                <ul class="footer__list">
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Security</a></li>
                </ul>
            </div>

            <div class="col-12 col-sm-4 col-md-3">
                <h6 class="footer__title">Contact</h6>
                <ul class="footer__list">
                    <li><a href="tel:+18002345678">+1 (800) 234-5678</a></li>
                    <li><a href="mailto:support@moviego.com">support@flixgo.com</a></li>
                </ul>
                <ul class="footer__social">
                    <li class="facebook"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
                    <li class="instagram"><a href="#"><i class="icon ion-logo-instagram"></i></a></li>
                    <li class="twitter"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
                    <li class="vk"><a href="#"><i class="icon ion-logo-vk"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.mousewheel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.mCustomScrollbar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/wNumb.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/nouislider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plyr.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.morelines.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/photoswipe.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/photoswipe-ui-default.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>

</html>
