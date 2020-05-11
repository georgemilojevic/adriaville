<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdriaVille</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="/assets/img/favicons/site.webmanifest">
    <link rel="mask-icon" href="/assets/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/assets/img/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i&display=swap&subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/css/amsify.select.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/lightpick.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="https://pro.fontawesome.com/releases/v5.1.0/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css?v=<?php echo date("h:i:sa"); ?>">
</head>
<body>
<div id="preloader" class="preloader"><img src="/assets/img/loading.svg"></div>
<header>
    <div class="container">
        <nav class="navbar-dark dark-text navbar navbar-expand-lg">
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
                        @if(app()->getLocale() === "en")

                            <a class="nav-link dropdown-toggle" href="/{{ app()->getLocale() }}" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="flag-icon flag-icon-gb"> </span> English</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown09">
                                <a class="dropdown-item" href="/de"><span class="flag-icon flag-icon-de"> </span>  German</a>
                                <a class="dropdown-item" href="/hr"><span class="flag-icon flag-icon-hr"> </span>  Croatian</a>
                            </div>
                        @endif

                        @if(app()->getLocale() === "de")
                            <a class="nav-link dropdown-toggle" href="/{{ app()->getLocale() }}" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="flag-icon flag-icon-de"> </span> Deutch</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown09">
                                <a class="dropdown-item" href="/en"><span class="flag-icon flag-icon-gb"> </span>  English</a>
                                <a class="dropdown-item" href="/hr"><span class="flag-icon flag-icon-hr"> </span>  Croatian</a>
                            </div>
                        @endif

                        @if(app()->getLocale() === "hr")
                            <a class="nav-link dropdown-toggle" href="/{{ app()->getLocale() }}" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="flag-icon flag-icon-hr"> </span> Hrvatski</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown09">
                                <a class="dropdown-item" href="/en"><span class="flag-icon flag-icon-gb"> </span>  English</a>
                                <a class="dropdown-item" href="/hr"><span class="flag-icon flag-icon-de"> </span>  Deutch</a>
                            </div>
                        @endif
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<section class="detail-hero-section">
    <div class="container-fluid">
        <div class="row">
            <div class="owl-carousel detail-hero-slider col-lg-6">
                <div class="item" style="background-image: url('/assets/img/hero-home-image.png');">
                    <div class="overlay-slider"></div>
                </div>
                <div class="item" style="background-image: url('/assets/img/hero-home-image.png');">
                    <div class="overlay-slider"></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="details-specifications">
                    <h1>{{ $property->title }}</h1>
                    <p>{{ $property->getTranslatedAttribute('summary', app()->getLocale(), 'fallbackLocale') }}</p>
                    <ul class="detail-specification-list">
                        <li><i class="fal fa-user"></i> 7 People</li>
                        <li><i class="fal fa-bed"></i> 4 Beds</li>
                        <li><i class="fal fa-home"></i> 4 Rooms</li>
                        <li><i class="fal fa-bath"></i> 6 Baths</li>
                    </ul>
                    <div class="detail-specification-footer">
                        <div class="detail-price">
                            40€ - 360€ <span>/ Night</span>
                        </div>
                        <a class="btn btn-primary" href="#" role="button"  data-toggle="modal" data-target="#requestBooking">Request booking</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container details-sections">
    <div class="container">
        <section class="tabs-content-details">
            <ul class="nav nav-tabs" id="discover" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active show" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="false">Overview</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="availability-tab" data-toggle="tab" href="#availability" role="tab" aria-controls="availability" aria-selected="true">Availability</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="prices-tab" data-toggle="tab" href="#prices" role="tab" aria-controls="prices" aria-selected="false">Prices</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane active show" id="overview" role="tabpanel" aria-labelledby="overview">
                    <div class="tab-item">
                        <h3>Near Korcula town, Korcula island</h3>
                        <p>
                        {{ $property->getTranslatedAttribute('summary', app()->getLocale(), 'fallbackLocale') }}
                        </p>
                    </div>
                    <div class="tab-item">
                        <h3>Surroundings</h3>
                        <ul class="surroundings-list">
                            <li><i class="fal fa-sun"></i> Beach - 12 km</li>
                            <li><i class="fal fa-plane"></i> Pula - 18 km</li>
                            <li><i class="fal fa-road"></i> Fažana - 15 km</li>
                            <li><i class="fal fa-cloud"></i> Kap Kamenjak - 33 km</li>
                        </ul>
                    </div>
                    <div class="tab-item">
                        <h3>
                            Where can you find us:
                        </h3>
                        <div id="map"></div>
                    </div>
                </div>
                <div class="tab-pane" id="availability" role="tabpanel" aria-labelledby="availability">
                    <div class="availability-legend"><span class="occupied">Occupied</span><span class="available">Available</span></div>
                    <div class="tab-item">
                        <h3>
                            Villa Availability
                        </h3>
                        <input type="text" id="detail-date-picker" hidden>
                    </div>
                </div>
                <div class="tab-pane" id="prices" role="tabpanel" aria-labelledby="prices">
                    <div class="tab-item">
                        <h3>Prices</h3>
                        <div class="detail-price">
                            40€ - 360€ <span>/ Night</span>
                        </div>
                        <p>
                            If you are looking for a spectacular villa with direct sea access, luxury design and peaceful surroundings, look no further than Villa Poppy - newly completed, the property is on three levels, located just 5 km from Korcula town. One of the main highlights of the property is the floor to ceiling windows which provide unsurpassed views over the bay and the Peljesac peninsula. The whole property is luxurious and elegantly designed and has been equipped using the best of everything, from crystal chandeliers to gorgeous fabrics and contemporary furnishings.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
    <!-- Modal -->
    <div class="request-booking modal fade" id="requestBooking" tabindex="-1" role="dialog" aria-labelledby="requestBookingTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="header-modal-content mx-auto">
                        <h5>Request Booking</h5>
                        <h2>Villa Poppy</h2>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-lg-6 input-request-modal">
                                <div class="form-group">
                                    <label for="firstName">Email address</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="Type your name">
                                </div>
                                <div class="form-group">
                                    <label for="lastName">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="Type last name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" placeholder="Type email address">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" id="phone" placeholder="Type phone number">
                                </div>
                            </div>
                            <div class="col-lg-6 request-modal-checkbox">
                                <p>
                                    Select if you need some of our extras and we will send you our offer
                                </p>
                                <div class="form-group">
                                    <input type="checkbox" id="privateCheaf" name="privateCheaf" value="Private Chef" hidden>
                                    <label for="privateCheaf">Private Chef</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="babysitter" name="babysitter" value="Babysitter" hidden>
                                    <label for="babysitter">Babysitter</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="chauffeur" name="chauffeur" value="Chauffeur" hidden>
                                    <label for="chauffeur">Chauffeur</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="yachtCharter" name="yachtCharter" value="Yacht Charter" hidden>
                                    <label for="yachtCharter">Yacht Charter</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Send request</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqbtTa7CRXUADzqKTJyQZ_TkD7itNHcCM"></script>
    <script>
        google.maps.event.addDomListener(window, 'load', init);
        function init() {
            var mapOptions = {
                zoom:11,
                disableDefaultUI: true,
                center: new google.maps.LatLng(43.5159789, 16.4140642),
                styles:
                    [
                        {
                            "featureType": "administrative.land_parcel",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "landscape.man_made",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "labels",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "labels",
                            "stylers": [
                                {
                                    "visibility": "simplified"
                                },
                                {
                                    "lightness": 20
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "hue": "#f49935"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "labels",
                            "stylers": [
                                {
                                    "visibility": "simplified"
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "hue": "#fad959"
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "labels",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "visibility": "simplified"
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "labels",
                            "stylers": [
                                {
                                    "visibility": "simplified"
                                }
                            ]
                        },
                        {
                            "featureType": "transit",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "hue": "#a1cdfc"
                                },
                                {
                                    "saturation": 30
                                },
                                {
                                    "lightness": 49
                                }
                            ]
                        }
                    ]
            };
            var mapElement = document.getElementById('map');
            var map = new google.maps.Map(mapElement, mapOptions);
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(43.5159789, 16.4140642),
                icon: '/assets/img/map-icon.png',
                map: map,
                title: 'Location'
            });
        }
    </script>


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
