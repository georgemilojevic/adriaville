<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<div id="preloader" class="preloader"><img src="/assets/img/loading.svg"></div>
<header>
    <div class="container">
        <nav class="navbar-light navbar navbar-expand-lg">
            <a class="navbar-brand" href="/"><span class="logo"></span> Adriaville</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item dropdown language-menu">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown09"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                    class="flag-icon flag-icon-gb"> </span> English</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown09">
                            <a class="dropdown-item" href="#fr"><span class="flag-icon flag-icon-fr"> </span> French</a>
                            <a class="dropdown-item" href="#it"><span class="flag-icon flag-icon-it"> </span> Italian</a>
                            <a class="dropdown-item" href="#ru"><span class="flag-icon flag-icon-ru"> </span> Russian</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<section class="search-results">
    <div class="container">
        <h1>Search results</h1>
        <div class="row">
            <div class="search-detail-filter col-lg-7 col-sm-7 mx-auto">
                <div class="row">
                    <div class="form-group col-lg-4">
                        <label for="date">Country</label>
                        <select class="form-control" id="country" multiple="multiple" name="country">
                            <option value="">Select Country</option>
                            <option>Croatia</option>
                            <option>Albania</option>
                            <option>Slovenia</option>
                            <option>Montenegro</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-5">
                        <label for="date">Check-in / Check-out</label>
                        <input type="text" id="search-date" placeholder="Anytime" class="form-control" autocomplete="off">
                        <span class="amsify-toggle-selection date-picker-chevron fal fa-chevron-down"></span>
                    </div>
                    <div class="form-group col-lg-3">
                        <label for="date">Guests</label>
                        <div class="number-input-group form-control">
                            <span class="input-number-decrement"><i class="fal fa-minus"></i></span><input class="input-number"
                                                                                                           type="text" value="1" min="0" max="10"><span class="input-number-increment"><i
                                        class="fal fa-plus"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h2>
            36 Villas in Croatia
        </h2>
        <div class="search-villa-holder">
            <div class="search-villa-item">
                <div class="row">
                    <div class="col-lg-5 search-item-images">
                        <div class="search-list-slider owl-carousel">
                            <div class="item search-slider-image"
                                 style="background-image: url('https://fakeimg.pl/365x250/D9D9D9/B7B7B7/?retina=1')"></div>
                            <div class="item search-slider-image"
                                 style="background-image: url('https://fakeimg.pl/365x250/D9D9D9/B7B7B7/?retina=1')"></div>
                            <div class="item search-slider-image"
                                 style="background-image: url('https://fakeimg.pl/365x250/D9D9D9/B7B7B7/?retina=1')"></div>
                            <div class="item search-slider-image"
                                 style="background-image: url('https://fakeimg.pl/365x250/D9D9D9/B7B7B7/?retina=1')"></div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="search-item-content">
                            <h3>Villa name</h3>
                            <span class="search-item-star">
                     <i class="far fa-star"></i> 5.0
                     </span>
                            <p>
                                Ut ut dui eu dolor ultricies tempor. Aenean iaculis augue vel velit semper,
                                id consequat dui consequat. Nulla eu cursus ligula. Ut ut dui eu dolor
                                ultricies tempor. Aenean iaculis augue vel velit semper.
                            </p>
                            <div class="search-card-footer">
                                <div class="search-card-icons">
                                    <span><i class="fal fa-user"></i> 7</span>
                                    <span><i class="fal fa-bed"></i> 4</span>
                                    <span><i class="fal fa-bath"></i> 6</span>
                                </div>
                                <div class="search-card-links">
                                    <a href="#" class="secondary-link">View details</a>
                                    <a href="#" class="primary-link">Book villa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="search-villa-item">
                <div class="row">
                    <div class="col-lg-5 search-item-images">
                        <div class="search-list-slider owl-carousel">
                            <div class="item search-slider-image"
                                 style="background-image: url('https://fakeimg.pl/365x250/D9D9D9/B7B7B7/?retina=1')"></div>
                            <div class="item search-slider-image"
                                 style="background-image: url('https://fakeimg.pl/365x250/D9D9D9/B7B7B7/?retina=1')"></div>
                            <div class="item search-slider-image"
                                 style="background-image: url('https://fakeimg.pl/365x250/D9D9D9/B7B7B7/?retina=1')"></div>
                            <div class="item search-slider-image"
                                 style="background-image: url('https://fakeimg.pl/365x250/D9D9D9/B7B7B7/?retina=1')"></div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="search-item-content">
                            <h3>Villa name</h3>
                            <span class="search-item-star">
                     <i class="far fa-star"></i> 5.0
                     </span>
                            <p>
                                Ut ut dui eu dolor ultricies tempor. Aenean iaculis augue vel velit semper,
                                id consequat dui consequat. Nulla eu cursus ligula. Ut ut dui eu dolor
                                ultricies tempor. Aenean iaculis augue vel velit semper.
                            </p>
                            <div class="search-card-footer">
                                <div class="search-card-icons">
                                    <span><i class="fal fa-user"></i> 7</span>
                                    <span><i class="fal fa-bed"></i> 4</span>
                                    <span><i class="fal fa-bath"></i> 6</span>
                                </div>
                                <div class="search-card-links">
                                    <a href="#" class="secondary-link">View details</a>
                                    <a href="#" class="primary-link">Book villa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="search-villa-item">
                <div class="row">
                    <div class="col-lg-5 search-item-images">
                        <div class="search-list-slider owl-carousel">
                            <div class="item search-slider-image"
                                 style="background-image: url('https://fakeimg.pl/365x250/D9D9D9/B7B7B7/?retina=1')"></div>
                            <div class="item search-slider-image"
                                 style="background-image: url('https://fakeimg.pl/365x250/D9D9D9/B7B7B7/?retina=1')"></div>
                            <div class="item search-slider-image"
                                 style="background-image: url('https://fakeimg.pl/365x250/D9D9D9/B7B7B7/?retina=1')"></div>
                            <div class="item search-slider-image"
                                 style="background-image: url('https://fakeimg.pl/365x250/D9D9D9/B7B7B7/?retina=1')"></div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="search-item-content">
                            <h3>Villa name</h3>
                            <span class="search-item-star">
                     <i class="far fa-star"></i> 5.0
                     </span>
                            <p>
                                Ut ut dui eu dolor ultricies tempor. Aenean iaculis augue vel velit semper,
                                id consequat dui consequat. Nulla eu cursus ligula. Ut ut dui eu dolor
                                ultricies tempor. Aenean iaculis augue vel velit semper.
                            </p>
                            <div class="search-card-footer">
                                <div class="search-card-icons">
                                    <span><i class="fal fa-user"></i> 7</span>
                                    <span><i class="fal fa-bed"></i> 4</span>
                                    <span><i class="fal fa-bath"></i> 6</span>
                                </div>
                                <div class="search-card-links">
                                    <a href="#" class="secondary-link">View details</a>
                                    <a href="#" class="primary-link">Book villa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="search-villa-item">
                <div class="row">
                    <div class="col-lg-5 search-item-images">
                        <div class="search-list-slider owl-carousel">
                            <div class="item search-slider-image"
                                 style="background-image: url('https://fakeimg.pl/365x250/D9D9D9/B7B7B7/?retina=1')"></div>
                            <div class="item search-slider-image"
                                 style="background-image: url('https://fakeimg.pl/365x250/D9D9D9/B7B7B7/?retina=1')"></div>
                            <div class="item search-slider-image"
                                 style="background-image: url('https://fakeimg.pl/365x250/D9D9D9/B7B7B7/?retina=1')"></div>
                            <div class="item search-slider-image"
                                 style="background-image: url('https://fakeimg.pl/365x250/D9D9D9/B7B7B7/?retina=1')"></div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="search-item-content">
                            <h3>Villa name</h3>
                            <span class="search-item-star">
                     <i class="far fa-star"></i> 5.0
                     </span>
                            <p>
                                Ut ut dui eu dolor ultricies tempor. Aenean iaculis augue vel velit semper,
                                id consequat dui consequat. Nulla eu cursus ligula. Ut ut dui eu dolor
                                ultricies tempor. Aenean iaculis augue vel velit semper.
                            </p>
                            <div class="search-card-footer">
                                <div class="search-card-icons">
                                    <span><i class="fal fa-user"></i> 7</span>
                                    <span><i class="fal fa-bed"></i> 4</span>
                                    <span><i class="fal fa-bath"></i> 6</span>
                                </div>
                                <div class="search-card-links">
                                    <a href="#" class="secondary-link">View details</a>
                                    <a href="#" class="primary-link">Book villa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <ul class="pagination">
                <li class="page-item next"><a class="page-link" href="#"><i class="fal fa-chevron-left"></i></a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item prev"><a class="page-link" href="#"><i class="fal fa-chevron-right"></i></a></li>
            </ul>
        </nav>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="/assets/js/owl.carousel.min.js"></script>
<script src="/assets/js/jquery.parallax-scroll.js"></script>
<script src="/assets/js/jquery.amsifyselect.js"></script>
<script src="/assets/js/lightpick.js"></script>
<script src="/assets/js/custom.js"></script>
</body>
</html>