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
                        <a class="nav-link" href="https://www.instagram.com/adriaville_com"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.facebook.com/adriaville1"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" role="button" data-toggle="modal" data-target="#contact-modal">Contact</a>
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
                @foreach($images as $image)
                <div class="item" style="background-image: url({{ asset('storage/' . $image) }});">
                    <div class="overlay-slider"></div>
                </div>
                @endforeach
            </div>
            <div class="col-lg-6">
                <div class="details-specifications">
                    <h1>{{ $property->title }}</h1>
                    <p>{{ $property->getTranslatedAttribute('summary', app()->getLocale(), 'fallbackLocale') }}</p>
                    <ul class="detail-specification-list">
                        <li><i class="fal fa-user"></i> {{ $property['guests'] }} People</li>
                        <li><i class="fal fa-bed"></i> {{ $property['beds'] }} Beds</li>
                        <li><i class="fal fa-home"></i> {{ $property['rooms'] }} Rooms</li>
                        <li><i class="fal fa-bath"></i> {{ $property['bathrooms'] }} Bathrooms</li>
                    </ul>
                    <div class="detail-specification-footer">
                        <div class="detail-price">
                            40€ - 360€ <span>/ Night</span>
                        </div>
                        <a class="btn btn-primary" href="#" role="button"  data-toggle="modal" data-target="#requestBooking">{{ __('Book villa') }}</a>
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
                    <a class="nav-link" id="prices-tab" data-toggle="tab" href="#prices" role="tab" aria-controls="prices" aria-selected="false">Details</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane active show" id="overview" role="tabpanel" aria-labelledby="overview">
                    <div class="tab-item">
                        <h3>{{ $property['region'] }}</h3>
                        <p>
                        {{ $property->getTranslatedAttribute('content', app()->getLocale(), 'fallbackLocale') }}
                        </p>
                    </div>
                    <div class="tab-item">
                        <h3>Surroundings</h3>
                        <ul class="surroundings-list">
                            <li><i class="fal fa-sun"></i> Beach - 12 km</li>
                            <li><i class="fal fa-plane"></i> Pula - 18 km</li>
                            <li><i class="fal fa-road"></i> Fažana - 15 km</li>
                            <li><i class="fas fa-umbrella-beach"></i> Kap Kamenjak - 33 km</li>
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
                        <h3>Details</h3>
                        <div class="detail-price">
                            This property includes
                        </div>
                        @foreach($facilities as $facility)
                        <ul class="check-list">
                            <li class="col-lg-6">{{ $facility['title'] }}</li>
                        </ul>
                        @endforeach
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
                    <a href="#">{{ __('List Your Property') }}</a>
                    <a href="#" role="button" data-toggle="modal" data-target="#terms-modal">{{ __('Terms and Conditions') }}</a>
                    <a href="#" role="button" data-toggle="modal" data-target="#contact-modal">{{ __('Contact') }}</a>
                </div>
                <div class="footer-social-links">
                    <a href="https://www.instagram.com/adriaville_com"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.facebook.com/adriaville1"><i class="fab fa-facebook-f"></i></a>
                </div>
                <div class="copyright">
                    © Adriaville 2019. All Rights Reserved.
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- start modal contact -->
<div class="request-booking modal fade" id="contact-modal" tabindex="-1" role="dialog" aria-labelledby="requestBookingTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="header-modal-content mx-auto">
                    <h5>Contact Us</h5>
                    <h2>Adriaville</h2>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="footer-social-links">
                    <h5 class="text-warning text-center">If you have any questions please get in touch via one of the following options:</h5>
                    <hr>
                    <div class="container">
                        <p>
                            <i class="fas fa-phone text-dark"></i>
                            <span class="ml-3">+41 76 817 18 87  / +385 21 621 432</span>
                        </p>
                        <p>
                            <a href="https://wa.me/0041768171887?text=adriaville-information" about="_blank"><i class="fab fa-whatsapp text-success"></i></a>
                            <span class="ml-3">Start a conversation on WhatsApp</span>
                        </p>
                        <p>
                            <i class="fas fa-at text-primary"></i>
                            <span class="ml-3">info@adriaville.com</span>
                        </p>
                        <p>
                            <i class="fas fa-clock text-warning"></i>
                            <span class="ml-3">Monday-Sunday: 08:00 - 20:00 h</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end modal contact -->

<!-- start modal terms and conditions -->
<div class="request-booking modal fade" id="terms-modal" tabindex="-1" role="dialog" aria-labelledby="requestBookingTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="header-modal-content mx-auto">
                    <h2>Terms and Conditions</h2>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            1. Online reservations

                            The Adriaville website enables you to check the accommodation offerings and availability of Adriaville, as indicated to Adriaville by each Adriaville, and then submit an online reservation request to the Adriaville of your choice.  On completion of the reservation process the Reservations Facility will transmit an online confirmation of your reservation.  A reservation is only valid when a reservation number has been issued.
                        </li>
                        <li class="list-group-item">

                            2. Hotel Prices

                            The prices indicated on the Adriaville website for the Adriaville rooms are subject to availability.  Breakfast is only included if indicated in the rate policy.  Taxes and service charges are only included if indicated in the rate policy.
                        </li>
                        <li class="list-group-item">
                            3. Payment

                            It will be necessary for you to provide credit card details to secure a room reservation.  The credit card may then be used by the Adriaville for payment of a deposit as advised at the time of booking or as a guarantee for a future payment, in the case of a no-show, a cancellation or change to the reservation.
                        </li>
                        <li class="list-group-item">
                            4. Cancellations and Amendments

                            You should make any cancellations or amendments to your reservation using the same Adriaville channel through which you booked, either online or by telephone.  The cancellations and amendments policy that applies to your reservation will depend on the respective Adriaville's policy as advised at the time of booking.
                        </li>
                        <li class="list-group-item">
                            5. Rate/Reservation Validity

                            Reservation confirmations are provided to you solely for your convenience.  Adriaville and Adriaville retain official records of reservation transactions, including details of dates of stay and room rates. In the event of discrepancies, alterations, modifications, or variations between this confirmation and our official records, Adriaville’s official records shall prevail. Tampering with this confirmation to alter the room rate or any other reservation information is strictly prohibited and will have legal consequences.
                        </li>
                        <li class="list-group-item">
                            6. Early Departure

                            Some Adriaville and resorts have an early departure penalty fee and some room rates may also require a minimum stay. You may change your check out date without a penalty only if your rate and the Adriaville’s policy permits.
                        </li>
                        <li class="list-group-item">
                            7. Currency

                            Reservations will be charged in the hotel’s local currency as shown on the Adriaville website or given over the telephone at the time of booking.  Any currency conversion is for guidance only.  Any deposits or pre-payments will be deducted from the final reservation invoice in the hotel’s local currency.

                            A refund of a deposit or prepayment, if any, will be subject to the exchange rate applied by your payment card provider at the time of any such refund and may differ from the exchange rate applied at the time such deposit or prepayment was made.
                        </li>
                        <li class="list-group-item">
                            8. Rate Requirements

                            As some rates have special requirements at check-in, you should verify that you qualify for the rate that you have reserved.  Adriaville are not obligated to honour this rate if you do not qualify or do not have proof of qualification.
                        </li>
                        <li class="list-group-item">
                            9. Pre-paid Reservations

                            Some rate plans require prepayment in full and are non-cancellable, non-refundable, non-changeable and non-transferable. This will be identified in the rate description.  For these rate plans, once you make a reservation your credit card will be charged for the full amount. Credit will not be given for any unused reservation and the amount paid by you for such reservation cannot be used toward any other/future reservation.
                        </li>
                        <li class="list-group-item">
                            10. Guarantee Rules

                            For reservations guaranteed with a credit card at the time of making your reservation, rooms are held until the Adriaville check-out time on the day following the day of arrival.  The Adriaville may authorise the room rate prior to arrival and reserve funds, including taxes, on the credit card to determine the validity of the credit card.  Rooms booked with an invalid credit card are subject to immediate cancellation.
                        </li>
                        <li class="list-group-item">
                            11. Overbooking

                            In the event that a guest cannot be accommodated due to the Adriaville overbooking or an unforeseen circumstance, the Adriaville will attempt to accommodate guests, at its expense, at a comparable property in the area for the night(s) for which the Adriaville is unable to accommodate such guests, and will pay for transportation to that property.
                        </li>
                        <li class="list-group-item">
                            12. Special Requests

                            Adriaville will strive to honour any request for specific room types or bed types and some Adriaville will confirm such arrangements at the time you make your reservation.  Until specific confirmation is issued then your request cannot be guaranteed and neither Adriaville nor the Adriaville can guarantee that your request will be honoured.
                        </li>
                        <li class="list-group-item">
                            13. Pets

                            If you plan to travel with your pet, we recommend that you confirm directly with Adriaville or the Adriaville that the Adriaville does accept pets.  Adriaville accepts no responsibility for the pet policy at any individual Adriaville.  Specific pet policies may require a damage/cleaning deposit at the time of check-in which may be non-refundable.
                        </li>
                        <li class="list-group-item">
                            14. External services

                            The Adriaville website or the Adriaville at which you stay may advertise the opportunity to purchase products or services from independent third party suppliers (“independent suppliers”) including, by way of illustration only and without limitation, [excursions, yacht charters, other examples] (“external services”).  The following provisions apply to all external services:

                            (i)       All information on the Adriaville website or otherwise communicated by Adriaville regarding external services has been provided to Adriaville and your Adriaville by the independent suppliers.  Such information does not constitute any endorsement or recommendation of the external service by Adriaville or your Adriaville and is for general guidance only.  Neither Adriaville or your Adriaville makes any representation or warranty, express or implied, as to the nature, quality, cost or any other aspect of the external services and it is your responsibility to check all relevant details of the external services with the independent supplier prior to purchase or booking.

                            (ii)     Your contract for any external services will be made direct with the relevant independent supplier and neither Adriaville or your Adriaville has any involvement in or control over the provision of external services.  Consequently, neither Adriaville or your Adriaville will have any liability to you for the warranties, representations, acts, errors, omissions, breaches or negligence of any independent supplier or for any accidents, personal injuries, death, loss of or damage to property or any other losses, damages, costs or expenses resulting, directly or indirectly, from your purchase or use of any external service.

                            It is your responsibility to check that, where appropriate, the independent supplier has adequate public liability insurance for the external service and/or to ensure that you and any dependents or associates using the external service have adequate personal insurance cover against all foreseeable risks.
                        </li>
                        <li class="list-group-item">
                            15. Guest’s obligations

                            You agree to the terms and conditions of purchase imposed by Adriaville and each Adriaville.  You also agree that you are fully responsible and shall pay for all charges, fees, duties, taxes, assessments and other amounts arising out of your reservation when due, including additional taxes and fees that may not be included in the quoted rate.

                            You understand that any violation of an Adriaville’s conditions may result in cancellation of your reservation and you forfeiting any monies paid for such reservation and an Adriaville debiting your account for any costs it incurs as a result of such violation.
                        </li>
                        <li class="list-group-item">
                            16. Privacy and data protection

                            Our Reservation Privacy Policy (set out below) will apply to your reservation and forms part of these Reservation Terms and Conditions.
                        </li>
                        <li class="list-group-item">
                            17. Intellectual Property Rights

                            ‘Small Luxury Hotels of the World’ and ‘Adriaville’ have trademark protection.  Any copyright and other intellectual property in the content and materials on the Adriaville website remains with Adriaville or the relevant Adriaville.  Downloading, copying or otherwise using any material on the Adriaville website is permitted only for private use and limited to the sole purpose of making an Adriaville reservation.
                        </li>
                        <li class="list-group-item">
                            18. Force Majeure

                            Neither Adriaville nor any Adriaville will be liable for any change or cancellation of any reservation that is caused, in whole or in part, by events, occurrences, or causes beyond the control of Adriaville or any Adriaville.  Such events, occurrences, or causes include, without limitation, acts of God, terrorist activities, weather, strikes, lockouts, riots, acts of war, earthquake, volcanic activity, ash clouds, tsunamis, fire and explosions.
                        </li>
                        <li class="list-group-item">
                            19. Limitations

                            Neither Adriaville nor any Adriaville nor other providers of products or services related to the Reservations Facility are responsible for communication malfunctions, failures, difficulties or lost, stolen, or misdirected transmissions, messages or entries, or the security of any such communications.  Further, neither Adriaville nor any Adriaville nor any other providers of products or services related to the Reservations Facility are responsible for incorrect or inaccurate entry information, whether caused by user(s), by any of the equipment or programming associated with the Reservations Facility, or by any technical or human error that may occur in the processing of any information related to the Reservations Facility and shall not be liable for damages resulting from any of the foregoing.

                            Adriaville and any Adriaville may cancel or modify reservations where it appears that a user has engaged in fraudulent or inappropriate activity or under other circumstances where it appears that the reservations contain or resulted from a mistake or error.
                        </li>
                        <li class="list-group-item">
                            20. Governing Law

                            These Reservation Terms and Conditions are governed by the laws of England and the courts of England shall have exclusive jurisdiction in relation to any dispute in relation thereto.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end modal terms and conditions -->
<script src="{{ asset('/js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('/assets/js/jquery.parallax-scroll.js') }}"></script>
<script src="{{ asset('/assets/js/jquery.amsifyselect.js') }}"></script>
<script src="{{ asset('/assets/js/lightpick.js') }}"></script>
<script src="{{ asset('/assets/js/custom.js') }}"></script>
