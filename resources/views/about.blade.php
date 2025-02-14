<!DOCTYPE html>
<!--
Template: Metronic Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
Version: 1.0.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->

<head>
    <meta charset="utf-8">
    <title>Metronic One Page</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta content="Metronic Shop UI description" name="description">
    <meta content="Metronic Shop UI keywords" name="keywords">
    <meta content="keenthemes" name="author">

    <meta property="og:site_name" content="-CUSTOMER VALUE-">
    <meta property="og:title" content="-CUSTOMER VALUE-">
    <meta property="og:description" content="-CUSTOMER VALUE-">
    <meta property="og:type" content="website">
    <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for social media -->
    <meta property="og:url" content="-CUSTOMER VALUE-">

    <link rel="shortcut icon" href="{{ asset('assets/favicon.ico') }}">
    <!-- Fonts START -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Pathway+Gothic+One|PT+Sans+Narrow:400+700|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all"
        rel="stylesheet" type="text/css">
    <!-- Fonts END -->
    <!-- Global styles BEGIN -->
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Global styles END -->
    <!-- Page level plugin styles BEGIN -->
    <link href="{{ asset('assets/pages/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/fancybox/source/jquery.fancybox.css') }}" rel="stylesheet">
    <!-- Page level plugin styles END -->
    <!-- Theme styles BEGIN -->
    <link href="{{ asset('assets/pages/css/components.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/pages/css/slider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/onepage/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/onepage/css/style-responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/onepage/css/themes/red.css') }}" rel="stylesheet" id="style-color">
    <link href="{{ asset('assets/onepage/css/custom.css') }}" rel="stylesheet">
</head>

<!--DOC: menu-always-on-top class to the body element to set menu on top -->

<body class="menu-always-on-top">
    @include('navbar')
    <!-- BEGIN STYLE CUSTOMIZER -->
    <div class="color-panel">
        <div class="color-mode-icons icon-color"></div>
        <div class="color-mode-icons icon-color-close"></div>
        <div class="color-mode">
            <p>THEME COLOR</p>
            <ul class="inline">
                <li class="color-red current color-default" data-style="red"></li>
                <li class="color-blue" data-style="blue"></li>
                <li class="color-green" data-style="green"></li>
                <li class="color-orange" data-style="orange"></li>
                <li class="color-gray" data-style="gray"></li>
                <li class="color-turquoise" data-style="turquoise"></li>
            </ul>
            <p>MENU POSITION</p>
            <select class="form-control menu-pos">
                <option value="bottom">Bottom</option>
                <option value="top">Top</option>
            </select>
        </div>
    </div>
    <!-- END BEGIN STYLE CUSTOMIZER -->

    <!-- Header BEGIN -->
    {{-- <div class="header header-mobi-ext">
        <div class="container">
            <div class="row">
                <!-- Logo BEGIN -->
                <div class="col-md-2 col-sm-2">
                    <a class="scroll site-logo" href="#promo-block"><img src="assets/onepage/img/logo/red.png"
                            alt="Metronic One Page"></a>
                </div>
                <!-- Logo END -->
                <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>
                <!-- Navigation BEGIN -->
                <div class="col-md-10 pull-right">
                    <ul class="header-navigation">
                        <li class="current"><a href="#promo-block">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#benefits">Benefits</a></li>
                        <li><a href="#prices">Pricing</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <!-- Navigation END -->
            </div>
        </div>
    </div> --}}
    <!-- Header END -->

    <!-- Promo block BEGIN -->
    <div class="promo-block" id="promo-block">
        <div id="carousel-example-generic" class="carousel slide carousel-slider" style="margin-top: 60px;">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <!-- First slide -->
                <div class="item carousel-item-one active">
                    <div class="center-block">
                        <div class="center-block-wrap">
                            <div class="center-block-body">
                                <h2 class="margin-bottom-20 animate-delay carousel-title-v1"
                                    data-animation="animated fadeInDown">
                                    United <span class="color-red">Company for E-Commerce</span>
                                </h2>
                                <div class="animated flipInX">
                                    <div class="hidden-xs">
                                        <i class="promo-like fa fa-thumbs-up"></i>
                                        <div class="promo-like-text">
                                            <h2>Let's just do it</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing<br> elit amet sed
                                                diam nonummy nibh <a href="javascript:void(0);">dolore</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Second slide -->
                <div class="item carousel-item-two">
                    <h2 class="carousel-position-one animate-delay carousel-title-v1"
                        data-animation="animated fadeInDown">
                        Extremely <span class="color-red">Responsive</span> design
                    </h2>
                    <img class="carousel-position-two hidden-sm hidden-xs animate-delay"
                        src="assets/onepage/img/slider/Slide2_iphone_left.png" alt="Iphone"
                        data-animation="animated fadeInUp">
                    <img class="carousel-position-three hidden-sm hidden-xs animate-delay"
                        src="assets/onepage/img/slider/Slide2_iphone_right.png" alt="Iphone"
                        data-animation="animated fadeInUp">
                </div>

                <!-- Third slide -->
                <div class="item carousel-item-three">
                    <div class="center-block">
                        <div class="center-block-wrap">
                            <div class="center-block-body">
                                <h3 class="margin-bottom-20 animate-delay carousel-title-v2"
                                    data-animation="animated fadeInDown">
                                    The clearest way into the Universe <br /> is through a forest wilderness.
                                </h3>
                                <span class="carousel-subtitle-v1">John Muir</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <!-- Promo block END -->

    <!-- About block BEGIN -->
    <div class="about-block content content-center" id="about">
        <div class="container">
            <h2><strong>Metronic</strong> Inspires</h2>
            <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h4>
            <div class="ab-trio">
                <img src="assets/onepage/img/trio.png" alt="" class="img-responsive">
                <div class="ab-cirlce ab-cirle-blue">
                    <i class="fa fa-code"></i>
                    <strong>Clean Code</strong>
                </div>
                <div class="ab-cirlce ab-cirle-red">
                    <i class="fa fa-gift"></i>
                    <strong>Huge Updates</strong>
                </div>
                <div class="ab-cirlce ab-cirle-green">
                    <i class="fa fa-mobile"></i>
                    <strong>Responsive</strong>
                </div>
            </div>
        </div>
    </div>
    <!-- About block END -->

    <!-- Services block BEGIN -->
    <div class="services-block content content-center" id="services">
        <div class="container">
            <h2>Our <strong>services</strong></h2>
            <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h4>
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12 item">
                    <i class="fa fa-heart"></i>
                    <h3>Fantastic Support</h3>
                    <p>Lorem ipsum et dolor amet<br> consectetuer diam</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 item">
                    <i class="fa fa-mobile"></i>
                    <h3>Mobile Solutions</h3>
                    <p>Lorem ipsum et dolor amet<br> consectetuer diam</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 item">
                    <i class="fa fa-signal"></i>
                    <h3>Market Analysis</h3>
                    <p>Lorem ipsum et dolor amet<br> consectetuer diam</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 item">
                    <i class="fa fa-camera"></i>
                    <h3>Photography</h3>
                    <p>Lorem ipsum et dolor amet<br> consectetuer diam</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Services block END -->

    <!-- Message block BEGIN -->
    <div class="message-block content content-center valign-center" id="message-block">
        <div class="valign-center-elem">
            <h2>The details are not the details <strong>They make the design</strong></h2>
            <em>KEEN THEMES</em>
        </div>
    </div>
    <!-- Message block END -->

    <!-- Team block BEGIN -->
    <div class="team-block content content-center margin-bottom-40" id="team">
        <div class="container">
            <h2>Meet <strong>the team</strong></h2>
            <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h4>
            <div class="row">
                <div class="col-md-4 item">
                    <img src="assets/onepage/img/people/img6-large.jpg" alt="Marcus Doe" class="img-responsive">
                    <h3>Marcus Doe</h3>
                    <em>Founder</em>
                    <p>Lorem ipsum dolor amet, tempor ut labore magna tempor dolore</p>
                    <div class="tb-socio">
                        <a href="javascript:void(0);" class="fa fa-facebook"></a>
                        <a href="javascript:void(0);" class="fa fa-twitter"></a>
                        <a href="javascript:void(0);" class="fa fa-google-plus"></a>
                    </div>
                </div>
                <div class="col-md-4 item">
                    <img src="assets/onepage/img/people/img7-large.jpg" alt="Elena Taylor" class="img-responsive">
                    <h3>Elena Taylor</h3>
                    <em>Designer</em>
                    <p>Lorem ipsum dolor amet, tempor ut labore magna tempor dolore</p>
                    <div class="tb-socio">
                        <a href="javascript:void(0);" class="fa fa-facebook"></a>
                        <a href="javascript:void(0);" class="fa fa-twitter"></a>
                        <a href="javascript:void(0);" class="fa fa-google-plus"></a>
                    </div>
                </div>
                <div class="col-md-4 item">
                    <img src="assets/onepage/img/people/img8-large.jpg" alt="Cris Nilson" class="img-responsive">
                    <h3>Cris Nilson</h3>
                    <em>Developer</em>
                    <p>Lorem ipsum dolor amet, tempor ut labore magna tempor dolore</p>
                    <div class="tb-socio">
                        <a href="javascript:void(0);" class="fa fa-facebook"></a>
                        <a href="javascript:void(0);" class="fa fa-twitter"></a>
                        <a href="javascript:void(0);" class="fa fa-google-plus"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team block END -->

    <!-- Portfolio block BEGIN -->
    <div class="portfolio-block content content-center" id="portfolio">
        <div class="container">
            <h2 class="margin-bottom-50">Latest <strong>works</strong></h2>
        </div>
        <div class="row">
            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="assets/onepage/img/portfolio/2.jpg" alt="NAME" class="img-responsive">
                <a href="assets/onepage/img/portfolio/2.jpg" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong>London City Project</strong>
                        <em>Property</em>
                        <b>Details</b>
                    </div>
                </a>
            </div>
            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="assets/onepage/img/portfolio/6.jpg" alt="NAME" class="img-responsive">
                <a href="assets/onepage/img/portfolio/6.jpg" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong>London City Project</strong>
                        <em>Property</em>
                        <b>Details</b>
                    </div>
                </a>
            </div>
            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="assets/onepage/img/portfolio/8.jpg" alt="NAME" class="img-responsive">
                <a href="assets/onepage/img/portfolio/8.jpg" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong>London City Project</strong>
                        <em>Property</em>
                        <b>Details</b>
                    </div>
                </a>
            </div>
            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="assets/onepage/img/portfolio/3.jpg" alt="NAME" class="img-responsive">
                <a href="assets/onepage/img/portfolio/3.jpg" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong>London City Project</strong>
                        <em>Property</em>
                        <b>Details</b>
                    </div>
                </a>
            </div>
            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="assets/onepage/img/portfolio/5.jpg" alt="NAME" class="img-responsive">
                <a href="assets/onepage/img/portfolio/5.jpg" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong>London City Project</strong>
                        <em>Property</em>
                        <b>Details</b>
                    </div>
                </a>
            </div>
            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="assets/onepage/img/portfolio/4.jpg" alt="NAME" class="img-responsive">
                <a href="assets/onepage/img/portfolio/4.jpg" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong>London City Project</strong>
                        <em>Property</em>
                        <b>Details</b>
                    </div>
                </a>
            </div>
            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="assets/onepage/img/portfolio/1.jpg" alt="NAME" class="img-responsive">
                <a href="assets/onepage/img/portfolio/1.jpg" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong>London City Project</strong>
                        <em>Property</em>
                        <b>Details</b>
                    </div>
                </a>
            </div>
            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="assets/onepage/img/portfolio/10.jpg" alt="NAME" class="img-responsive">
                <a href="assets/onepage/img/portfolio/10.jpg" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong>London City Project</strong>
                        <em>Property</em>
                        <b>Details</b>
                    </div>
                </a>
            </div>
            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="assets/onepage/img/portfolio/9.jpg" alt="NAME" class="img-responsive">
                <a href="assets/onepage/img/portfolio/9.jpg" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong>London City Project</strong>
                        <em>Property</em>
                        <b>Details</b>
                    </div>
                </a>
            </div>
            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="assets/onepage/img/portfolio/7.jpg" alt="NAME" class="img-responsive">
                <a href="assets/onepage/img/portfolio/7.jpg" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong>London City Project</strong>
                        <em>Property</em>
                        <b>Details</b>
                    </div>
                </a>
            </div>
            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="assets/onepage/img/portfolio/2.jpg" alt="NAME" class="img-responsive">
                <a href="assets/onepage/img/portfolio/2.jpg" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong>London City Project</strong>
                        <em>Property</em>
                        <b>Details</b>
                    </div>
                </a>
            </div>
            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="assets/onepage/img/portfolio/8.jpg" alt="NAME" class="img-responsive">
                <a href="assets/onepage/img/portfolio/8.jpg" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong>London City Project</strong>
                        <em>Property</em>
                        <b>Details</b>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Portfolio block END -->

    <!-- Choose us block BEGIN -->
    <div class="choose-us-block content text-center margin-bottom-40" id="benefits">
        <div class="container">
            <h2>Why to <strong>choose us</strong></h2>
            <h4>Lorem ipsum dolor sit amet, <a href="javascript:void(0);">consectetuer adipiscing</a> elit, sed diam
                nonummy<br> nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</h4>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                    <img src="assets/onepage/img/choose-us.png" alt="Why to choose us" class="img-responsive">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                    <div class="panel-group" id="accordion1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1"
                                        href="#accordion1_1">Lorem ipsum dolor sit amet</a>
                                </h5>
                            </div>
                            <div id="accordion1_1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim minim veniam quis nostrud
                                        exercitation dolore magna ullamco.</p>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco sed eiusmod tempor ut
                                        labore et dolore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                        data-parent="#accordion1" href="#accordion1_2">Consectetur adipisicing
                                        elit</a>
                                </h5>
                            </div>
                            <div id="accordion1_2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim minim veniam quis nostrud
                                        exercitation dolore magna ullamco.</p>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco sed eiusmod tempor ut
                                        labore et dolore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                        data-parent="#accordion1" href="#accordion1_3">Augue assum anteposuerit
                                        dolore</a>
                                </h5>
                            </div>
                            <div id="accordion1_3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim minim veniam quis nostrud
                                        exercitation dolore magna ullamco.</p>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco sed eiusmod tempor ut
                                        labore et dolore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                        data-parent="#accordion1" href="#accordion1_4">Sollemnes in futurum</a>
                                </h5>
                            </div>
                            <div id="accordion1_4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim minim veniam quis nostrud
                                        exercitation dolore magna ullamco.</p>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco sed eiusmod tempor ut
                                        labore et dolore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                        data-parent="#accordion1" href="#accordion1_5">Nostrud Tempor veniam</a>
                                </h5>
                            </div>
                            <div id="accordion1_5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim minim veniam quis nostrud
                                        exercitation dolore magna ullamco.</p>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco sed eiusmod tempor ut
                                        labore et dolore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                        data-parent="#accordion1" href="#accordion1_6">Ut enem magana sed dolore</a>
                                </h5>
                            </div>
                            <div id="accordion1_6" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim minim veniam quis nostrud
                                        exercitation dolore magna ullamco.</p>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco sed eiusmod tempor ut
                                        labore et dolore.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Choose us block END -->

    <!-- Checkout block BEGIN -->
    <div class="checkout-block content">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h2>CHECK OUT ADMIN THEME! <em>Most Full Featured &amp; Powerfull Admin Theme</em></h2>
                </div>
                <div class="col-md-2 text-right">
                    <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes&amp;utm_source=download&amp;utm_medium=banner&amp;utm_campaign=metronic_frontend_freebie"
                        target="_blank" class="btn btn-primary">Live preview</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout block END -->

    <!-- Facts block BEGIN -->
    <div class="facts-block content content-center" id="facts-block">
        <h2>Some facts about us</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="item">
                        <strong>39</strong>
                        Projects Completed
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="item">
                        <strong>14</strong>
                        Team Members
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="item">
                        <strong>29k+</strong>
                        Products Sold
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="item">
                        <strong>500</strong>
                        Weekly Sales
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts block END -->

    <!-- Prices block BEGIN -->
    <div class="prices-block content content-center" id="prices">
        <div class="container">
            <h2 class="margin-bottom-50"><strong>Pricing</strong> Tables</h2>
            <div class="row">
                <!-- Pricing item BEGIN -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="pricing-item">
                        <div class="pricing-head">
                            <h3>Beginner</h3>
                            <p>Lorem ipsum dolor</p>
                        </div>
                        <div class="pricing-content">
                            <div class="pi-price">
                                <strong>$<em>19</em></strong>
                                <p>Per Month</p>
                            </div>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-circle"></i> Lorem ipsum dolor</li>
                                <li><i class="fa fa-circle"></i> Lorem ipsum dolor</li>
                                <li><i class="fa fa-circle"></i> Lorem ipsum dolor</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a class="btn btn-default" href="javascript:void(0);">Sign Up</a>
                        </div>
                    </div>
                </div>
                <!-- Pricing item END -->
                <!-- Pricing item BEGIN -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="pricing-item">
                        <div class="pricing-head">
                            <h3>Pro</h3>
                            <p>Lorem ipsum dolor</p>
                        </div>
                        <div class="pricing-content">
                            <div class="pi-price">
                                <strong>$<em>25</em></strong>
                                <p>Per Month</p>
                            </div>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-circle"></i> Lorem ipsum dolor</li>
                                <li><i class="fa fa-circle"></i> Lorem ipsum dolor</li>
                                <li><i class="fa fa-circle"></i> Lorem ipsum dolor</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a class="btn btn-default" href="javascript:void(0);">Sign Up</a>
                        </div>
                    </div>
                </div>
                <!-- Pricing item END -->
                <!-- Pricing item BEGIN -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="pricing-item">
                        <div class="pricing-head">
                            <h3>Expert</h3>
                            <p>Lorem ipsum dolor</p>
                        </div>
                        <div class="pricing-content">
                            <div class="pi-price">
                                <strong>$<em>59</em></strong>
                                <p>Per Month</p>
                            </div>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-circle"></i> Lorem ipsum dolor</li>
                                <li><i class="fa fa-circle"></i> Lorem ipsum dolor</li>
                                <li><i class="fa fa-circle"></i> Lorem ipsum dolor</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a class="btn btn-default" href="javascript:void(0);">Sign Up</a>
                        </div>
                    </div>
                </div>
                <!-- Pricing item END -->
                <!-- Pricing item BEGIN -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="pricing-item">
                        <div class="pricing-head">
                            <h3>Hi-Tech</h3>
                            <p>Lorem ipsum dolor</p>
                        </div>
                        <div class="pricing-content">
                            <div class="pi-price">
                                <strong>$<em>98</em></strong>
                                <p>Per Month</p>
                            </div>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-circle"></i> Lorem ipsum dolor</li>
                                <li><i class="fa fa-circle"></i> Lorem ipsum dolor</li>
                                <li><i class="fa fa-circle"></i> Lorem ipsum dolor</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a class="btn btn-default" href="javascript:void(0);">Sign Up</a>
                        </div>
                    </div>
                </div>
                <!-- Pricing item END -->
            </div>
        </div>
    </div>
    <!-- Prices block END -->

    <!-- Testimonials block BEGIN -->
    <div class="testimonials-block content content-center margin-bottom-65">
        <div class="container">
            <h2>Customer <strong>testimonials</strong></h2>
            <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h4>
            <div class="carousel slide" data-ride="carousel" id="testimonials-block">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <!-- Carousel items -->
                    <div class="active item">
                        <blockquote>
                            <p>This is the most awesome, full featured, easy, costomizeble theme. It’s extremely
                                responsive and very helpful to all suggestions.</p>
                        </blockquote>
                        <span class="testimonials-name">Mark Doe</span>
                    </div>
                    <!-- Carousel items -->
                    <div class="item">
                        <blockquote>
                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown
                                aliqua, retro synth master cleanse.</p>
                        </blockquote>
                        <span class="testimonials-name">Joe Smith</span>
                    </div>
                    <!-- Carousel items -->
                    <div class="item">
                        <blockquote>
                            <p>Williamsburg carles vegan helvetica. Cosby sweater eu banh mi, qui irure terry richardson
                                ex squid Aliquip placeat salvia cillum iphone.</p>
                        </blockquote>
                        <span class="testimonials-name">Linda Adams</span>
                    </div>
                </div>
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#testimonials-block" data-slide-to="0" class="active"></li>
                    <li data-target="#testimonials-block" data-slide-to="1"></li>
                    <li data-target="#testimonials-block" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
    </div>
    <!-- Testimonials block END -->

    <!-- Partners block BEGIN -->
    <div class="partners-block">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <img src="assets/onepage/img/partners/cisco.png" alt="cisco">
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <img src="assets/onepage/img/partners/walmart.png" alt="walmart">
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <img src="assets/onepage/img/partners/gamescast.png" alt="gamescast">
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <img src="assets/onepage/img/partners/spinwokrx.png" alt="spinwokrx">
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <img src="assets/onepage/img/partners/ngreen.png" alt="ngreen">
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <img src="assets/onepage/img/partners/vimeo.png" alt="vimeo">
                </div>
            </div>
        </div>
    </div>
    <!-- Partners block END -->

    <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer" id="contact">
        <div class="container">
            <div class="row">
                <!-- BEGIN BOTTOM ABOUT BLOCK -->
                <div class="col-md-4 col-sm-6 pre-footer-col">
                    <h2>About us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquarm erat sit volutpat. Nostrud exerci tation ullamcorper
                        suscipit lobortis nisl aliquip commodo consequat. </p>
                    <p>Duis autem vel eum iriure dolor vulputate velit esse molestie at dolore.</p>
                </div>
                <!-- END BOTTOM ABOUT BLOCK -->
                <!-- BEGIN TWITTER BLOCK -->
                <div class="col-md-4 col-sm-6 pre-footer-col">
                    <h2 class="margin-bottom-0">Latest Tweets</h2>
                    <a class="twitter-timeline" href="https://twitter.com/twitterapi" data-tweet-limit="2"
                        data-theme="dark" data-link-color="#57C8EB" data-widget-id="455411516829736961"
                        data-chrome="noheader nofooter noscrollbar noborders transparent">Loading tweets by
                        @keenthemes...</a>
                </div>
                <!-- END TWITTER BLOCK -->
                <div class="col-md-4 col-sm-6 pre-footer-col">
                    <!-- BEGIN BOTTOM CONTACTS -->
                    <h2>Our Contacts</h2>
                    <address class="margin-bottom-20">
                        35, Lorem Lis Street, Park Ave<br>
                        California, US<br>
                        Phone: 300 323 3456<br>
                        Fax: 300 323 1456<br>
                        Email: <a href="mailto:info@metronic.com">info@metronic.com</a><br>
                        Skype: <a href="skype:metronic">metronic</a>
                    </address>
                    <!-- END BOTTOM CONTACTS -->
                    <div class="pre-footer-subscribe-box">
                        <h2>Newsletter</h2>
                        <form action="javascript:void(0);">
                            <div class="input-group">
                                <input type="text" placeholder="youremail@mail.com" class="form-control">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="submit">Subscribe</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PRE-FOOTER -->

    <!-- BEGIN FOOTER -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <!-- BEGIN COPYRIGHT -->
                <div class="col-md-4 col-sm-4">
                    <div class="copyright">2014 © Metronic One Page. ALL Rights Reserved.</div>
                </div>
                <!-- END COPYRIGHT -->
                <!-- BEGIN SOCIAL ICONS -->
                <div class="col-md-4 col-sm-4">
                    <ul class="social-icons">
                        <li><a class="rss" data-original-title="rss" href="javascript:void(0);"></a></li>
                        <li><a class="facebook" data-original-title="facebook" href="javascript:void(0);"></a></li>
                        <li><a class="twitter" data-original-title="twitter" href="javascript:void(0);"></a></li>
                        <li><a class="googleplus" data-original-title="googleplus" href="javascript:void(0);"></a>
                        </li>
                        <li><a class="linkedin" data-original-title="linkedin" href="javascript:void(0);"></a></li>
                        <li><a class="youtube" data-original-title="youtube" href="javascript:void(0);"></a></li>
                        <li><a class="vimeo" data-original-title="vimeo" href="javascript:void(0);"></a></li>
                        <li><a class="skype" data-original-title="skype" href="javascript:void(0);"></a></li>
                    </ul>
                </div>
                <!-- END SOCIAL ICONS -->
                <!-- BEGIN COPYRIGHT -->
                <div class="col-md-4 col-sm-4 text-right">
                    <p class="powered">Powered by: <a href="http://www.keenthemes.com/">KeenThemes.com</a></p>
                </div>
                <!-- END COPYRIGHT -->
            </div>
        </div>
    </div>
    <!-- END FOOTER -->
    <a href="#promo-block" class="go2top scroll"><i class="fa fa-arrow-up"></i></a>

    <!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<![endif]-->
    <!-- Load JavaScripts at the bottom, because it will reduce page load time -->
    <!-- Core plugins BEGIN (For ALL pages) -->
    <script src="{{ asset('assets/plugins/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/jquery-migrate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <!-- Core plugins END (For ALL pages) -->
    <!-- Core plugins BEGIN (required only for current page) -->
    <script src="{{ asset('assets/plugins/fancybox/source/jquery.fancybox.pack.js') }}" type="text/javascript"></script><!-- pop up -->
    <script src="{{ asset('assets/plugins/jquery.easing.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery.parallax.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('assets/onepage/scripts/jquery.nav.js') }}"></script>
    <!-- Core plugins END (required only for current page) -->
    <!-- Global js BEGIN -->
    <script src="{{ asset('assets/onepage/scripts/layout.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/pages/scripts/bs-carousel.js') }}" type="text/javascript"></script>
    <script>
        jQuery(document).ready(function() {
            Layout.init();
        });
    </script>

    <!-- Global js END -->
</body>

</html>
