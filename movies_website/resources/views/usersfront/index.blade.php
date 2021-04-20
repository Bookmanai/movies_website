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

<header class="header">
    <div class="header__wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header__content">
                        <a class="header__logo">
                            <img src="{{ ('img/logo.svg') }}" alt="">
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
                            <button class="header__search-btn" type="button">
                                <i class="icon ion-ios-search"></i>
                            </button>

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

    <form action="#" class="header__search">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header__search-content">
                        <input type="text" placeholder="Search for a movie, TV Series that you are looking for">
                        <button type="button">search</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

</header>

<section class="home home--bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="home__title"><b>UPCOMING MOVIES</b> OF THIS SEASON</h1>
                <button class="home__nav home__nav--prev" type="button">
                    <i class="icon ion-ios-arrow-round-back"></i>
                </button>
                <button class="home__nav home__nav--next" type="button">
                    <i class="icon ion-ios-arrow-round-forward"></i>
                </button>
            </div>
            <?php
            if (Auth::user()->hasAnyRole('Basic')) {
                $new_movies = DB::table('movies')->where('release_date','>',date('Y-m-d H:i:s'))->paginate(5);
            }

            if (Auth::user()->hasAnyRole('Premium')) {
                $new_movies = DB::table('movies')->where('release_date','>',date('Y-m-d H:i:s'))->paginate(10);
            }

            if (Auth::user()->hasAnyRole('Cinematic')) {
                $new_movies = DB::table('movies')->where('release_date','>',date('Y-m-d H:i:s'))->paginate(15);
            }
            ?>

            <div class="col-12">
                <div class="owl-carousel home__carousel">
                    @foreach($new_movies as $new_movie)
                    <div class="item">
                        <div class="card card--big">
                            <div class="card__cover">
                                <img src="{{Storage::url($new_movie->poster)}}" width="300" height="400">
                                <a href="/movies/{{$new_movie->id}}" class="card__play">
                                    <i class="icon ion-ios-play"></i>
                                </a>
                            </div>
                            <div class="card__content">
                                <h3 class="card__title"><a href="/movies/{{$new_movie->id}}">{{$new_movie->title}}</a></h3>
                                <span class="card__rate"><i class="icon ion-ios-star"></i>{{$new_movie->rating}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="content__head">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <h2 class="content__title">New content</h2>

                    <ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">MOST POPULAR</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">MOVIES</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">TV SERIES</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">OSCAR NOMINEES</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-5" role="tab" aria-controls="tab-5" aria-selected="false">CHRISTMAS</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="tab-content" id="myTabContent">

            <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">

                    <?php
                    if (Auth::user()->hasAnyRole('Basic')) {
                        $rating_movies = DB::table('movies')->where('rating','>','8')->paginate(5);
                    }

                    if (Auth::user()->hasAnyRole('Premium')) {
                        $rating_movies = DB::table('movies')->where('rating','>','8')->paginate(10);
                    }

                    if (Auth::user()->hasAnyRole('Cinematic')) {
                        $rating_movies = DB::table('movies')->where('rating','>','8')->paginate(15);
                    }
                    ?>
                        <div class="col-12">
                            <button class="home__nav home__nav--prev" type="button">
                                <i class="icon ion-ios-arrow-round-back"></i>
                            </button>
                            <button class="home__nav home__nav--next" type="button">
                                <i class="icon ion-ios-arrow-round-forward"></i>
                            </button>
                        </div>
                        <div class="col-12">
                            <div class="owl-carousel home__carousel">
                                @foreach($rating_movies as $rating_movie)
                                    <div class="item">
                                        <div class="card card--big">
                                            <div class="card__cover">
                                                <img src="{{Storage::url($rating_movie->poster)}}" width="150" height="350">
                                                <a href="/movies/{{$rating_movie->id}}" class="card__play">
                                                    <i class="icon ion-ios-play"></i>
                                                </a>
                                            </div>
                                            <div class="card__content">
                                                <h3 class="card__title"><a href="/movies/{{$rating_movie->id}}">{{$rating_movie->title}}</a></h3>
                                                <span class="card__rate"><i class="icon ion-ios-star"></i>{{$rating_movie->rating}}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
            </div>

            <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab">
                <div class="row">
                    <?php
                    if (Auth::user()->hasAnyRole('Basic')) {
                        $movies = DB::table('movies')->paginate(5);
                    }

                    if (Auth::user()->hasAnyRole('Premium')) {
                        $movies = DB::table('movies')->paginate(10);
                    }

                    if (Auth::user()->hasAnyRole('Cinematic')) {
                        $movies = DB::table('movies')->paginate(15);
                    }
                    ?>
                        <div class="col-12">
                            <button class="home__nav home__nav--prev" type="button">
                                <i class="icon ion-ios-arrow-round-back"></i>
                            </button>
                            <button class="home__nav home__nav--next" type="button">
                                <i class="icon ion-ios-arrow-round-forward"></i>
                            </button>
                        </div>
                        <div class="col-12">
                            <div class="owl-carousel home__carousel">
                                @foreach($movies as $movie)
                                    <div class="item">
                                        <div class="card card--big">
                                            <div class="card__cover">
                                                <img src="{{Storage::url($movie->poster)}}" width="150" height="350">
                                                <a href="/movies/{{$movie->id}}" class="card__play">
                                                    <i class="icon ion-ios-play"></i>
                                                </a>
                                            </div>
                                            <div class="card__content">
                                                <h3 class="card__title"><a href="/movies/{{$movie->id}}">{{$movie->title}}</a></h3>
                                                <span class="card__rate"><i class="icon ion-ios-star"></i>{{$movie->rating}}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                </div>
            </div>

            <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="3-tab">
                <div class="row">
                    <?php
                    if (Auth::user()->hasAnyRole('Basic')) {
                        $shows = DB::table('shows')->paginate(5);
                    }

                    if (Auth::user()->hasAnyRole('Premium')) {
                        $shows = DB::table('shows')->paginate(10);
                    }

                    if (Auth::user()->hasAnyRole('Cinematic')) {
                        $shows = DB::table('shows')->paginate(15);
                    }
                    ?>

                        <div class="col-12">
                            <button class="home__nav home__nav--prev" type="button">
                                <i class="icon ion-ios-arrow-round-back"></i>
                            </button>
                            <button class="home__nav home__nav--next" type="button">
                                <i class="icon ion-ios-arrow-round-forward"></i>
                            </button>
                        </div>
                        <div class="col-12">
                            <div class="owl-carousel home__carousel">
                                @foreach($shows as $show)
                                    <div class="item">
                                        <div class="card card--big">
                                            <div class="card__cover">
                                                <img src="{{Storage::url($show->poster)}}" width="150" height="350">
                                                <a href="/movies/{{$show->id}}" class="card__play">
                                                    <i class="icon ion-ios-play"></i>
                                                </a>
                                            </div>
                                            <div class="card__content">
                                                <h3 class="card__title"><a href="/movies/{{$show->id}}">{{$show->title}}</a></h3>
                                                <span class="card__rate"><i class="icon ion-ios-star"></i>{{$show->rating}}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                </div>
            </div>

            <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="4-tab">
                <div class="row">
                    <?php
                    if (Auth::user()->hasAnyRole('Basic')) {
                        $oscar_movies = DB::table('movies')->where('tag_id','=','3')->paginate(5);
                    }

                    if (Auth::user()->hasAnyRole('Premium')) {
                        $oscar_movies = DB::table('movies')->where('tag_id','=','3')->paginate(10);
                    }

                    if (Auth::user()->hasAnyRole('Cinematic')) {
                        $oscar_movies = DB::table('movies')->where('tag_id','=','3')->paginate(15);
                    }
                    ?>
                        <div class="col-12">
                            <button class="home__nav home__nav--prev" type="button">
                                <i class="icon ion-ios-arrow-round-back"></i>
                            </button>
                            <button class="home__nav home__nav--next" type="button">
                                <i class="icon ion-ios-arrow-round-forward"></i>
                            </button>
                        </div>
                        <div class="col-12">
                            <div class="owl-carousel home__carousel">
                                @foreach($oscar_movies as $oscar_movie)
                                    <div class="item">
                                        <div class="card card--big">
                                            <div class="card__cover">
                                                <img src="{{Storage::url($oscar_movie->poster)}}" width="150" height="350">
                                                <a href="/movies/{{$oscar_movie->id}}" class="card__play">
                                                    <i class="icon ion-ios-play"></i>
                                                </a>
                                            </div>
                                            <div class="card__content">
                                                <h3 class="card__title"><a href="/movies/{{$oscar_movie->id}}">{{$oscar_movie->title}}</a></h3>
                                                <span class="card__rate"><i class="icon ion-ios-star"></i>{{$oscar_movie->rating}}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                </div>
            </div>

            <div class="tab-pane fade" id="tab-5" role="tabpanel" aria-labelledby="5-tab">
                <div class="row">
                    <?php
                    if (Auth::user()->hasAnyRole('Basic')) {
                        $christmas_movies = DB::table('movies')->where('tag_id','=','2')->paginate(5);
                    }

                    if (Auth::user()->hasAnyRole('Premium')) {
                        $christmas_movies = DB::table('movies')->where('tag_id','=','2')->paginate(10);
                    }

                    if (Auth::user()->hasAnyRole('Cinematic')) {
                        $christmas_movies = DB::table('movies')->where('tag_id','=','2')->paginate(15);
                    }
                    ?>
                        <div class="col-12">
                            <button class="home__nav home__nav--prev" type="button">
                                <i class="icon ion-ios-arrow-round-back"></i>
                            </button>
                            <button class="home__nav home__nav--next" type="button">
                                <i class="icon ion-ios-arrow-round-forward"></i>
                            </button>
                        </div>
                        <div class="col-12">
                            <div class="owl-carousel home__carousel">
                                @foreach($christmas_movies as $christmas_movie)
                                    <div class="item">
                                        <div class="card card--big">
                                            <div class="card__cover">
                                                <img src="{{Storage::url($christmas_movie->poster)}}" width="150" height="350">
                                                <a href="/movies/{{$christmas_movie->id}}" class="card__play">
                                                    <i class="icon ion-ios-play"></i>
                                                </a>
                                            </div>
                                            <div class="card__content">
                                                <h3 class="card__title"><a href="/movies/{{$christmas_movie->id}}">{{$christmas_movie->title}}</a></h3>
                                                <span class="card__rate"><i class="icon ion-ios-star"></i>{{$christmas_movie->rating}}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="section section--bg" data-bg="img/section/section.jpg">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <h2 class="section__title">Short Masterpieces</h2>
            </div>

            <?php
            if (Auth::user()->hasAnyRole('Basic')) {
                $short_movies = DB::table('movies')->where('runtime','<', '30')->paginate(2);
            }

            if (Auth::user()->hasAnyRole('Premium')) {
                $short_movies = DB::table('movies')->where('runtime','<', '30')->paginate(3);
            }

            if (Auth::user()->hasAnyRole('Cinematic')) {
                $short_movies = DB::table('movies')->where('runtime','<', '30')->paginate(4);
            }
            ?>
            @foreach($short_movies as $short_movie)
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <div class="card">
                        <div class="card__cover">
                            <img src="{{Storage::url($short_movie->poster)}}" width="280" height="300">
                            <a href="/movies/{{$movie->id}}" class="card__play">
                                <i class="icon ion-ios-play"></i>
                            </a>
                        </div>
                        <div class="card__content">
                            <h3 class="card__title"><a href="/movies/{{$movie->id}}">{{$short_movie->title}}</a></h3>
                            <span class="card__rate"><i class="icon ion-ios-star"></i>{{$short_movie->rating}}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <h2 class="section__title section__title--no-margin">Our Partners</h2>
            </div>

            <div class="col-12">
                <p class="section__text section__text--last-with-margin">It is a long <b>established</b> fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using.</p>
            </div>

            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#" class="partner">
                    <img src="{{ ('img/partners/themeforest-light-background.png') }}" alt="" class="partner__img">
                </a>
            </div>

            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#" class="partner">
                    <img src="{{ ('img/partners/audiojungle-light-background.png') }}" alt="" class="partner__img">
                </a>
            </div>

            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#" class="partner">
                    <img src="{{ ('img/partners/codecanyon-light-background.png') }}" alt="" class="partner__img">
                </a>
            </div>

            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#" class="partner">
                    <img src="{{ ('img/partners/photodune-light-background.png') }}" alt="" class="partner__img">
                </a>
            </div>

            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#" class="partner">
                    <img src="{{ ('img/partners/activeden-light-background.png') }}" alt="" class="partner__img">
                </a>
            </div>

            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#" class="partner">
                    <img src="{{ ('img/partners/3docean-light-background.png') }}" alt="" class="partner__img">
                </a>
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
                    <li><a href="#"><img src="{{ ('img/Download_on_the_App_Store_Badge.svg') }}" alt=""></a></li>
                    <li><a href="#"><img src="{{ ('img/google-play-badge.png') }}" alt=""></a></li>
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
