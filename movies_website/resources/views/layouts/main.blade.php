<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ ('css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ ('css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ ('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ ('css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ ('css/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ ('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ ('css/plyr.css') }}">
    <link rel="stylesheet" href="{{ ('css/photoswipe.css') }}">
    <link rel="stylesheet" href="{{ ('css/default-skin.css') }}">
    <link rel="stylesheet" href="{{ ('css/main.css') }}">

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
                            <img src="img/logo.svg" alt="">
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
                            <a href="{{route('login')}}" class="header__sign-in">
                                <i class="icon ion-ios-log-in"></i>
                                <span>sign in</span>
                            </a>
                        </div>

                        <button class="header__btn" type="button">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="section section--first section--bg" data-bg="img/section/section.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section__wrap">
                    <h2 class="section__title">About Us</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <h2 class="section__title"><b>FLIXGO</b> – Best Place for Movies</h2>
            </div>

            <div class="col-12">
                <p class="section__text">It is a long <b>established</b> fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using.</p>

                <p class="section__text section__text--last-with-margin">'Content here, content here', making it look like <a href="#">readable</a> English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="feature">
                    <i class="icon ion-ios-tv feature__icon"></i>
                    <h3 class="feature__title">Ultra HD</h3>
                    <p class="feature__text">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="feature">
                    <i class="icon ion-ios-film feature__icon"></i>
                    <h3 class="feature__title">Film</h3>
                    <p class="feature__text">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first.</p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="feature">
                    <i class="icon ion-ios-trophy feature__icon"></i>
                    <h3 class="feature__title">Awards</h3>
                    <p class="feature__text">It to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining.</p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="feature">
                    <i class="icon ion-ios-notifications feature__icon"></i>
                    <h3 class="feature__title">Notifications</h3>
                    <p class="feature__text">Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="feature">
                    <i class="icon ion-ios-rocket feature__icon"></i>
                    <h3 class="feature__title">Rocket</h3>
                    <p class="feature__text">It to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="feature">
                    <i class="icon ion-ios-globe feature__icon"></i>
                    <h3 class="feature__title">Multi Language Subtitles </h3>
                    <p class="feature__text">Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section--dark">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <h2 class="section__title section__title--no-margin">How it works?</h2>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="how">
                    <span class="how__number">01</span>
                    <h3 class="how__title">Create an account</h3>
                    <p class="how__text">It has never been an issue to find an old movie or TV show on the internet. However, this is not the case with the new releases.</p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="how">
                    <span class="how__number">02</span>
                    <h3 class="how__title">Choose your Plan</h3>
                    <p class="how__text">It has never been an issue to find an old movie or TV show on the internet. However, this is not the case with the new releases.</p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="how">
                    <span class="how__number">03</span>
                    <h3 class="how__title">Enjoy MovieGo</h3>
                    <p class="how__text">It has never been an issue to find an old movie or TV show on the internet. However, this is not the case with the new releases.</p>
                </div>
            </div>
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
                    <img src="img/partners/themeforest-light-background.png" alt="" class="partner__img">
                </a>
            </div>

            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#" class="partner">
                    <img src="img/partners/audiojungle-light-background.png" alt="" class="partner__img">
                </a>
            </div>

            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#" class="partner">
                    <img src="img/partners/codecanyon-light-background.png" alt="" class="partner__img">
                </a>
            </div>

            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#" class="partner">
                    <img src="img/partners/photodune-light-background.png" alt="" class="partner__img">
                </a>
            </div>

            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#" class="partner">
                    <img src="img/partners/activeden-light-background.png" alt="" class="partner__img">
                </a>
            </div>

            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#" class="partner">
                    <img src="img/partners/3docean-light-background.png" alt="" class="partner__img">
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
                    <li><a href="#"><img src="img/Download_on_the_App_Store_Badge.svg" alt=""></a></li>
                    <li><a href="#"><img src="img/google-play-badge.png" alt=""></a></li>
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
<script type="text/javascript" src="{{ ('js/photoswipe-ui-default.min.js') }}"></script>
<script type="text/javascript" src="{{ ('js/main.js') }}"></script>

</body>

</html>
