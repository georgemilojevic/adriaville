<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Adriaville - Adriatic Cost Rentals">
    <meta property="og:description" content="Offering high quality villas for individuals or groups.">
    <meta property="og:image" content="http://142.93.174.229/assets/img/hero-home-image.png">
    <meta property="og:url" content="http://142.93.174.229/">
    <title>AdriaVille</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicons/site.webmanifest">
    <link rel="mask-icon" href="assets/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="assets/img/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i&display=swap&subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/amsify.select.css">
    <link rel="stylesheet" type="text/css" href="assets/css/lightpick.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="https://pro.fontawesome.com/releases/v5.1.0/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css?v=<?php echo date("h:i:sa"); ?>">
</head>
<body>
{{--<div id="preloader" class="preloader"><img src="/assets/img/loading.svg"></div>--}}
<header>
    <div class="container">
        <nav class="navbar-dark navbar navbar-expand-lg">
            <a class="navbar-brand" href="/"><span class="logo"></span> Adriaville</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item dropdown language-menu">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flag-icon flag-icon-gb"> </span> English</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown09">
                            <a class="dropdown-item" href="#fr"><span class="flag-icon flag-icon-de"> </span>  German</a>
                            <a class="dropdown-item" href="#it"><span class="flag-icon flag-icon-hr"> </span>  Croatian</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<section class="owl-carousel home-hero-slider">
    <div class="item" style="background-image: url('/assets/img/hero-home-image.png');">
        <div class="overlay-slider">
            <div class="container">
                <div class="row">
                    <div class="slider-text col-lg-11 mx-auto">
                        <h3>Korcula Island</h3>
                        <h2>Villa Poppy</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="item" style="background-image: url('/assets/img/hero-home-image.png');">
        <div class="overlay-slider">
            <div class="container">
                <div class="row">
                    <div class="slider-text col-lg-11 mx-auto">
                        <h3>Korcula Island</h3>
                        <h2>Villa Poppy</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="hero-form-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 mx-auto">
                <div class="hero-form" id="app">

                    <search-component></search-component>

{{--                    <form action="/search.php">--}}
{{--                        <div class="container-fluid">--}}
{{--                            <div class="row">--}}
{{--                                <div class="hero-form-select-wrapper col-lg-10">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="form-group col-lg-4">--}}
{{--                                            <label for="country">Where would you like to stay?</label>--}}
{{--                                            <select class="form-control" id="country" name="country">--}}
{{--                                                <option value="">Select Country</option>--}}
{{--                                                <option>Croatia</option>--}}
{{--                                                <option>Albania</option>--}}
{{--                                                <option>Slovenia</option>--}}
{{--                                                <option>Montenegro</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group col-lg-4">--}}
{{--                                            <label for="date">Check-in / Check-out</label>--}}
{{--                                            <input type="text" id="search-date" placeholder="Anytime" class="form-control" autocomplete="off">--}}
{{--                                            <span class="amsify-toggle-selection date-picker-chevron fal fa-chevron-down"></span>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group col-lg-4">--}}
{{--                                            <label for="guests">Guests</label>--}}
{{--                                            <div class="number-input-group">--}}
{{--                                                <span class="input-number-decrement"><i class="fal fa-minus"></i></span><input class="input-number" type="text" value="1" min="0" max="10"><span class="input-number-increment"><i class="fal fa-plus"></i></span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class=" col-lg-2 p-0">--}}
{{--                                    <button class="hero-form-submit" type="submit">--}}
{{--                                        <i class="fal fa-search"></i><span>Search</span>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}

                </div>
            </div>
        </div>
    </div>
</section>
<section class="spotlight-section">
    <div class="container">
        <h2>Villas in the spotlight</h2>
        <div class="row">

            @foreach($spotlightVillas as $spotlightVilla)
            <div class="col-lg-6 col-sm-6">
                <div class="spotlight-item">
                    <?php $spotlightVillaImages = json_decode($spotlightVilla->images); ?>
                    <div class="spotlight-image" style="background-image: url(<?= 'storage/' . $spotlightVillaImages[0] ?>)">
                        <div class="spotlight-image-overlay">
                     <span class="spotlight-star">
                     <i class="far fa-star"></i> 5.0
                     </span>
                        </div>
                    </div>
                    <div class="spotlight-content">
                        <h3><?= $spotlightVilla['title']?></h3>
                        <ul class="spotlight-list">
                            <li><?=$spotlightVilla['content']; ?></li>
                        </ul>
                        <div class="spotlight-icons">
                            <span><i class="fal fa-user"></i> 7</span>
                            <span><i class="fal fa-bed"></i> 4</span>
                            <span><i class="fal fa-bath"></i> 6</span>
                        </div>
                        <a href="/property/<?=$spotlightVilla['id']?>" class="spotlight-book">Book villa</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<section class="discover-section">
    <div class="container">
        <ul class="nav nav-tabs" id="discover" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="croatia-tab" data-toggle="tab" href="#croatia" role="tab" aria-controls="croatia"
                   aria-selected="true">Croatia</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="slovenia-tab" data-toggle="tab" href="#slovenia" role="tab" aria-controls="slovenia"
                   aria-selected="false">Slovenia</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="albania-tab" data-toggle="tab" href="#albania" role="tab" aria-controls="albania"
                   aria-selected="false">Albania</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="montenegro-tab" data-toggle="tab" href="#montenegro" role="tab"
                   aria-controls="montenegro" aria-selected="false">Montenegro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="bosnia-tab" data-toggle="tab" href="#bosnia" role="tab"
                   aria-controls="montenegro" aria-selected="false">Bosnia and Herzegovina</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="croatia" role="tabpanel" aria-labelledby="croatia-tab">
                <div class="row">
                    <div class="col-lg-5 discover-info">
                        <h3>Discover
                            Croatia
                        </h3>
                        <p>
                            Ut ut dui eu dolor ultricies tempor.
                            Aenean iaculis augue vel velit semper,
                            id consequat dui consequat.
                        </p>
                        <a class="btn btn-primary" href="#" role="button">View all</a>
                        <div class="discover-navigation">
                            <button class="ds-prev disabled"><i class='fal fa-long-arrow-left'></i></button>
                            <button class="ds-next"><i class='fal fa-long-arrow-right'></i></button>
                        </div>
                    </div>
                    <div class="col-lg-7 discover-carousel-wrapper">
                        <div class="owl-carousel discvover-carousel">
                        @if(!empty($croatianVillas))
                            @foreach($croatianVillas as $croatianVilla)
                            <?php $croatianVillasImages = json_decode($croatianVilla->images); ?>
                            <div class="item">
                                <div class="discover-item-wrapper">
                                    <div class="discover-item">
                                        <div class="discover-image" style="background-image: url({{ asset('storage/'.$croatianVillasImages[0]) }})"></div>
                                        <h4><?=$croatianVilla['title']?></h4>
                                        <a class="btn-explore" href="/property/<?=$croatianVilla['id']; ?>">Explore</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="slovenia" role="tabpanel" aria-labelledby="slovenia-tab">
                <div class="row">
                    <div class="col-lg-5 discover-info">
                        <h3>Discover
                            Slovenia
                        </h3>
                        <p>
                            Ut ut dui eu dolor ultricies tempor.
                            Aenean iaculis augue vel velit semper,
                            id consequat dui consequat.
                        </p>
                        <a class="btn btn-primary" href="#" role="button">View all</a>
                        <div class="discover-navigation">
                            <button class="ds-prev disabled"><i class='fal fa-long-arrow-left'></i></button>
                            <button class="ds-next"><i class='fal fa-long-arrow-right'></i></button>
                        </div>
                    </div>
                    <div class="col-lg-7 discover-carousel-wrapper">
                        <div class="owl-carousel discvover-carousel">
                        @if(!empty($slovenianVillas))
                            @foreach($slovenianVillas as $slovenianVilla)
                            <?php $sloveniaVillaImages = json_decode($slovenianVilla->images); ?>
                            <div class="item">
                                <div class="discover-item-wrapper">
                                    <div class="discover-item">

                                        <div class="discover-image" style="background-image: url({{ asset('storage/'.$sloveniaVillaImages[0]) }})"></div>

                                        <h4><?=$slovenianVilla['title'] ?></h4>
                                        <a class="btn-explore" href="/property/{{$slovenianVilla['id']}}">Explore</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="albania" role="tabpanel" aria-labelledby="albania-tab">
                <div class="row">
                    <div class="col-lg-5 discover-info">
                        <h3>Discover
                            Albania
                        </h3>
                        <p>
                            Ut ut dui eu dolor ultricies tempor.
                            Aenean iaculis augue vel velit semper,
                            id consequat dui consequat.
                        </p>
                        <a class="btn btn-primary" href="#" role="button">View all</a>
                        <div class="discover-navigation">
                            <button class="ds-prev disabled"><i class='fal fa-long-arrow-left'></i></button>
                            <button class="ds-next"><i class='fal fa-long-arrow-right'></i></button>
                        </div>
                    </div>
                    <div class="col-lg-7 discover-carousel-wrapper">
                        <div class="owl-carousel discvover-carousel">
                            @if(!empty($albanianVillas))
                            @foreach($albanianVillas as $albanianVilla)
                                <?php $albanianVillaImages = json_decode($albanianVilla->images, true); ?>
                            <div class="item">
                                <div class="discover-item-wrapper">
                                    <div class="discover-item">
                                        <div class="discover-image" style="background-image: url({{ asset('storage/'.$albanianVillaImages[0]) }})"></div>
                                        <h4>{{ $albanianVilla['title'] }}</h4>
                                        <a class="btn-explore" href="/property/{{ $albanianVilla['id'] }}">Explore</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="montenegro" role="tabpanel" aria-labelledby="montenegro-tab">
                <div class="row">
                    <div class="col-lg-5 discover-info">
                        <h3>Discover
                            Montenegro
                        </h3>
                        <p>
                            Ut ut dui eu dolor ultricies tempor.
                            Aenean iaculis augue vel velit semper,
                            id consequat dui consequat.
                        </p>
                        <a class="btn btn-primary" href="#" role="button">View all</a>
                        <div class="discover-navigation">
                            <button class="ds-prev disabled"><i class='fal fa-long-arrow-left'></i></button>
                            <button class="ds-next"><i class='fal fa-long-arrow-right'></i></button>
                        </div>
                    </div>
                    <div class="col-lg-7 discover-carousel-wrapper">
                        <div class="owl-carousel discvover-carousel">
                            @if(!empty($montenegrianVillas))
                            @foreach($montenegrianVillas as $montenegrianVilla)
                            <?php $montenegrianVillaImages = json_decode($montenegrianVilla->images, true); ?>
                            <div class="item">
                                <div class="discover-item-wrapper">
                                    <div class="discover-item">
                                        <div class="discover-image" style="background-image: url({{ asset('/storage/'.$montenegrianVillaImages[0]) }})"></div>
                                        <h4>{{ $montenegrianVilla['title'] }}</h4>
                                        <a class="btn-explore" href="/property/{{ $montenegrianVilla['id'] }}">Explore</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="bosnia" role="tabpanel" aria-labelledby="bosnia-tab">
                <div class="row">
                    <div class="col-lg-5 discover-info">
                        <h3>Discover
                            Bosnia and Herzegovina
                        </h3>
                        <p>
                            Ut ut dui eu dolor ultricies tempor.
                            Aenean iaculis augue vel velit semper,
                            id consequat dui consequat.
                        </p>
                        <a class="btn btn-primary" href="#" role="button">View all</a>
                        <div class="discover-navigation">
                            <button class="ds-prev disabled"><i class='fal fa-long-arrow-left'></i></button>
                            <button class="ds-next"><i class='fal fa-long-arrow-right'></i></button>
                        </div>
                    </div>
                    <div class="col-lg-7 discover-carousel-wrapper">
                        <div class="owl-carousel discvover-carousel">
                            @if(!empty($bosnianVillas))
                                @foreach($bosnianVillas as $bosnianVilla)
                                    <?php $bosnianVillaImages = json_decode($bosnianVilla->images, true); ?>
                                    <div class="item">
                                        <div class="discover-item-wrapper">
                                            <div class="discover-item">
                                                <div class="discover-image" style="background-image: url({{ asset('/storage/'.$bosnianVillaImages[0]) }})"></div>
                                                <h4>{{ $bosnianVilla['title'] }}</h4>
                                                <a class="btn-explore" href="/property/{{ $bosnianVilla['id'] }}">Explore</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="extras-section container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 extras-content">
                <h3>Adriaville
                    Extras
                </h3>
                <h5>We are here for everything you need</h5>
                <p>
                    Ut ut dui eu dolor ultricies tempor. Aenean iaculis  augue vel velit semper, id consequat dui consequat. Nulla eu cursus ligula. Aenean iaculis augue vel velit semper, id consequat dui consequat.
                </p>
            </div>
            <div class="col-lg-6 floating-cards">
                <div class="row">
                    <div class="col-lg-6 floating-card-wrapper" data-parallax='{"x": 0, "y": 40}'>
                        <div class="floating-card-item">
                            <img src="https://fakeimg.pl/220x155/D9D9D9/B7B7B7/?retina=1" class="img-fluid" alt="" >
                            <h6>Private chef</h6>
                        </div>
                        <div class="floating-card-item">
                            <img src="https://fakeimg.pl/220x155/D9D9D9/B7B7B7/?retina=1" class="img-fluid" alt="">
                            <h6>Chauffeur</h6>
                        </div>
                    </div>
                    <div class="col-lg-6 floating-card-wrapper" data-parallax='{"x": 0, "y": -40}'>
                        <div class="floating-card-item">
                            <img src="https://fakeimg.pl/220x155/D9D9D9/B7B7B7/?retina=1" class="img-fluid" alt="">
                            <h6>Babysitter</h6>
                        </div>
                        <div class="floating-card-item">
                            <img src="https://fakeimg.pl/220x155/D9D9D9/B7B7B7/?retina=1" class="img-fluid" alt="">
                            <h6>Yacht Charter</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 about-images">
                <div class="about-main-image">
                    <img src="https://fakeimg.pl/370x370/D9D9D9/B7B7B7/?retina=1" alt="">
                </div>
                <div class="about-secondary-images">
                    <img src="https://fakeimg.pl/240x260/D9D9D9/B7B7B7/?retina=1" alt="">
                    <img src="https://fakeimg.pl/170x170/D9D9D9/B7B7B7/?retina=1" alt="">
                </div>
            </div>
            <div class="col-lg-5 about-content">
                <h3>Adriaville
                    About
                </h3>
                <p>
                    Ut ut dui eu dolor ultricies tempor. Aenean iaculis augue vel velit semper, id consequat dui consequat. Nulla eu cursus ligula. Phasellus turpis ex, sagittis at suscipit at, aliquam rhoncus orci.
                </p>
                <p>
                    Ut ut dui eu dolor ultricies tempor. Aenean iaculis augue vel velit semper, id consequat dui consequat. Nulla eu cursus ligula.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="care-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <h3>
                    Adria Care
                </h3>
                <p>
                    Ut ut dui eu dolor ultricies tempor. Aenean iaculis augue vel velit semper, id consequat dui consequat. Nulla eu cursus ligula. Phasellus turpis ex, sagittis at suscipit at, aliquam rhoncus orci.
                </p>
                <ul class="check-list">
                    <div class="row">
                        <li class="col-lg-6">Local expertise</li>
                        <li class="col-lg-6">Exclusive furnishing</li>
                        <li class="col-lg-6">Best price guarantee</li>
                        <li class="col-lg-6">Individual advice</li>
                        <li class="col-lg-6">Data SSL encrypted</li>
                        <li class="col-lg-6">Secure payment</li>
                    </div>
                </ul>
            </div>
            <div class="col-lg-7 care-image">
                <img src="https://fakeimg.pl/560x420/D9D9D9/B7B7B7/?retina=1" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="footer-content">
                <img src="/assets/img/logo-color.svg" class="footer-logo" alt="">
                <div class="footer-links">
                    <a href="#">List Your Property</a>
                    <a href="#">About Us</a>
                    <a href="#">Terms and Conditions</a>
                    <a href="#">Contact</a>
                </div>
                <div class="footer-social-links">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                </div>
                <div class="copyright">
                    © Adriatic Villas 2019. All Rights Reserved.
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="js/app.js"></script>
<script src="/assets/js/jquery.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="/assets/js/owl.carousel.min.js"></script>
<script src="/assets/js/jquery.parallax-scroll.js"></script>
<script src="/assets/js/jquery.amsifyselect.js"></script>
<script src="/assets/js/lightpick.js"></script>
<script src="/assets/js/custom.js"></script>
</body>
</html>