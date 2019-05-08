<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>clinic</title>

        <link href="frontend/bootstrap/css/bootstrap.min1279.css?v1.5.3" rel="stylesheet">
        <link href="frontend/assets/css/owl.carousel1279.css?v1.5.3" rel="stylesheet" type="text/css">
        <link href="frontend/assets/css/owl.theme1279.css?v1.5.3" rel="stylesheet" type="text/css">
        <link href="frontend/assets/css/header1279.css?v1.5.3" rel="stylesheet" type="text/css">
        <link href="frontend/assets/css/footer1279.css?v1.5.3" rel="stylesheet" type="text/css">
        <link href="frontend/assets/css/tooltip1279.css?v1.5.3" rel="stylesheet" type="text/css">
        <link href="frontend/assets/css/sticky-footer1279.css?v1.5.3" rel="stylesheet" type="text/css">
        <link href="frontend/assets/css/oladoc-icon1279.css?v1.5.3" rel="stylesheet" type="text/css">
        <link href="frontend/assets/css/section1279.css?v1.5.3" rel="stylesheet" type="text/css">
        <link href="frontend/assets/css/main1279.css?v1.5.3" rel="stylesheet" type="text/css">
        <link href="frontend/assets/css/preview-of-article1279.css?v1.5.3" rel="stylesheet" type="text/css">
        <link href="frontend/assets/css/media1279.css?v1.5.3" media="all" rel="stylesheet" type="text/css">
        <link href="frontend/assets/css/jquery-ui.css" rel="stylesheet" type="text/css">
        <link href="frontend/fontello/css/md-embedded1279.css?v1.5.3" rel="stylesheet">

        <link href="frontend/assets/css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="frontend/assets/css/easy-responsive-tabs.css" rel="stylesheet" type="text/css">
        <link href="frontend/assets/css/jquery.dataTables.css" rel="stylesheet" type="text/css">
        <script src="frontend/bootstrap/js/typeahead.min.js" type="1d2c8a7024420f104c0feeb6-text/javascript"></script>
        <link rel="stylesheet" href="frontend/assets/css/wow.css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <script src="../ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="1d2c8a7024420f104c0feeb6-text/javascript"></script>
        <script src="frontend/bootstrap/js/typeahead.min.js" type="1d2c8a7024420f104c0feeb6-text/javascript"></script>
        <link rel="shortcut icon" type="image/png" href="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/icons/favicon.png" />
        <link rel="stylesheet" href="frontend/assets/css/lightslider.css" />
        <link rel="stylesheet" href="frontend/assets/css/wow.css" />
        <style>
            body{
                font-size:16px;
            }
            .alertuser.mobile {
                right: 115px;
            }

            .fixed-menu-right .active a {
                background: #f05360;
            }

            .link-doctor-item {
                text-decoration: none;
            }

            .link-doctor-item:hover {
                text-decoration: none;
            }

            .post-image img {
                height: 200px;
                width: 100%;
            }

            .col-md-3.col-sm-6.blog-post-item img {
                height: 150px;
                width: 100%;
            }

            .col-md-6.col-sm-6.blog-post-item {
                margin-bottom: 25px;
            }

            .col-md-3.col-sm-6.blog-post-item {
                height: 220px;
            }

            .col-md-6.col-sm-6.blog-post-item {
                height: 250px;
            }

            .post-tile a {
                color: #717273;
            }

            .post-tile a:hover {
                color: #717273;
                text-decoration: none;
            }

            .post-text {
                color: #666565;
            }

            .col-md-4.col-sm-6.blog-post-item img {
                border: 1px solid #c8cdce;
            }

            .col-md-6 .post-image {
                float: left;
                margin-bottom: 0;
                margin-right: 15px;
                width: 65%;
            }

            .col-md-6.col-sm-6.blog-post-item h3 {
                margin-top: 0px !important;
                line-height: 25px;
            }

            .app-section-headeing h4 {
                color: #fff;
                font-size: 20px;
                font-weight: 300;
            }

            .app-section-headeing h3 {
                color: #fff;
                font-size: 28px;
                font-weight: 400;
            }

            .similar-doctor-data {
                margin-bottom: 40px;
            }

            .similar-doctor-list {
                margin-bottom: 0px;
            }

            .ftr-tabs.nav.nav-tabs.container {
                margin-bottom: 25px;
            }

            .ftr-doctor-heading {
                margin-bottom: 40px;
                text-align: center;
            }

            .ftr-tabs.nav.nav-tabs li {
                float: none;
                padding: 0px;
            }

            @media(max-width: 768px) {
                .ftr-tabs.nav.nav-tabs li {
                    border: 1px solid #ddd;
                }
            }
            .ftr-tabs.nav.nav-tabs li a {
                font-size: 15px;
                padding: 25px 0px;
            }

            .form-fields i {
                color: #ff9e15;
            }

            .ftr-doctor-outer .similar-doctor-list-book {
                background: #f8525f none repeat scroll 0 0;
                color: #fff;
                text-decoration: none;
            }

            .similar-doctor-list-book,
            .hospital-doctor-list-book {
                margin-bottom: 0px;
            }

            .similar-doctor-data h3 {
                height: auto;
                line-height: normal;
                margin-top: 0px;
                margin-bottom: 15px !important;
            }

            .similar-doctor-data img,
            .hospital-doctor-data img {
                margin-bottom: 8px;
            }

            .similar-doctor h2 {
                display: block;
                height: auto;
                line-height: normal;
                margin-bottom: 10px !important;
                margin-top: 0px;
                font-size: 14px;
                white-space: nowrap;
            }

            .color-green {
                color: #00c8cf;
            }

            .ftr-doctor-inner {
                background: #767979;
                padding: 5px 8px;
            }

            .banner-ftr-doctor img {
                width: 50px;
                height: 50px;
                display: block;
                margin-bottom: 5px;
            }

            .banner-ftr-doctor {
                background: #767979 none repeat scroll 0 0;
                bottom: 0;
                color: #fff;
                left: 8px;
                position: absolute;
                width: 265px;
            }

            .ftr-doctor-inner.ftr-active {
                display: block !important;
                transition: all 0.5s ease;
            }

            .banner-ftr-doc-name {
                font-weight: 600;
            }

            .banner-ftr-detail {
                float: right;
                padding-top: 8px;
                width: 72%;
            }

            .circle-image-outer {
                float: left;
            }

            .banner-ftr-detail span {
                display: block;
            }

            .banner-ftr-doctor a {
                text-decoration: none;
                outline: none;
                color: #fff;
            }

            .banner-ftr-doctor a:hover {
                text-decoration: none;
                outline: none;
                color: #fff;
            }

            .span-counter {
                color: #ff9e15;
                font-size: 47px;
                font-weight: 400;
                margin-right: 10px;
            }

            @media (max-width: 992px) {
                .span-counter {
                    font-size: 21px;
                }
            }
            @media (max-width: 400px) {
            }
            .span-pink {
                color: #f8525f;
            }

            .counter-plus {
                color: #f8525f;
                font-size: 49px;
                font-weight: 400;
            }

            .v-verified {
                display: inline-block;
                height: 50px;
                position: relative;
                width: 38px;
            }

            .v-verified > img {
                bottom: 0;
                height: auto;
                position: absolute;
                right: -10px;
                width: 100%;
            }

            .finding-doctor-txt {
                color: #b8bbbe;
            }

            .home-banner-heading {
                color: #fff;
            }

            .blog-wrapper {
                display: none;
            }
            .for-mobile{
                text-transform: none;
            }
            ul.nav-tabs{
                border:none;
                border-radius: 2px;
                overflow: hidden;
            }
            .li-1{
                border-left:1px solid #15359a;
            }
            marquee img {
                filter: grayscale(1);
            }
            .fs-18{
                font-size: 18px;
            }
            .h1{
                font-size: 24px;
            }
        </style>
    </head>
    <body>
        <header class="site-header py-md-0">
            <!--            <nav class="bg-dark d-none d-md-block">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 text-right">
                                        <a href="tel:04238900939" class="call-number py-1 no-underline" style="display: inline-block;">
                                            <span class="text-white">Book appointment now: </span>
                                            <span class="text-warning">04238900939</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </nav>-->
            <div class="container">
                <div class="d-lg-flex align-items-center justify-content-between oladoc-logo" style="margin-top: 9px; padding-bottom: 6px;">
                    <a href="index.html">
                        CLINIC
                    </a>
                    <nav class="main-nav-bar">
                        <ul class="nav-menu-outer">
                            <li class="menu-item active hide"><a href="index.html">Home</a></li>
                            <li class="menu-item"><a class="btn btn-primary-outline" href="for-doctors.html">Join as a doctor</a></li>
                            <li class="menu-item" id="login"><a href="#" data-toggle="modal" data-target="#modal_login">Login</a></li>
                            <li class="menu-item item-for-doctors d-none"><a href="for-doctors.html">For Doctors</a></li>
                            <li class="dropdown d-none d-md-inline-block">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sign Up</a>
                                <ul class="dropdown-menu" style="top: 150%;right: 50%;transform: translate(50%,0);margin: 0;">
                                    <li class="w-100"><a data-toggle="modal" data-target="#signup-modal" class="w-100" href="#">
                                            <span data-toggle="tab" data-target="#signup_doctors">As a Doctor</span>
                                        </a></li>
                                    <li class="w-100"><a data-toggle="modal" data-target="#signup-modal" class="w-100" href="#">
                                            <span data-toggle="tab" data-target="#users-signup">As a User</span>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="menu-item download-app-icons d-none"><a href="javascript:;" target="_blank">Get App</a>
                                <div class="download-dropdown-container" id="download-dropdown">
                                    <div class="dropdown-box">
                                        <div class="content-container pull-left">
                                            <p class="text-large">MyDoctor.pk App</p>
                                            <div class="text-small">Your Health Connection</div>
                                            <a class="apps-link play-store-img" rel="get" name="HdrAndroidApp" href="https://play.google.com/store/apps/details?id=com.mediconnect.mydoctor" target="_blank" data-bypass=""></a>
                                            <a class="app-store-img apps-link" rel="get" name="HdrIosApp" href="https://itunes.apple.com/us/app/mydoctor-pk/id1225573536?ls=1&amp;mt=8" target="_blank" data-bypass=""></a>
                                        </div>
                                        <div class="phone-app-screen pull-right"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item d-md-none"><a data-toggle="modal" data-target="#signup-modal" class="w-100" href="#">
                                    <span data-toggle="tab" data-target="#signup_doctors">Sign up as a Doctor</span>
                                </a></li>
                            <li class="menu-item d-md-none">
                                <a data-toggle="modal" data-target="#signup-modal" class="w-100" href="#">
                                    <span data-toggle="tab" data-target="#users-signup">Sign up as a User</span>
                                </a
                            </li>
                            <li class="menu-item"><a class="services-link" href="health-zone/index.html">Health Zone</a></li>
                        </ul>
                    </nav>
                    <div class="search-btn-outer">
                    </div>
                    <style>
                        .phone-icon {
                            position: absolute;
                            top: 12px;
                            margin-top: 15px;
                            margin-right: 70px;
                            right: 0;
                        }
                        .phone-icon i {
                            font-size: 23px;
                        }
                        @media (max-width: 480px) {
                            .phone-icon {
                                top: 9px;
                            }
                        }
                    </style>
                    <div class="phone-icon d-md-none">
                        <a id="header-phone-button" class="" href="tel:04238900939">
                            <i class="call-number fa fa-phone text-primary"></i>
                        </a>
                    </div>
                    <div class="dropit-btn"> <span class="sp-1"></span> <span class="sp-2"></span> <span class="sp-3"></span> </div>
                </div>
            </div>
        </header>
        <div class="index-banner-wrapper bg-primary">
            <ul class="fixed-menu-right d-none">
                <li class="fixed-menu-1 active"><a href="javascript:;" onclick="if (!window.__cfRLUnblockHandlers)
        return false;
    select_slide_first(1);" data-cf-modified-1d2c8a7024420f104c0feeb6-=""><i class="fa fa-stethoscope" aria-hidden="true"></i> <span class="hide-span">Doctors</span> </a></li>
                <li class="fixed-menu-3"><a href="labs.html"><i class="fa fa-flask" aria-hidden="true"></i><span class="hide-span">Lab Tests</span></a></li>
                <li class="fixed-menu-4"><a href="javascript:;" onclick="if (!window.__cfRLUnblockHandlers)
                            return false;
                        select_slide_first(4);" data-cf-modified-1d2c8a7024420f104c0feeb6-=""><img src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/tele-health-icon.png" class="pills-image" /> <span class="hide-span">Telehealth</span></a></li>
            </ul>
            <div class="container">
                <div class="row py-md-5">
                    <div class="col-xs-12">
                        <div class="banner-text text-center my-5">
                            <span class="text-white">Find and book the </span>
                            <span class="text-warning">best doctors</span>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="home-search-form-wrapper">
                            <div class="home-serch-container pl-0 pr-0">
                                <div class="home-search-form">
                                    <div class="">
                                        <div class="search-from">
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="doctors">
                                                    <form class="form-horizontal" action="https://oladoc.com/advance_search_filter" method="get">
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-6 mb-3">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <label for="" class="text-white"><small>Choose specialty</small></label>
                                                                        <select name="specializations" class="body-font-size form-control frm-input speciail pl-1">
                                                                           @foreach ($Speciality as $Special)
                                                                            <option value="{{ $Special->specialityID }}">{{ $Special->specialityName }}</option>
                                                                           @endforeach
                                                                               
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-6 mb-3">
                                                                <div class="row">
                                                                     <div class="col-sm-12">
                                                                        <label for="" class="text-white"><small>Gender</small></label>
                                                                        <input type="hidden" name="gender" id="search_gender">
                                                                        <ul class="nav nav-tabs m-0" role="tablist">
                                                                            <li role="presentation" class="li-1 active" style=" width:33.3%;">
                                                                                <a href="#" aria-controls="doctors" role="tab" onclick="if (!window.__cfRLUnblockHandlers)
                                                                                            return false;
                                                                                        set_gender('any');" data-toggle="tab" style="text-transform: none;" class="banner-m-tab" data-cf-modified-1d2c8a7024420f104c0feeb6-="">Any</a>
                                                                            </li>
                                                                            <li role="presentation" class="li-1" style=" width:33.3%;">
                                                                                <a href="#" aria-controls="hac" role="tab" onclick="if (!window.__cfRLUnblockHandlers)
                                                                                            return false;
                                                                                        set_gender('Male');" data-toggle="tab" style="text-transform: none;" class="banner-m-tab bg-white" data-cf-modified-1d2c8a7024420f104c0feeb6-="">Male</a>
                                                                            </li>
                                                                            <li role="presentation" class="li-1" style=" width:33.3%;">
                                                                                <a href="#" aria-controls="hac" role="tab" onclick="if (!window.__cfRLUnblockHandlers)
                                                                                            return false;
                                                                                        set_gender('Female');" data-toggle="tab" style="text-transform: none;" class="banner-m-tab bg-white" data-cf-modified-1d2c8a7024420f104c0feeb6-="">Female</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-fields my-5 text-center">
                                                            <div class="col-sm-4 col-sm-offset-4 col-xs-12">
                                                                <button type="submit" onclick="if (!window.__cfRLUnblockHandlers)
                                                                            return false;
                                                                        return chek_required();" class="btn btn-lg btn-block btn-padded bg-warning text-white rounded btn-doc-search" data-cf-modified-1d2c8a7024420f104c0feeb6-="">Search Now</button>
                                                            </div>
                                                        </div>
                                                        <div class="form-group text-center text-center">
                                                            <label href="#hac" aria-controls="hac" role="tab" data-toggle="tab" class="text-white"><small><u class="clickable">Search for hospitals instead?</u></small></label>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="hac">
                                                    <form class="form-horizontal" id="search-hospital-form" action="https://oladoc.com/search-hospital" method="get">
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-6 mb-3">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <label for="" class="text-white"><small>Hospital's name</small></label>
                                                                        <input type="text" name="name" id="name" value="" class="body-font-size form-control frm-input pl-1" placeholder="Name">
                                                                        <input type="hidden" name="ishosp" value="1" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-6 mb-3">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <label for="" class="text-white"><small>Choose city</small></label>
                                                                        <select class="body-font-size form-control speciail frm-input pl-1" id="city" name="city">
                                                                            <option value="">Select City</option>
                                                                            <option value="Lahore">Lahore</option>
                                                                            <option value="Karachi">Karachi</option>
                                                                            <option value="Islamabad">Islamabad</option>
                                                                            <option value="Rawalpindi">Rawalpindi</option>
                                                                            <option value="Multan">Multan</option>
                                                                            <option value="Faisalabad">Faisalabad</option>
                                                                            <option value="Peshawar">Peshawar</option>
                                                                            <option value="Sargodha">Sargodha</option>
                                                                            <option value="Gujranwala">Gujranwala</option>
                                                                            <option value="Bahawalpur">Bahawalpur</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-fields my-5 text-center">
                                                            <div class="col-sm-4 col-sm-offset-4 col-xs-12">
                                                                <button type="submit" onclick="if (!window.__cfRLUnblockHandlers)
                                                                            return false;
                                                                        return chek_required_hosp();" class="btn btn-lg btn-block btn-padded bg-warning text-white rounded btn-doc-search" data-cf-modified-1d2c8a7024420f104c0feeb6-="">Search Now</button>
                                                            </div>
                                                        </div>
                                                        <div class="form-group text-center">
                                                            <label href="#doctors" aria-controls="doctors" role="tab" data-toggle="tab" class="text-white"><small><u class="clickable">Search for doctors instead?</u></small></label>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-featured-holder d-none">
        </div>
    </div>


    <nav class="sub-menu" style="background-color: #15359a;">
        <div class="container px-0">
            <ul class="list-tabs m-0 row d-md-flex">
                <li class="list-tab-item col-xs-4">
                    <a href="index.html">
                        <img src="https://s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/i-book-doctors.svg" height="24" alt="">
                        <p class="h6 fw-400 text-white text-uppercase mb-0 mt-2">Book Doctors</p>
                    </a>
                </li>
                <li class="list-tab-item col-xs-4">
                    <a href="order-medicines.html">
                        <img src="https://s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/i-order-medicine.svg" height="24" alt="">
                        <p class="h6 fw-400 text-white text-uppercase mb-0 mt-2">Order Medicines</p>
                    </a>
                </li>
                <li class="list-tab-item col-xs-4">
                    <a href="order-lab-tests.html">
                        <img src="https://s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/i-order-lab-tests.svg" height="24" alt="">
                        <p class="h6 fw-400 text-white text-uppercase mb-0 mt-2">Book Lab Tests</p>
                    </a>
                </li>
                <li class="list-tab-item col-xs-4">
                    <a href="forum.html">
                        <img src="https://s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/i-ask-question.svg" height="24" alt="">
                        <p class="h6 fw-400 text-white text-uppercase mb-0 mt-2">Ask A Question</p>
                    </a>
                </li>
                <li class="list-tab-item col-xs-4">
                    <a href="pakistan/lahore/offer.html">
                        <img src="https://s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/i-view-promotions.svg" height="24" alt="">
                        <p class="h6 fw-400 text-white text-uppercase mb-0 mt-2">View Promotions </p>
                    </a>
                </li>
                <li class="list-tab-item col-xs-4">
                    <a href="health-zone/index.html">
                        <img src="https://s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/i-read-articles.svg" height="24" alt="">
                        <p class="h6 fw-400 text-white text-uppercase mb-0 mt-2">Read Articles</p>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <section class="bg-light">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-xs-12 text-center">
                    <h3 class="h3 text-primary fw-400 ">Get your medical questions answered by top doctors</h3>
                </div>
            </div>
            <div class="row d-md-flex align-items-center">
                <div class="col-sm-5 col-md-4 pr-md-5">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="text-center" style="margin-bottom: -4rem;">
                                <img src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/oladoc-child.png" alt="oladoc" height="120">
                            </div>
                            <form method="post" action="https://oladoc.com/forum" class="well card text-center">
                                <div class="card-body pt-3 pt-md-5">
                                    <h4 class="text-black">Advice From Top Local Doctors</h4>
                                    <textarea name="question-title" placeholder="Ask a question" cols="30" maxlength="500" rows="4" class="form-control mb-2 rounded"></textarea>
                                    <input type="submit" class="btn btn-padded btn-block bg-warning text-white" value="ASK A QUESTION">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row d-none">
                        <div class="col-xs-12">
                            <h3 class="h4 text-primary text-center m-0 lh-2">Ask questions in privacy<br>Get answers by top local doctors</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 col-md-8 pl-md-5 ov-h">

                    <div class="row my-2">
                        <div class="col-xs-11">
                            <div class="well m-0 p-2">
                                <p class=" mt-0 d-block no-underline lh-2" style="display: -webkit-box; -webkit-line-clamp: 2;-webkit-box-orient: vertical; overflow: hidden;">I get upper chest pain while breathing heavily, coughing or sneezing. I also have dry cough but no signs of fever. I am a regular smoker (3 - 4 cigarettes a day).</p>
                                <div class="row d-flex align-items-center">
                                    <div class="col-xs-2 col-sm-1 pr-1">
                                        <img src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/avatar.png" alt="">
                                    </div>
                                    <div class="col-xs-10 col-sm-11 pl-0">
                                        <span class="text-secondary">
                                            <small>Asked for Female, </small>
                                        </span>
                                        <span class="text-secondary">
                                            <small>23 years</small>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-xs-11 col-xs-offset-1 ml-md-4">
                            <div class="p-4 bg-white border rounded">
                                <div class="row d-flex align-items-center">
                                    <div class="col-xs-3 col-sm-2 pr-0">
                                        <div style="height: 0; padding-bottom: 100%; background-image: url('../s3-eu-west-1.amazonaws.com/mdpk/images/profile-pics/doctors/1516182011_mohammad-irfan-malik.jpg'); background-size: cover; background-position: center; border-radius: 1000px;"></div>
                                    </div>
                                    <div class="col-xs-9 col-sm-10">
                                        <p class="m-0">Dr. Mohammad Irfan Malik</p>
                                        <p class="m-0 text-secondary">Pulmonologist, Sleep Medicine Doctor</p>
                                    </div>
                                </div>
                                <div class="row pt-4">
                                    <div class="col-sm-12">
                                        <p class="question-details m-0" style="word-break: break-word;">Dear Patient,<br>
                                            <br>
                                            Hello. I understand your concerns. You might have bronchitis. You will need to undergo a detailed examination and investigations like chest x-ray to look for infection. if it's normal then you will need to undergo pulmonary function test which is needed for diagnosis and also to assess severity of bronchitis based on which treatment can be started.
                                            <br><br>
                                            You can book an appointment with me through oladoc.com.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-xs-12 col-sm-11 col-sm-offset-1 text-center">
                            <a href="forum.html" class="btn btn-padded bg-primary text-white">VIEW ALL QUESTIONS</a>
                        </div>
                    </div>
                </div>
                </section>
                <section class="bg-white">
                    <div class="container py-5">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <h3 class="h3 text-primary fw-400">Book appointments in 3 easy steps</h3>
                            </div>
                        </div>
                        <div class="row d-md-flex align-items-center">
                            <div class="col-md-6">
                                <ul class="container-fluid py-5">
                                    <li class="row d-flex align-items-center bg-light z-depth-1 mb-2">
                                        <div class="col-xs-3 col-sm-2 p-0">
                                            <img class="img-responsive p-2" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/icons/search.png" alt="Search"></img>
                                        </div>
                                        <div class="col-xs-9 col-sm-10 p-0">
                                            <p class="fw-700 text-primary m-0">1. Search</p>
                                            <p class="m-0">by Specialty, Hospital or City</p>
                                        </div>
                                    </li>
                                    <li class="row d-flex align-items-center bg-light z-depth-1 mb-2">
                                        <div class="col-xs-3 col-sm-2 p-0">
                                            <img class="img-responsive p-2" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/icons/checked.png" alt="Select"></img>
                                        </div>
                                        <div class="col-xs-9 col-sm-10 p-0">
                                            <p class="fw-700 text-primary m-0">2. Select</p>
                                            <p class="m-0">based on Experience, Fee or Rating</p>
                                        </div>
                                    </li>
                                    <li class="row d-flex align-items-center bg-light z-depth-1 mb-2">
                                        <div class="col-xs-3 col-sm-2 p-0">
                                            <img class="img-responsive p-2" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/icons/add.png" alt="Book"></img>
                                        </div>
                                        <div class="col-xs-9 col-sm-10 p-0">
                                            <p class="fw-700 text-primary m-0">3. Book</p>
                                            <p class="m-0">a Confirmed Appointment within Seconds</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 pt-1 pb-4">
                                <img class="img-responsive pull-right" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/home_gif.gif" alt="Book instant appointments in 3 easy steps using oladoc.com"></img>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="section-top-doctor bg-primary">
                    <div class="container py-5">
                        <div class="row py-5">
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-xs-12 text-left text-md-center">
                                        <h2 class="h1 head-font-size text-white mt-0 fw-400 text-center">Are you a top doctor?</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="row d-md-flex align-items-center">
                                            <div class="col-xs-12 col-md-8">
                                                <ul class="py-5">
                                                    <li class="body-font-size">
                                                        <img src="https://s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/orange-check.svg" height="16" class="mr-1">Let millions of patients find you</li>
                                                    <li class="body-font-size"><img src="https://s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/orange-check.svg" height="16" class="mr-1">Get more appointments through online bookings</li>
                                                    <li class="body-font-size"><img src="https://s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/orange-check.svg" height="16" class="mr-1">Create and view patient records from anywhere</li>
                                                    <li class="body-font-size"><img src="https://s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/orange-check.svg" height="16" class="mr-1">Manage your schedule efficiently</li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-12 col-md-4">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <a href="#" data-toggle="modal" data-target="#demo-modal" class=" body-font-size btn btn-padded btn-block bg-warning text-white mb-2">
                                                            I want a demo
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <a href="#" data-toggle="modal" data-target="#signup-modal" class="body-font-size btn btn-padded btn-block bg-primary border-white text-white">
                                                            <span data-toggle="tab" data-target="#signup_doctors">I want to sign up</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white py-5 mw-100 ovx-a">
                    <div class="container">
                        <marquee onmouseover="if (!window.__cfRLUnblockHandlers)
                                    return false;
                                this.stop();" onmouseout="if (!window.__cfRLUnblockHandlers)
                                            return false;
                                        this.start();" class="d-block news-slider" data-cf-modified-1d2c8a7024420f104c0feeb6-="">
                            <a href="https://dailytimes.com.pk/205817/mydoctor-pk-changes-name-oladoc-com/" class="d-inline-block px-5" target="_blank">
                                <img height="50" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/news/daily-times.png" alt="Daily Times">
                            </a>
                            <a href="https://www.pakistantoday.com.pk/2018/02/22/mydoctor-pk-raises-1-1million-funding-rebrands-to-oladoc-com/" class="d-inline-block px-5" target="_blank">
                                <img height="40" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/news/pakistan-today.png" alt="Pakistan Today">
                            </a>
                            <a href="https://www.techjuice.pk/mydoctor-pk-raises-1-1million-in-funding-from-glowfish-capital/" class="d-inline-block px-5" target="_blank">
                                <img height="50" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/news/tech-juice.png" alt="Tech Juice">
                            </a>
                            <a href="https://tribune.com.pk/story/1640984/2-lahore-based-healthcare-start-raises-1-1m-glowfish-capital/" class="d-inline-block px-5" target="_blank">
                                <img height="50" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/news/express-tribune.gif" alt="The Express Tribune">
                            </a>
                            <a href="https://propakistani.pk/2018/02/21/mydoctor-pk-raises-1-1-million-funding/" class="d-inline-block px-5" target="_blank">
                                <img height="40" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/news/pro-pakistani.png" alt="Pro Pakistani">
                            </a>
                            <a href="http://perspective.pk/mydoctor-pk/" class="d-inline-block px-5" target="_blank">
                                <img height="40" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/news/perspective.png" height="30" alt="Pro Pakistani">
                            </a>
                            <a href="https://epaper.dawn.com/DetailImage.php?StoryImage=27_05_2018_010_008" class="d-inline-block px-5" target="_blank">
                                <img height="40" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/news/dawn.png" height="30" alt="DAWN">
                            </a>
                        </marquee>
                    </div>
                </div>

                <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MTT45TS"
                                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>


                <script src="frontend/assets/js/ie10-viewport-bug-workaround.js" type="1d2c8a7024420f104c0feeb6-text/javascript"></script>


                <script src="../ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js" type="1d2c8a7024420f104c0feeb6-text/javascript"></script>

                <script src="../use.fontawesome.com/9dddad8e55.js" type="1d2c8a7024420f104c0feeb6-text/javascript"></script>
                <script src="frontend/assets/js/owl.carousel.js" type="1d2c8a7024420f104c0feeb6-text/javascript"></script>
                <script src="frontend/assets/js/custom.js" type="1d2c8a7024420f104c0feeb6-text/javascript"></script>
                <script src="frontend/assets/js/common.js" type="1d2c8a7024420f104c0feeb6-text/javascript"></script>
                <script src="frontend/bootstrap/js/typeahead.min.js" type="1d2c8a7024420f104c0feeb6-text/javascript"></script>
                <script src="frontend/bootstrap/js/bootstrap.min.js" type="1d2c8a7024420f104c0feeb6-text/javascript"></script>
                <script src="frontend/assets/js/file-validator.js" type="1d2c8a7024420f104c0feeb6-text/javascript" charset="utf-8"></script>
                <script src="../cdn.rawgit.com/leafo/sticky-kit/v1.1.2/jquery.sticky-kit.min.js" type="1d2c8a7024420f104c0feeb6-text/javascript"></script>

                <style>
                    #list_footer li {
                        display: none;
                    }
                    #list_footer1 li {
                        display: none;
                    }
                    #list_footer2 li {
                        display: none;
                    }
                    #img-arrow {
                        display: inline-block;
                    }
                    #img-arrow i {
                        margin-top: 20px;
                        font-size: 40px;
                    }
                    #img-arrow-up {
                        display: none;
                    }
                    #img-arrow-up i {
                        margin-top: 20px;
                        font-size: 40px;
                    }
                </style>
                <div class="bg-light">
                    <div class="container">
                        <div class="row footer_row">
                            <div class="col-sm-3 col-md-3">
                                <a target="_blank" href="pakistan/lahore.html"><h4 class="head-font-size text-primary fw-400">Doctors in Lahore</h4></a>
                                <ul class="footer_li">
                                    <li><a target="_blank" href="pakistan/lahore/dentist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Dentists in Lahore</a></li>
                                    <li><a target="_blank" href="pakistan/lahore/child-specialist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Child Specialists in Lahore</a></li>
                                    <li><a target="_blank" href="pakistan/lahore/gynecologist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Gynecologists in Lahore</a></li>
                                    <li><a target="_blank" href="pakistan/lahore/skin-specialist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Skin Specialists in Lahore</a></li>
                                    <li><a target="_blank" href="pakistan/lahore/eye-specialist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Eye Specialists in Lahore</a></li>
                                </ul>
                                <ul class=" footer_li list_footer">
                                    <li><a target="_blank" href="pakistan/lahore/plastic-surgeon.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Plastic Surgeons in Lahore</a></li>
                                    <li><a target="_blank" href="pakistan/lahore/orthopedic-surgeon.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Orthopedic Surgeons in Lahore</a></li>
                                    <li><a target="_blank" href="pakistan/lahore/cardiologist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Cardiologists in Lahore</a></li>
                                    <li><a target="_blank" href="pakistan/lahore/ent-specialist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best ENT Specialists in Lahore</a></li>
                                    <li><a target="_blank" href="pakistan/lahore/condition.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Doctors by condition in Lahore</a></li>
                                    <li><a target="_blank" href="pakistan/lahore/treatment.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Doctors by treatment in Lahore</a></li>
                                    <li><a target="_blank" href="pakistan/lahore/hospital.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Hospitals in Lahore</a></li>
                                    <li><a target="_blank" href="pakistan/lahore/radiology-lab"><i class="fa fa-chevron-right text-primary mr-1"></i>Diagnostic services in Lahore</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3 col-md-3">
                                <a target="_blank" href="pakistan/karachi"><h4 class="head-font-size text-primary fw-400">Doctors in Karachi</h4></a>
                                <ul class="footer_li">
                                    <li><a target="_blank" href="pakistan/karachi/dentist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Dentists in Karachi</a></li>
                                    <li><a target="_blank" href="pakistan/karachi/child-specialist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Child Specialists in Karachi</a></li>
                                    <li><a target="_blank" href="pakistan/karachi/gynecologist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Gynecologists in Karachi</a></li>
                                    <li><a target="_blank" href="pakistan/karachi/skin-specialist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Skin Specialists in Karachi</a></li>
                                    <li><a target="_blank" href="pakistan/karachi/eye-specialist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Eye Specialists in Karachi</a></li>
                                </ul>
                                <ul class="footer_li list_footer">
                                    <li><a target="_blank" href="pakistan/karachi/plastic-surgeon.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Plastic Surgeons in Karachi</a></li>
                                    <li><a target="_blank" href="pakistan/karachi/orthopedic-surgeon.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Orthopedic Surgeons in Karachi</a></li>
                                    <li><a target="_blank" href="pakistan/karachi/cardiologist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Cardiologists in Karachi</a></li>
                                    <li><a target="_blank" href="pakistan/karachi/ent-specialist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best ENT Specialists in Karachi</a></li>
                                    <li><a target="_blank" href="pakistan/karachi/condition.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Doctors by condition in Karachi</a></li>
                                    <li><a target="_blank" href="pakistan/karachi/treatment.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Doctors by treatment in Karachi</a></li>
                                    <li><a target="_blank" href="pakistan/karachi/hospital.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Hospitals in Karachi</a></li>
                                    <li><a target="_blank" href="pakistan/karachi/radiology-lab.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Diagnostic services in Karachi</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3 col-md-3">
                                <a target="_blank" href="pakistan/islamabad.html"><h4 class="head-font-size text-primary fw-400">Doctors in Islamabad</h4></a>
                                <ul class="footer_li">
                                    <li><a target="_blank" href="pakistan/islamabad/dentist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Dentists in Islamabad</a></li>
                                    <li><a target="_blank" href="pakistan/islamabad/child-specialist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Child Specialists in Islamabad</a></li>
                                    <li><a target="_blank" href="pakistan/islamabad/gynecologist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Gynecologists in Islamabad</a></li>
                                    <li><a target="_blank" href="pakistan/islamabad/skin-specialist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Skin Specialists in Islamabad</a></li>
                                    <li><a target="_blank" href="pakistan/islamabad/eye-specialist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Eye Specialists in Islamabad</a></li>
                                </ul>
                                <ul class="footer_li list_footer">
                                    <li><a target="_blank" href="pakistan/islamabad/plastic-surgeon.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Plastic Surgeons in Islamabad</a></li>
                                    <li><a target="_blank" href="pakistan/islamabad/orthopedic-surgeon.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Orthopedic Surgeons in Islamabad</a></li>
                                    <li><a target="_blank" href="pakistan/islamabad/cardiologist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Cardiologists in Islamabad</a></li>
                                    <li><a target="_blank" href="pakistan/islamabad/ent-specialist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best ENT Specialists in Islamabad</a></li>
                                    <li><a target="_blank" href="pakistan/islamabad/condition.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Doctors by condition in Islamabad</a></li>
                                    <li><a target="_blank" href="pakistan/islamabad/treatment.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Doctors by treatment in Islamabad</a></li>
                                    <li><a target="_blank" href="pakistan/islamabad/hospital.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Hospitals in Islamabad</a></li>
                                    <li><a target="_blank" href="pakistan/islamabad/radiology-lab.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Diagnostic services in Islamabad</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3 col-md-3">
                                <h4 class="head-font-size text-primary fw-400">Doctors in Other Cities</h4>
                                <ul class="footer_li">
                                    <li><a target="_blank" href="pakistan/faisalabad/dentist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Dentists in Faisalabad</a></li>
                                    <li><a target="_blank" href="pakistan/faisalabad/skin-specialist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Skin Specialists in Faisalabad</a></li>
                                    <li><a target="_blank" href="pakistan/faisalabad/gynecologist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Gynecologists in Faisalabad</a></li>
                                    <li><a target="_blank" href="pakistan/multan/dentist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Dentists in Multan</a></li>
                                    <li><a target="_blank" href="pakistan/multan/skin-specialist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Skin Specialists in Multan</a></li>
                                    <li><a target="_blank" href="pakistan/multan/gynecologist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Gynecologists in Multan</a></li>
                                    <li><a target="_blank" href="pakistan/peshawar/dentist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Dentists in Peshawar</a></li>
                                    <li><a target="_blank" href="pakistan/peshawar/skin-specialist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Skin Specialists in Peshawar</a></li>
                                    <li><a target="_blank" href="pakistan/peshawar/gynecologist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Gynecologists in Peshawar</a></li>
                                    <li><a target="_blank" href="pakistan/faisalabad/condition.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Doctors by condition in Faisalabad</a></li>
                                    <li><a target="_blank" href="pakistan/faisalabad/treatment.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Doctors by treatment in Faisalabad</a></li>
                                    <li><a target="_blank" href="pakistan/all/hospital.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Hospitals in Pakistan</a></li>
                                    <li><a target="_blank" href="pakistan/peshawar/radiology-lab.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Diagnostic services in Peshawar</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="site-footer p-0 footer">
                    <div class="footer-container container">
                        <div class="row py-5">
                            <div class="col-md-6">
                                <img class="d-block mb-5" src="https://s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/oladoc_footer.svg" alt=" oladoc.com | Find Best Doctors, Book Online Appointments, Order Medicines, Order Lab Tests" height="32" />
                                <p class="footer-font-size text-secondary mb-5 mb-md-0">Book appointments with the best Doctors and Specialists such as Gynecologists, Skin Specialists, Child Specialists, Surgeons, etc. in Pakistan conveniently.</p>
                            </div>
                            <div class="col-md-6">
                                <p class="head-font-size text-white mt-1 mb-4">Download App</p>
                                <div class="d-md-flex justify-content-between align-items-end footer-partners">
                                    <div class="d-flex align-items-end">
                                        <a href="https://itunes.apple.com/us/app/oladoc-the-health-app/id1343718442?ls=1&amp;mt=8" target="_blank" class="d-inline-block mr-2">
                                            <img height="54" class="img-responsive" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/app_store.png" alt="Download oladoc app from the App Store">
                                        </a>
                                        <a href="https://play.google.com/store/apps/details?id=com.mediconnect.oladoc&amp;hl=en" target="_blank" class="d-inline-block">
                                            <img height="54" class="img-responsive" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/google_play.png" alt="Download oladoc app from the Play Store">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white py-5 d-none">
                        <div class="container">
                            <div class="row d-md-flex align-items-center justify-content-between">
                                <div class="col-xs-12 col-sm-4 mb-2 mb-md-0">
                                    <span class="h3 m-0 text-secondary fw-400">Our Partners</span>
                                </div>
                                <div class="col-xs-12 col-sm-8 partner-logos">
                                    <img class="mr-2" alt="Aman is an oladoc partner" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/partners/color/aman.png" />
                                    <img class="mr-2" alt="CSH Pharma Group is an oladoc partner" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/partners/color/csh.png" />
                                    <img class="mr-2" alt="FonePay is an oladoc partner" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/partners/color/fonepay.png" />
                                    <img class="mr-2" alt=" Mothers.pk is an oladoc partner" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/partners/color/mothers.png" />
                                    <img class="mr-2" alt="Chughtai Lab is an oladoc partner" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/partners/color/chugtai.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid" style="border-top: 1px solid #707070;">
                        <div class="container">
                            <div class="row py-5 d-md-flex align-items-center">
                                <div class="col-md-6 text-center text-md-left">
                                    <p class="footer-font-size text-secondary m-0">&copy; 2015 -
                                        <script type="1d2c8a7024420f104c0feeb6-text/javascript">
                                            document.write(new Date().getFullYear())
                                        </script> <a href="index.html" class="footer-font-size text-warning">MediConnect Services</a></p>
                                </div>
                                <div class="col-md-6 text-center text-md-right">
                                    <span class="footer-font-size text-white mr-5">
                                        Connect with us
                                    </span>
                                    <ul class="d-inline-block">
                                        <li class="p-0 d-inline-block">
                                            <a href="https://twitter.com/oladocsays" target="_blank">
                                                <i class="fa fa-twitter text-white"></i>
                                            </a>
                                        </li>
                                        <li class="p-0 d-inline-block">
                                            <a class="ml-1" href="https://www.facebook.com/myoladoc" target="_blank">
                                                <i class="fa fa-facebook text-white"></i>
                                            </a>
                                        </li>
                                        <li class="p-0 d-inline-block">
                                            <a class="ml-1" href="https://www.instagram.com/oladocsays/" target="_blank">
                                                <i class="fa fa-instagram text-white"></i>
                                            </a>
                                        </li>
                                        <li class="p-0 d-inline-block">
                                            <a class="ml-1" href="contact.html">
                                                <i class="fa fa-envelope text-white"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>

                <div class="modal fade bs-example-modal-md" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="myMidalModalLabel">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content px-0">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h3 class="modal-title">Sign Up</h3>
                                <p class="pre-filled d-none"></p>
                            </div>
                            <div class="modal-body p-5 pb-1">
                                <ul class="nav nav-tabs signup-tabs d-none">
                                    <li class="active" id="action-user-signup"><a data-toggle="tab" href="#users-signup">I'm a User</a></li>
                                    <li id="action-doc-signup"><a data-toggle="tab" href="#signup_doctors">I'm a Doctor</a></li>
                                </ul>
                                <div class="tab-content">

                                    <div id="users-signup" class="tab-pane fade in active">
                                        <form method="post" action="https://oladoc.com/signup" class="signup_form" onsubmit="if (!window.__cfRLUnblockHandlers)
                                            return false;
                                        return validatesignup()" data-cf-modified-1d2c8a7024420f104c0feeb6-="">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <a href="javascript:;" class="facebook-login">
                                                            <span class=" ">
                                                                <i class="fa fa-facebook"></i>
                                                            </span><strong>GET STARTED WITH FACEBOOK</strong>
                                                        </a>
                                                    </div>
                                                    <h3 class="login-or text-center">OR</h3>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6 d-none">
                                                        <label for="pmdc">Title</label>
                                                        <i class="icon-user-2 iconstyle"></i>
                                                        <input type="text" class="form-control signup-form-fields" name="title" id="title_user" placeholder="Mr./Ms./Dr./Prof.">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="name">Name</label>
                                                        <i class="iconstyle" style="">
                                                            <svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
                                                            <use xlink:href="#user"></use>
                                                            </svg>
                                                        </i>
                                                        <input type="text" class="form-control signup-form-fields" name="signup_name" id="signup_name" placeholder="Name" required />
                                                        <p id="signup_error_name"></p>
                                                    </div>
                                                    <div class="col-md-6 ">
                                                        <label for="phone">Phone No.</label>
                                                        <i class="iconstyle" style="">
                                                            <svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
                                                            <use xlink:href="#phone"></use>
                                                            </svg>
                                                        </i>
                                                        <input type="text" class="form-control signup-form-fields" name="signup_phone" id="phone" placeholder="eg. 03001234567" required />
                                                        <p id="signup_error_phone"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="email">Email</label>
                                                        <i class="iconstyle" style="">
                                                            <svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
                                                            <use xlink:href="#envelope"></use>
                                                            </svg>
                                                        </i>
                                                        <input type="text" class="form-control signup-form-fields" name="signup_email" id="signup_email" placeholder="Email" required />
                                                        <div id="error" style="color:#F00"></div>
                                                        <p id="signup_error_email"></p>
                                                    </div>
                                                    <div class="col-md-6 ">
                                                        <label for="password">Password</label>
                                                        <i class="iconstyle" style="">
                                                            <svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
                                                            <use xlink:href="#lock"></use>
                                                            </svg>
                                                        </i>
                                                        <input type="password" class="form-control signup-form-fields" name="signup_password" id="signup_password" placeholder="Password" required="required">
                                                        <p id="signup_password_error"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group d-none">
                                                <div class="row">
                                                    <div class="col-md-6  d-none">
                                                        <label for="password">Re-type Password</label>
                                                        <i class="icon-lock iconstyle"></i>
                                                        <input type="password" class="form-control signup-form-fields" name="retype-signup_password" id="retype-password" placeholder="Re-Type Password">
                                                        <p id="signup_error_repeat_pass"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="gender">Gender</label>
                                                        <br />
                                                        <input id="gender_male" type="radio" name="gender" value="Male" />
                                                        <label for="gender_male" class="fw-300 clickable mr-2">Male</label>
                                                        <input id="gender_female" type="radio" name="gender" value="Female" />
                                                        <label for="gender_female" class="fw-300 clickable mr-2">Female</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="checkbox">
                                                <input type="hidden" name="signup_ifdoctor" id="doctorSignUpCheck_user" value="">
                                            </div>
                                            <div class="checkbox">
                                                <label style="padding-left:0px !important;">
                                                    By signing up, you agree to oladoc's <a href="terms-of-use.html" target="_blank">Terms of use</a> and <a href="privacy_policy.html" target="_blank"> Privacy Policy</a> </label>
                                            </div>
                                            <input type="hidden" name="ci_csrf_token" value="82b2fd03b3a61f87cccfc9573b028c60" />
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <button type="submit" class="btn btn-block btn-padded bg-warning text-white z-depth-1 pull-right" id="signupsubmit js-btn-control">Sign Up</button>
                                                </div>
                                            </div>
                                        </form> </div>

                                    <div class="tab-pane fade in" id="signup_doctors">
                                        <form method="post" id="doctors-signup" action="https://oladoc.com/signup" class="signup_form">
                                            <div class="form-group mb-0">
                                                <div class="row">
                                                    <div class="col-md-6 d-none">
                                                        <label for="pmdc">Title</label>
                                                        <i class="iconstyle" style="">
                                                            <svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
                                                            <use xlink:href="#user"></use>
                                                            </svg>
                                                        </i>
                                                        <input type="text" class="form-control signup-form-fields" name="title" id="title" placeholder="Mr./Ms./Dr./Prof.">
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="name">Name</label>
                                                        <i class="iconstyle" style="">
                                                            <svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
                                                            <use xlink:href="#user"></use>
                                                            </svg>
                                                        </i>
                                                        <input type="text" class="form-control signup-form-fields" name="signup_name" id="signup_name_doctor" placeholder="Name" required />
                                                        <p id="signup_error_name_doctor"></p>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="phone">Phone No.</label>
                                                        <i class="iconstyle" style="">
                                                            <svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
                                                            <use xlink:href="#phone"></use>
                                                            </svg>
                                                        </i>
                                                        <input type="text" class="form-control signup-form-fields" name="signup_phone" id="phone_doctor" placeholder="eg. 0300 1234567" required />
                                                        <p id="signup_error_phone_doctor"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-2">
                                                <div class="row">
                                                    <div class="col-md-6 mb-2">
                                                        <label for="email">Email</label>
                                                        <i class="iconstyle" style="">
                                                            <svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
                                                            <use xlink:href="#envelope"></use>
                                                            </svg>
                                                        </i>
                                                        <input type="email" class="form-control signup-form-fields" name="signup_email" id="signup_email_doctor" placeholder="Email" required />
                                                        <div id="error_doctor" style="color:#F00"></div>
                                                        <p class="m-0" id="signup_error_email_doctor"></p>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="password">Password</label>
                                                        <i class="iconstyle" style="">
                                                            <svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
                                                            <use xlink:href="#password"></use>
                                                            </svg>
                                                        </i>
                                                        <input type="password" class="form-control signup-form-fields" name="signup_password" id="signup_password_doctor" placeholder="Password" required="required" />
                                                        <p class="m-0" id="signup_password_error_doctor"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group d-none">
                                                <div class="row">
                                                    <div class="col-md-6 ">
                                                        <label for="password">Re-type Password</label>
                                                        <i class="icon-lock iconstyle"></i>
                                                        <input type="password" class="form-control signup-form-fields" name="retype-signup_password" id="retype-password_doctor" placeholder="Re-Type Password" />
                                                        <p id="signup_error_repeat_pass_doctor"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-2">
                                                <div class="row">
                                                    <div class="col-md-12 mb-2">
                                                        <label for="specialization">Specialization</label>
                                                        <i class="iconstyle" style="">
                                                            <svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
                                                            <use xlink:href="#service"></use>
                                                            </svg>
                                                        </i>
                                                        <input type="hidden" name="signup_specialization_name" id="signup_specialization_name" />
                                                        <select class="form-control signup-form-fields speciail" id="signup_specialization" name="signup_specialization">
                                                            <option value="">Select specialization</option>
                                                            <option value="1">Acupuncturist</option>
                                                            <option value="2">Addiction Specialist</option>
                                                            <option value="250">Aesthetic Gynecologist</option>
                                                            <option value="222">Aesthetic Medicine Specialist</option>
                                                            <option value="4">Alternative Medicine Practitioner</option>
                                                            <option value="223">Andrologist</option>
                                                            <option value="5">Anesthesiologist</option>
                                                            <option value="209">Asthma Specialist</option>
                                                            <option value="126">Audiologist</option>
                                                            <option value="200">Autism Consultant</option>
                                                            <option value="218">Bio-resonance Specialist</option>
                                                            <option value="112">Breast Surgeon</option>
                                                            <option value="208">Burns Specialist</option>
                                                            <option value="225">Cancer Surgeon</option>
                                                            <option value="82">Cardiac Surgeon</option>
                                                            <option value="6">Cardiologist</option>
                                                            <option value="7">Cardiothoracic Surgeon</option>
                                                            <option value="117">Cardiovascular Surgeon</option>
                                                            <option value="9">Chiropractor</option>
                                                            <option value="259">Colorectal Cancer Surgeon</option>
                                                            <option value="10">Colorectal Surgeon</option>
                                                            <option value="177">Community Medicine</option>
                                                            <option value="196">Consultant Physician</option>
                                                            <option value="235">Cosmetic Dentist</option>
                                                            <option value="254">Cosmetic Surgeon</option>
                                                            <option value="206">Cosmetologist</option>
                                                            <option value="11">Counselor</option>
                                                            <option value="122">Critical Care Physician</option>
                                                            <option value="14">Dentist</option>
                                                            <option value="15">Dermatologist</option>
                                                            <option value="228">Diabetes Counsellor</option>
                                                            <option value="79">Diabetologist</option>
                                                            <option value="16">Dietitian</option>
                                                            <option value="194">Emergency Medicine Specialist</option>
                                                            <option value="19">Endocrinologist</option>
                                                            <option value="216">Endodontist</option>
                                                            <option value="131">Endoscopic Surgeon</option>
                                                            <option value="137">Endovascular Surgeon</option>
                                                            <option value="17">ENT Specialist</option>
                                                            <option value="80">ENT Surgeon</option>
                                                            <option value="20">Eye Specialist</option>
                                                            <option value="76">Eye Surgeon</option>
                                                            <option value="248">Family Physician</option>
                                                            <option value="189">Fertility Consultant</option>
                                                            <option value="178">Forensic Medicine</option>
                                                            <option value="22">Gastroenterologist</option>
                                                            <option value="85">General Medicine</option>
                                                            <option value="58">General Physician</option>
                                                            <option value="23">General Surgeon</option>
                                                            <option value="224">Geriatrician</option>
                                                            <option value="72">Gynecologist</option>
                                                            <option value="87">Hair Transplant Surgeon</option>
                                                            <option value="245">Hand Surgeon</option>
                                                            <option value="132">Head and Neck Surgeon</option>
                                                            <option value="88">Hematologist</option>
                                                            <option value="136">Hepatobiliary and Liver Transplant Surgeon</option>
                                                            <option value="26">Hepatologist</option>
                                                            <option value="210">Hernia Surgeon</option>
                                                            <option value="215">Homeopath</option>
                                                            <option value="27">Hospice and Palliative Care Doctor</option>
                                                            <option value="231">Hypertension Specialist</option>
                                                            <option value="127">Immunologist</option>
                                                            <option value="203">Implantologist</option>
                                                            <option value="29">Infectious Disease Specialist</option>
                                                            <option value="238">Internal Medicine Specialist</option>
                                                            <option value="257">Interventional Cardiologist</option>
                                                            <option value="115">Kidney Transplant Surgeon</option>
                                                            <option value="81">Laparoscopic Surgeon</option>
                                                            <option value="217">Laser Specialist</option>
                                                            <option value="221">Male Sexual Health Specialist</option>
                                                            <option value="34">Naturopathic Doctor</option>
                                                            <option value="145">Neonatologist</option>
                                                            <option value="35">Nephrologist</option>
                                                            <option value="38">Neuro Surgeon</option>
                                                            <option value="36">Neurologist</option>
                                                            <option value="37">Neuromusculoskeletal Medicine Doctor</option>
                                                            <option value="252">Neuroradiologist</option>
                                                            <option value="39">Nuclear Medicine Specialist</option>
                                                            <option value="213">Nutritional Psychologist</option>
                                                            <option value="41">Nutritionist</option>
                                                            <option value="111">Obstetrician</option>
                                                            <option value="43">Oncologist</option>
                                                            <option value="45">Optometrist</option>
                                                            <option value="84">Oral and Maxillofacial Surgeon</option>
                                                            <option value="190">Orthodontist</option>
                                                            <option value="47">Orthopedic Surgeon</option>
                                                            <option value="48">Orthotists and Prosthetist</option>
                                                            <option value="192">Pain Management Specialist</option>
                                                            <option value="255">Pathology Lab</option>
                                                            <option value="116">Pediatric Cardiologist</option>
                                                            <option value="182">Pediatric Cardiovascular Surgeon</option>
                                                            <option value="184">Pediatric Endocrinologist</option>
                                                            <option value="212">Pediatric Gastroenterologist</option>
                                                            <option value="185">Pediatric Hematologist</option>
                                                            <option value="186">Pediatric Immunologist</option>
                                                            <option value="187">Pediatric Nephrologist</option>
                                                            <option value="214">Pediatric Neurologist</option>
                                                            <option value="251">Pediatric Nutritionist</option>
                                                            <option value="258">Pediatric Oncologist</option>
                                                            <option value="247">Pediatric Orthopedic Surgeon</option>
                                                            <option value="183">Pediatric Radiologist</option>
                                                            <option value="51">Pediatric Surgeon</option>
                                                            <option value="244">Pediatric Urologist</option>
                                                            <option value="52">Pediatrician</option>
                                                            <option value="207">Periodontist</option>
                                                            <option value="164">Physiotherapist</option>
                                                            <option value="55">Plastic Surgeon</option>
                                                            <option value="56">Podiatrist</option>
                                                            <option value="57">Preventive Medicine Doctor</option>
                                                            <option value="134">Primary Care Physician</option>
                                                            <option value="204">Prosthodontist</option>
                                                            <option value="59">Psychiatrist</option>
                                                            <option value="60">Psychologist</option>
                                                            <option value="61">Pulmonologist</option>
                                                            <option value="197">Radiation Oncologist</option>
                                                            <option value="62">Radiologist</option>
                                                            <option value="253">Radiology Lab</option>
                                                            <option value="246">Reconstructive Surgeon</option>
                                                            <option value="232">Regenerative Medicine</option>
                                                            <option value="193">Rehab Medicine</option>
                                                            <option value="234">Rehablitation Specialist</option>
                                                            <option value="188">Renal Surgeon</option>
                                                            <option value="240">Restorative Dentist</option>
                                                            <option value="63">Rheumatologist</option>
                                                            <option value="78">Sexologist</option>
                                                            <option value="64">Sleep Medicine Doctor</option>
                                                            <option value="128">Sonologist</option>
                                                            <option value="220">Specialist in Operative Dentistry</option>
                                                            <option value="66">Speech and Language Pathologist</option>
                                                            <option value="140">Spinal Surgeon</option>
                                                            <option value="67">Sports Medicine Specialist</option>
                                                            <option value="86">Thoracic Surgeon</option>
                                                            <option value="239">Thyroid Surgeon</option>
                                                            <option value="211">Uro-Oncologist</option>
                                                            <option value="70">Urologist</option>
                                                            <option value="71">Vascular Surgeon</option>
                                                            <option value="242">Vitreo Retina Surgeon</option>
                                                            <option value="74">Weight Loss Surgeon</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-2">
                                                <div class="row">
                                                    <div class="col-md-6 mb-2">
                                                        <label for="clinic">Primary Clinic/Hospital</label>
                                                        <i class="iconstyle" style="">
                                                            <svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
                                                            <use xlink:href="#hospital"></use>
                                                            </svg>
                                                        </i>
                                                        <input type="text" class="form-control signup-form-fields" name="signup_clinic" id="place_name" placeholder="Primary Clinic/Hospital">
                                                        <input type="hidden" id="selection_made" value="0" />
                                                        <p class="m-0" id="signup_error_clinic"></p>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="city">City</label>
                                                        <i class="iconstyle" style="">
                                                            <svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
                                                            <use xlink:href="#location"></use>
                                                            </svg>
                                                        </i>
                                                        <input type="text" class="form-control signup-form-fields" name="signup_city" id="signup_city" placeholder="City">
                                                        <p id="signup_error_city"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group d-none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="gender">Gender</label>
                                                        <br />
                                                        <input type="radio" name="gender" value="Male" /> Male
                                                        <input type="radio" name="gender" value="Female" /> Female
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="checkbox">
                                                <input type="hidden" name="signup_ifdoctor" id="doctorSignUpCheck" value="Doctor">
                                            </div>
                                            <div class="for-doctor-signup d-none" id="doctorSignUpForm">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6 ">
                                                            <label for="education">Education</label>
                                                            <i class="icon-graduation-cap iconstyle"></i>
                                                            <input type="text" class="form-control signup-form-fields" name="signup_education" id="signup_education" placeholder="Education" value="OD">
                                                            <p id="signup_error_education"></p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="pmdc">PMDC Reg. No.</label>
                                                            <i class="icon-key iconstyle"></i>
                                                            <input type="text" class="form-control signup-form-fields" name="signup_pmdc" id="signup_pmdc" placeholder="PMDC Reg. No.">
                                                            <p id="signup_error_pmdc"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="app-phone">Phone No. <em>(For Appointment)</em></label>
                                                            <i class="icon-phone iconstyle"></i>
                                                            <input type="text" class="form-control signup-form-fields" name="signup_phone2" id="app-phone" placeholder="Phone No for Appointment">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6 exist">
                                                            <label for="address">Address</label>
                                                            <i class="icon-location iconstyle"></i>
                                                            <input type="text" class="form-control signup-form-fields" name="signup_address" id="address" placeholder="Address">
                                                        </div>
                                                        <div class="col-md-6 exist">
                                                            <label for="address">Hospital Phone</label>
                                                            <i class="icon-phone iconstyle"></i>
                                                            <input type="text" class="form-control signup-form-fields" name="signup_hosp_phone" id="hosp_phone" placeholder="Phone">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="checkbox">
                                                <label style="padding-left:0px !important;">
                                                    By signing up, you agree to oladoc's <a href="terms-of-use.html" target="_blank">Terms of use</a> and <a href="privacy_policy.html" target="_blank"> Privacy Policy</a> </label>
                                            </div>
                                            <input type="hidden" name="ci_csrf_token" value="82b2fd03b3a61f87cccfc9573b028c60" />
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <button type="submit" class="btn btn-block btn-padded bg-warning text-white z-depth-1 pull-right js-btn-control" id="signupsubmit_doctor" onclick="if (!window.__cfRLUnblockHandlers)
                                                                return false;
                                                            return validatesignup_doctorperson();" data-cf-modified-1d2c8a7024420f104c0feeb6-="">Sign Up</button>
                                                </div>
                                            </div>
                                        </form>
                                        <script type="1d2c8a7024420f104c0feeb6-text/javascript">
                                            $(function() {
                                            $(".exist").hide();
                                            $('#place_name').autocomplete({
                                            source: "https://oladoc.com/hospital_exist/?"
                                            });
                                            $('#place_name').on('autocompleteselect  select', function () {
                                            $('#selection_made').val(1);
                                            });
                                            $('#place_name').focusout(function () {
                                            if ($('#selection_made').val() == 1) {
                                            $(".exist").hide();
                                            } else {
                                            $(".exist").show();
                                            }
                                            });
                                            /***************** place name ajax ************/
                                            $("#place_name").change(function () {
                                            var place_name = $(this).val();
                                            var url = "hospital_exist/index.html";
                                            jQuery.ajax({
                                            url: url, //Where to make Ajax calls
                                            type: "GET",
                                            data: {
                                            term: place_name
                                            },
                                            dataType: 'json', // Data type, HTML, json etc.
                                            success: function (response) {
                                            if (response) {
                                            $(".exist").hide();
                                            } else {
                                            $(".exist").show();
                                            }
                                            },
                                            error: function (xhr, ajaxOptions, thrownError) {
                                            }
                                            });
                                            }); //End of change function
                                            });
                                        </script> </div>
                                </div> </div>
                        </div>
                    </div>
                </div>


                <div class="modal fade bs-example-modal-md" id="demo-modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content edges">
                            <div class="modal-header px-0">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h3 class="modal-title">Get demo</h3>
                            </div>
                            <div class="modal-body p-0 demo-modal-body">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <p class="py-2 m-0">Please drop your name and number below. Our Digital Health expert will contact you shortly to schedule a demo.</p>
                                    </div>
                                </div>
                                <form id="demoRequestForm" method="POST">
                                    <div class="row mb-2">
                                        <div class="col-xs-12">
                                            <i class="iconstyle" style="top: 11px;">
                                                <svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
                                                <use xlink:href="#user"></use>
                                                </svg>
                                            </i>
                                            <input required style="padding-left: 3.5rem" type="text" class="form-control" id="user_name" name="name" placeholder="Name" />
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-xs-12">
                                            <i class="iconstyle" style="top: 11px;">
                                                <svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
                                                <use xlink:href="#phone"></use>
                                                </svg>
                                            </i>
                                            <input required style="padding-left: 3.5rem" type="text" class="form-control" name="phone" id="user_phone" placeholder="Phone number e.g 0321XXXXXXX" />
                                            <div class="control-label text-danger d-none">Please provide a valid phone number.</div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-xs-12">
                                            <i class="iconstyle" style="top: 11px;">
                                                <svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
                                                <use xlink:href="#location"></use>
                                                </svg>
                                            </i>
                                            <input required style="padding-left: 3.5rem" type="text" class="form-control" id="user_city" name="city" placeholder="City" />
                                        </div>
                                    </div>
                                    <div class="row d-none">
                                        <div class="col-xs-12">
                                            <input type="hidden" id="csrf_token" name="ci_csrf_token" value="82b2fd03b3a61f87cccfc9573b028c60" />
                                        </div>
                                        <div class="col-xs-12">
                                            <input type="hidden" name="email_user" value="request@mydoctor.pk">
                                            <input type="hidden" name="subject" value="Demo Request">
                                            <input type="hidden" name="msg" value="Please provide a demo">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 text-right">
                                            <button type="submit" class="btn btn-padded bg-warning text-white z-depth-1 js-demo-submit js-btn-control">Get demo</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal fade bs-example-modal-sm" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content p-0">
                            <div id="login-form">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h3 class="modal-title">Login</h3>
                                </div>
                                <div class="modal-body py-5 px-1">
                                    <form method="post" action="https://oladoc.com/login" onsubmit="if (!window.__cfRLUnblockHandlers)
                                                return false;
                                            return validatelogin()" class="login_form" data-cf-modified-1d2c8a7024420f104c0feeb6-="">
                                        <div class="form-group container-fluid">
                                            <div class="row">
                                                <div class="col-xs-12" style="">
                                                    <button class="facebook-login"><span class="d-flex align-items-center justify-content-center"><i class="fa fa-facebook" aria-hidden="true"></i></span><strong>SIGN IN WITH FACEBOOK</strong></button>
                                                    <h3 class="login-or text-center">OR</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group container-fluid">
                                            <div class="row">
                                                <div class="col-xs-12" style="">
                                                    <label for="email">Email</label>
                                                    <i class="iconstyle" style="">
                                                        <svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
                                                        <use xlink:href="#envelope"></use>
                                                        </svg>
                                                    </i>
                                                    <input name="user_email" type="text" class="form-control signup-form-fields" id="email" placeholder="Email or Mobile number" required="required">
                                                    <p id="login_error_email"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group container-fluid">
                                            <div class="row">
                                                <div class="col-xs-12" style="">
                                                    <label for="password">Password</label>
                                                    <i class="iconstyle" style="">
                                                        <svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
                                                        <use xlink:href="#lock"></use>
                                                        </svg>
                                                    </i>
                                                    <input name="user_pass" type="password" class="form-control signup-form-fields" id="login_password" placeholder="Password" required="required">
                                                    <p id="login_password_error"></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 text-right">
                                                    <a href="javascript:;" id="forgot-password">Forgot Password?</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group container-fluid">
                                            <div class="row">
                                                <div class="col-xs-12" style="">

                                                    <button type="submit" class="btn btn-padded btn-block bg-warning text-white z-depth-1 js-btn-control js-btn-login">Login</button>
                                                    <input type="hidden" name="ci_csrf_token" value="82b2fd03b3a61f87cccfc9573b028c60" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group container-fluid">
                                            <div class="row">
                                                <div class="col-xs-12 text-center" style="">
                                                    <a data-target="#signup-modal" data-toggle="modal" href="javascript:;" class="d-block" id="dont-have-account">Don't have account? Sign Up</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div id="forgot-pasword-data" style="display:none;">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Forgot Password?</h4>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="https://oladoc.com/forgetpassword" id="frm_forget-password">
                                        <div class="form-group container-fluid">
                                            <div class="row">
                                                <div class="col-xs-12" style="">
                                                    <label for="email">Email</label>
                                                    <i class="iconstyle" style="">
                                                        <svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
                                                        <use xlink:href="#envelope"></use>
                                                        </svg>
                                                    </i>
                                                    <input type="text" name="email" class="form-control signup-form-fields" id="forget_email" placeholder="Email or Mobile number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group container-fluid">
                                            <div class="row">
                                                <div class="col-xs-12" style="">
                                                    <button type="submit" class="btn btn-padded btn-block bg-warning text-white z-depth-1 js-btn-control" id="forget_btn">Send Request</button>
                                                    <p class="forget-password-msg my-3 alert-success"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group container-fluid">
                                            <div class="row">
                                                <div class="col-xs-12 text-center">
                                                    <a href="javascript:;" id="remember-password">Remember Password?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <script type="1d2c8a7024420f104c0feeb6-text/javascript">
                                $(document).ready(function () {
                                $("#email").keydown(function(e){
                                if(e.which === 32) 
                                return false;
                                });
                                $("#forget_email").keydown(function(e){
                                if(e.which === 32) 
                                return false;
                                });

                                });
                            </script> </div>
                    </div>
                </div>
                <style>
                    #user-city-modal .modal-content{ border-radius: 0px;}

                </style>

                <div class="modal fade" id="user-city-modal" role="dialog">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Please tell us your city for better search results</h4>
                            </div>
                            <div class="modal-body">
                                <form id="frm_set_city">
                                    <div class="form-group">
                                        <select class="form-control" required="required" id="user-city" name="user-city">
                                            <option value="">Select city</option>
                                            <option value="Lahore">Lahore</option>
                                            <option value="Karachi">Karachi</option>
                                            <option value="Islamabad">Islamabad</option>
                                            <option value="Rawalpindi">Rawalpindi</option>
                                            <option value="Multan">Multan</option>
                                            <option value="Faisalabad">Faisalabad</option>
                                            <option value="Peshawar">Peshawar</option>
                                            <option value="Sargodha">Sargodha</option>
                                            <option value="Gujranwala">Gujranwala</option>
                                            <option value="Bahawalpur">Bahawalpur</option>
                                        </select>
                                    </div>
                                    <input class="btn  btn-create-account pull-right hide" id="submit-city" value="Submit" type="submit">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="javascript:" class="back-to-top">
                    <img src="https://s3-eu-west-1.amazonaws.com/mdpk/images/arrow.svg"></a>
                <script type="1d2c8a7024420f104c0feeb6-text/javascript">
                    $(document).keypress(function (e) {
                    if (e.which == 13) {
                    $("#save_post").click();
                    }
                    });
                    $(function () {
                    $(".stick-in-parent").stick_in_parent({
                    offset_top: 95,
                    width:235
                    });
                    $("#dont-have-account").click(function () {
                    $("#modal_login").modal('toggle');
                    });
                    $(function ($) {
                    // this script needs to be loaded on every page where an ajax POST may happen
                    $.ajaxSetup({
                    data: {
                    'ci_csrf_token': '82b2fd03b3a61f87cccfc9573b028c60'
                    }
                    });
                    });
                    $('.rquest-password-image').hide();
                    //reset password form process...
                    // process the form
                    $('#frm_forget-password').submit(function (event) {
                    // get the form data
                    // there are many ways to get this data using jQuery (you can use the class or id also)
                    var formData = {
                    'email': $('#forget_email').val()
                    };
                    var btnLoading = $(this).find('.js-btn-control');
                    // process the form
                    $.ajax({
                    type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                    url: 'https://oladoc.com/forgetpassword', // the url where we want to POST
                    data: formData, // our data object
                    dataType: 'json', // what type of data do we expect back from the server
                    beforeSend: function () {
                    $('.rquest-password-image').show();
                    btnLoading.attr('disabled', 'disabled');
                    btnLoading.addClass('loading');
                    },
                    success: function (response) {
                    var obj = eval(response);
                    if (obj) {
                    $("#forget_btn").attr("disabled", true);
                    $(".forget-password-msg").addClass('alert');
                    if (obj.error == 0) {
                    if(obj.is_sms_sent == 1){
                    $(".forget-password-msg").html("Please check your sms for instructions regarding a new password.");
                    }else{
                    $(".forget-password-msg").html("Please check your email  for instructions regarding setting a new password.");
                    }
                    } else {
                    $(".forget-password-msg").html("We could not reset the password at the moment, Please check email or mobile number and try agin later.");
                    }
                    }
                    },
                    complete: function () {
                    btnLoading.removeAttr('disabled');
                    btnLoading.removeClass('loading');
                    },
                    error: function (xhr, ajaxOptions, thrownError) {}
                    });
                    // stop the form from submitting the normal way and refreshing the page
                    event.preventDefault();
                    });
                    // process the form
                    $('#user-city').change(function (event) {
                    // get the form data
                    // there are many ways to get this data using jQuery (you can use the class or id also)
                    var city = $('#user-city').val();
                    var formData = {
                    'user_city': $('#user-city').val()
                    };
                    // process the form
                    $.ajax({
                    type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                    url: 'https://oladoc.com/set_user_city', // the url where we want to POST
                    data: formData, // our data object
                    dataType: 'json', // what type of data do we expect back from the server
                    beforeSend: function () {
                    //$('.rquest-password-image').show();
                    },
                    success: function (response) {
                    var obj = eval(response);
                    if (obj) {
                    if (obj.error == 0) {
                    $("#user-city-modal").modal('hide');
                    var d = new Date();
                    var name = 'user-city';
                    var value = '1';
                    var minutes = 10080;
                    var date = new Date;
                    date.setDate(date.getDate() + 10);
                    $('[name="city"]').val(city);
                    document.cookie = name + "=" + value + "; expires=" + date;
                    } else {
                    $("#user-city-modal").modal('hide');
                    }
                    }
                    },
                    complete: function () {},
                    error: function (xhr, ajaxOptions, thrownError) {}
                    });
                    // stop the form from submitting the normal way and refreshing the page
                    event.preventDefault();
                    });
                    //end of reset password form...
                    $(document).on('change', '#signup_email, #signup_email_doctor', function (e) {
                    var email = $(this).val();
                    var url = "check_appointment_email.html";
                    var error = e.target.id == 'signup_email' ? $('#error') : $('#error_doctor');
                    error.children('p').replaceWith('');
                    $('#signupsubmit, #signupsubmit_doctor').removeAttr('disabled');
                    jQuery.ajax({
                    url: url, //Where to make Ajax calls
                    type: 'post',
                    data: {
                    'email': email,
                    'ci_csrf_token': '82b2fd03b3a61f87cccfc9573b028c60'
                    },
                    dataType: 'json', // Data type, HTML, json etc.
                    success: function (response) {
                    if (response.ID) {
                    if (error.children('p').length == 0) {
                    error.append("<p>Email already exists</p>");
                    $('#signupsubmit, #signupsubmit_doctor').attr('disabled');
                    }
                    }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                    }
                    });
                    }); //End of change function

                    /*  $('#doctorSignUpCheck').change(function () {
                    if (this.checked)
                    $('#doctorSignUpForm').fadeIn('slow');
                    else
                    $('#doctorSignUpForm').fadeOut('slow');
                    });*/
                    $('#forgot-password').click(function () {
                    $('#login-form').hide('slow');
                    $('#forgot-pasword-data').show('slow');
                    });
                    $('#remember-password').click(function () {
                    $('#forgot-pasword-data').hide('slow');
                    $('#login-form').show('slow');
                    });
                    });
                </script>
                <script type="1d2c8a7024420f104c0feeb6-text/javascript">
                    $(".login_form").keypress(function (event) {
                    if (event.which == 13) {
                    event.preventDefault();
                    $(".login_form").submit();
                    }
                    });
                    window.fbAsyncInit = function () {
                    //Initiallize the facebook using the facebook javascript sdk
                    FB.init({
                    appId: '197513377470095', // App ID
                    cookie: true, // enable cookies to allow the server to access the session
                    status: true, // check login status
                    xfbml: true, // parse XFBML
                    oauth: true //enable Oauth
                    });
                    };
                    //Read the baseurl from the config.php file
                    (function (d) {
                    var js, id = 'facebook-jssdk',
                    ref = d.getElementsByTagName('script')[0];
                    if (d.getElementById(id)) {
                    return;
                    }
                    js = d.createElement('script');
                    js.id = id;
                    js.async = true;
                    js.src = "../connect.facebook.net/en_US/all.js";
                    ref.parentNode.insertBefore(js, ref);
                    }(document));
                    //Onclick for fb login
                    $('.facebook-login').click(function (e) {
                    $('.facebook-login').attr('disabled', 'disabled');
                    FB.login(function (response) {
                    if (response.authResponse) {
                    parent.location = 'login_facebook.html'; //redirect uri after closing the facebook popup
                    }
                    }, {
                    scope: 'email,read_stream,publish_stream,user_birthday,user_location,user_work_history,user_hometown,user_photos'
                    }); //permissions for facebook
                    });
                </script>
                <script type="1d2c8a7024420f104c0feeb6-text/javascript">
                    $(function () {
                    var is_login_user = '';
                    if (is_login_user) {
                    if ('' == "1") {
                    var formData = {
                    'provider': '',
                    'hosp_id': '',
                    'user_id': ''
                    };
                    } else if ('' == "Doctor") {
                    var formData = {
                    'provider': '',
                    'hosp_id': '',
                    'user_id': ''
                    };
                    } else {
                    var formData = {
                    'provider': '',
                    'hosp_id': '',
                    'user_id': ''
                    };
                    }
                    // process the form
                    $.ajax({
                    type: 'GET', // define the type of HTTP verb we want to use (POST for our form)
                    url: 'https://oladoc.com/get_user_notifications', // the url where we want to POST
                    data: formData, // our data object
                    dataType: 'json', // what type of data do we expect back from the server
                    beforeSend: function () {},
                    success: function (response) {
                    var obj = eval(response);
                    if (obj) {
                    $(".alerts-info").html(obj.data.today_pending);
                    $(".alert-notification .block-tag").html(obj.data.today_pending + " Today's appointments <br> <br>" + obj.data.future_pending + " Future appointments");
                    }
                    },
                    complete: function () {},
                    error: function (xhr, ajaxOptions, thrownError) {}
                    });
                    }
                    });
                </script>
                <script type="1d2c8a7024420f104c0feeb6-text/javascript">
                    $("#signupsubmit").click(function () {
                    var check_valid = validatesignup();
                    if (check_valid) {
                    $('.signup_form').submit(function () {
                    var btnLoading = $(this).find('.js-btn-control');
                    btnLoading.attr('disabled', 'disabled');
                    btnLoading.addClass('loading');
                    $("input[type='submit']", this)
                    .attr('disabled', 'disabled');
                    return true;
                    });
                    }
                    });
                    $(function () {
                    var check_promotion = getCookie('promotion-coki');
                    if (!check_promotion == '1') {
                    $("#modal_promotion").modal().show();
                    }
                    var d = new Date();
                    var name = 'promotion-coki';
                    var value = '1';
                    var minutes = 45;
                    var date = new Date();
                    date.setDate(date.getDate() + 1);
                    document.cookie = name + "=" + value + "; expires=" + date;
                    });
                    function getCookie(name) {
                    var re = new RegExp(name + "=([^;]+)");
                    var value = re.exec(document.cookie);
                    return (value != null) ? unescape(value[1]) : null;
                    }
                </script>
                <script type="1d2c8a7024420f104c0feeb6-text/javascript">
                    $(document).ready(function () {
                    // reset form fields
                    $('[name="city"], [name="doctor-name"]').val('');
                    $('#img-arrow-up').click(function () {
                    $('#list_footer').find('li').slideToggle("slow");
                    $('#list_footer1').find('li').slideToggle("slow");
                    $('#list_footer2').find('li').slideToggle("slow");
                    $('#img-arrow-up').css("display", "none");
                    $('#img-arrow').css("display", "inline-block");
                    });
                    $("#img-arrow").click(function () {
                    $('#list_footer').find('li').slideToggle("slow");
                    $('#list_footer1').find('li').slideToggle("slow");
                    $('#list_footer2').find('li').slideToggle("slow");
                    $('#img-arrow').css("display", "none");
                    $('#img-arrow-up').css("display", "inline-block");
                    });
                    $(".download-app-icons a").hover(function () {
                    //$('.download-dropdown-container').addClass('show-download');
                    },
                    function () {
                    //$('.download-dropdown-container').removeClass('show-download');
                    });
                    });
                </script>

                <script type="1d2c8a7024420f104c0feeb6-text/javascript">
                    function setCookieName() {
                    var name = 'user-city';
                    var value = $('[name="city"]').val();
                    var date = new Date;
                    date.setDate(date.getDate() + 10);
                    // Set city name in cookie
                    document.cookie = name + "=" + value + "; expires=" + date;
                    }
                    $('.js-scroll-to').click(function (e) {
                    e.preventDefault();
                    t = $($(this).attr('href')).offset().top;
                    $('html, body').animate({
                    scrollTop: t - 100
                    }, 400);
                    });
                    function validatePhone(field) {
                    phone = field.val();
                    filter = /^[\d\s]+$/;
                    if (!(filter.test(phone))) {
                    return false;
                    } else {
                    return true;
                    }
                    }

                    $('#demoRequestForm').on('submit', function (e) {
                    var obj;
                    var btnLoading = $(this).find('.js-btn-control');
                    var phoneValid = false;
                    // 1. Prevent default button behavior
                    e.preventDefault();
                    // 2. Validate phone number
                    phoneValid = validatePhone($('#user_phone'));
                    // 3. POST data via AJAX
                    if (phoneValid) {
                    $('#user_phone').removeClass('invalid');
                    $.ajax({
                    url: 'https://oladoc.com/request_demo',
                    type: 'POST',
                    data: $('#demoRequestForm').serialize(),
                    beforeSend: function () {
                    btnLoading.attr('disabled', 'disabled');
                    btnLoading.addClass('loading');
                    },
                    success: function (data) {
                    obj = JSON.parse(data);
                    if (obj.error == 0) {
                    $('#demoRequestForm')[0].reset();
                    $('.demo-modal-body').html('<p class="m-0 py-4">Thank you for your interest. We will get in touch shortly!</p>');
                    } else {
                    $('.demo-modal-body').html('<p class="m-0 py-4">Cannot send demo request please try again later!</p>');
                    }
                    },
                    complete: function () {
                    $('.request-image-demo').hide();
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                    $(".demo-modal-body").html("Cannot place order please try later.");
                    }
                    });
                    } else {
                    $('#user_phone').addClass('invalid');
                    $('.control-label').removeClass('d-none');
                    }
                    });
                </script>

                <script type="1d2c8a7024420f104c0feeb6-text/javascript">
                    !function (f, b, e, v, n, t, s)
                    {
                    if (f.fbq)
                    return;
                    n = f.fbq = function () {
                    n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                    };
                    if (!f._fbq)
                    f._fbq = n;
                    n.push = n;
                    n.loaded = !0;
                    n.version = '2.0';
                    n.queue = [];
                    t = b.createElement(e);
                    t.async = !0;
                    t.src = v;
                    s = b.getElementsByTagName(e)[0];
                    s.parentNode.insertBefore(t, s)
                    }(window, document, 'script',
                    '../connect.facebook.net/en_US/fbevents.js');
                    fbq('init', '2094734740812975');
                    fbq('track', 'PageView');
                </script>
                <noscript>
                <img height="1" width="1" src="https://www.facebook.com/tr?id=2094734740812975&amp;ev=PageView&amp;noscript=1"/>
                </noscript>

                <script src="frontend/assets/js/lightslider.js" type="1d2c8a7024420f104c0feeb6-text/javascript"></script>

                <script src="frontend/assets/js/wow.js" type="1d2c8a7024420f104c0feeb6-text/javascript"></script>
                <script type="1d2c8a7024420f104c0feeb6-text/javascript">
                    function set_gender(gender){
                    document.getElementById('search_gender').value = gender;
                    }
                    function get_localities_areas(){

                    var city = $("#city1").val();
                    if(city == ''){
                    city = getCookie('user-city');
                    }
                    if(city != ''){
                    //alert("localities data requested.");
                    $.ajax({
                    type: "GET",
                    dataType: 'json', // what type of data do we expect back from the server
                    url: "https://oladoc.com/get_localities",
                    data: {'city':city}, // our data object
                    beforeSend: function() {},
                    success: function(r) {
                    var str = '<option value="" selected>Any locality</option>';
                    //alert("localities data received.");
                    for(var i=0; i<r.data.length; i++){
                    str += '<option value="'+r.data[i]['locality']+'">'+r.data[i]['locality']+'</option>';
                    }
                    $("#locality").empty();
                    $("#locality").append(str);

                    },
                    complete: function() {}
                    });
                    }
                    }
                    $("#city1").change(function(){
                    // alert("test2");
                    get_localities_areas();
                    });

                    get_localities_areas();
                    $(document).ready(function() {
                    //get_banner_doctors();
                    var winwidth = $(window).width();
                    if (winwidth <= 480) {
                    $(function() {
                    $('#select-featured-spec').click(function() {
                    $('#filters-doctors').slideToggle();
                    });
                    $('#filters-doctors li').click(function(e) {
                    $('#select-featured-spec').text($(this).text());
                    $('#filters-doctors').hide();
                    $(this).addClass('current');
                    e.preventDefault();
                    });
                    });
                    }
                    $(window).resize(function() {
                    var winwidth = $(window).width();
                    if (winwidth <= 480) {
                    $(function() {
                    $('#select-featured-spec').click(function() {
                    $('#filters-doctors').show();
                    });
                    $('#filters-doctors li').click(function(e) {
                    $('#select-featured-spec').text($(this).text());
                    $('#filters-doctors').hide();
                    $(this).addClass('current');
                    e.preventDefault();
                    });
                    });
                    }
                    });
                    //user city modal
                    $(function() {
                    var city_cokk = getCookie('user-city');
                    if (city_cokk != '1') {
                    $('[name="city"]').val(city_cokk);
                    }
                    });
                    });

                    $(function() {
                    $('body').on('click', '.btn-close-msngr', function() {
                    $('.fb-page').toggle();
                    if ($('.fb-page').is(':hidden')) {
                    $('.arrow-up').addClass('show').removeClass('hide');
                    $('.arrow-down').removeClass('show').addClass('hide');
                    } else {
                    $('.arrow-up').removeClass('show').addClass('hide');
                    $('.arrow-down').addClass('show').removeClass('hide');
                    }
                    });
                    setTimeout(function() {
                    $('.messinger-outer').prepend('<span class="close-messinger">talk with us<span class="btn-close-msngr"><i class="fa fa-angle-down arrow-down hide" aria-hidden="true"></i><i class="fa fa-angle-up arrow-up show" aria-hidden="true"></i></span></span>');
                    $('.arrow-up').removeClass('hide');
                    $('.arrow-up').addClass('show');
                    }, 2000);
                    (function($) {
                    $.fn.countTo = function(options) {
                    // merge the default plugin settings with the custom options
                    options = $.extend({}, $.fn.countTo.defaults, options || {});
                    // how many times to update the value, and how much to increment the value on each update
                    var loops = Math.ceil(options.speed / options.refreshInterval),
                    increment = (options.to - options.from) / loops;
                    return $(this).each(function() {
                    var _this = this,
                    loopCount = 0,
                    value = options.from,
                    interval = setInterval(updateTimer, options.refreshInterval);
                    function updateTimer() {
                    value += increment;
                    loopCount++;
                    $(_this).html(value.toFixed(options.decimals));
                    if (typeof(options.onUpdate) == 'function') {
                    options.onUpdate.call(_this, value);
                    }
                    if (loopCount >= loops) {
                    clearInterval(interval);
                    value = options.to;
                    if (typeof(options.onComplete) == 'function') {
                    options.onComplete.call(_this, value);
                    }
                    }
                    }
                    });
                    };
                    $.fn.countTo.defaults = {
                    from: 0, // the number the element should start at
                    to: 100, // the number the element should end at
                    speed: 1000, // how long it should take to count between the target numbers
                    refreshInterval: 100, // how often the element should be updated
                    decimals: 0, // the number of decimal places to show
                    onUpdate: null, // callback method for every time the element is updated,
                    onComplete: null, // callback method for when the element finishes updating
                    };
                    })(jQuery);
                    jQuery(function($) {
                    $('.span-counter').countTo({
                    from: 11000,
                    to: 11000,
                    speed: 800,
                    refreshInterval: 10,
                    decimals: 0,
                    onComplete: function(value) {
                    var number = value.toLocaleString();
                    $('.span-counter').html(number);
                    }
                    });
                    });
                    });
                    $(function() {
                    wow = new WOW({
                    animateClass: 'animated',
                    offset: 100,
                    callback: function(box) {
                    // console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
                    }
                    });
                    wow.init();
                    $("#content-slider").lightSlider({
                    loop: false,
                    keyPress: true,
                    auto: true,
                    loop: false,
                    item: 8,
                    pause: 30000,
                    slideMove: 1,
                    responsive: [{
                    breakpoint: 800,
                    settings: {
                    item: 6
                    }
                    }, {
                    breakpoint: 480,
                    settings: {
                    item: 4
                    }
                    }],
                    onBeforeSlide: function(el) {}
                    });
                    $("#blog-list-slider").lightSlider({
                    keyPress: true,
                    auto: true,
                    loop: false,
                    item: 8,
                    pause: 30000,
                    slideMove: 1,
                    responsive: [{
                    breakpoint: 800,
                    settings: {
                    item: 6
                    }
                    }, {
                    breakpoint: 480,
                    settings: {
                    item: 6
                    }
                    }],
                    onBeforeSlide: function(el) {
                    }
                    });
                    });
                </script>
                <style>
                    ul {
                        list-style: none outside none;
                        padding-left: 0;
                        margin: 0;
                    }
                    .demo .item {
                        margin-bottom: 60px;
                    }
                    .content-slider h3 {
                        margin: 0;
                        padding: 70px 0;
                    }
                    .demo {
                        width: 800px;
                    }
                </style>
                <script type="1d2c8a7024420f104c0feeb6-text/javascript">
                    $(function() {
                    $("#owl-example").owlCarousel({
                    autoPlay: 10000,
                    navigation: false,
                    slideSpeed: 500,
                    paginationSpeed: 2000,
                    singleItem: true,
                    pagination: false,
                    rewindSpeed: 5000,
                    autoplayHoverPause: true,
                    autoplayTimeout: 5000,
                    autoplaySpeed: 7000,
                    animate: 'fade',
                    beforeMove: moved,
                    loop: false
                    });
                    $(".testimonials-slider").owlCarousel({
                    autoPlay: false,
                    navigation: true,
                    navigationText: [
                    "<i class='fa fa-arrow-circle-left'></i>",
                    "<i class='fa fa-arrow-circle-right'></i>"
                    ],
                    slideSpeed: 300,
                    paginationSpeed: 400,
                    singleItem: false,
                    pagination: true,
                    rewindSpeed: 500,
                    animate: 'fade',
                    margin: 10,
                    loop: false,
                    autoWidth: true,
                    items: 1,
                    responsive: {
                    0: {
                    items: 1
                    },
                    480: {
                    items: 1
                    },
                    768: {
                    items: 1
                    }
                    }
                    });
                    $(".health-tips-outer").owlCarousel({
                    autoPlay: false,
                    navigation: true,
                    navigationText: [
                    "<i class='fa fa-arrow-circle-left'></i>",
                    "<i class='fa fa-arrow-circle-right'></i>"
                    ],
                    slideSpeed: 300,
                    paginationSpeed: 400,
                    singleItem: true,
                    pagination: true,
                    rewindSpeed: 500,
                    animate: 'fade',
                    loop: false
                    });
                    function moved() {
                    var owl = $("#owl-example").data('owlCarousel');
                    //alert(owl.currentItem);
                    var slide_number = owl.currentItem + 1;
                    $(".fixed-menu-right li").removeClass('active');
                    $(".fixed-menu-right li:nth-child(" + slide_number + ")").addClass('active');
                    if (owl.currentItem == '0') {
                    $(".home-serch-container").fadeIn();
                    } else {
                    $(".home-serch-container").fadeOut();
                    }
                    }
                    var winwidth = $(window).width();
                    var homeheight = $('.homepage-owl').height();
                    $(window).scroll(function() {
                    if (winwidth <= 1300 && winwidth > 480) {
                    var scrolled_val = $(document).scrollTop();
                    if (scrolled_val > homeheight) {
                    $('.fixed-menu-right').fadeOut();
                    } else {
                    $('.fixed-menu-right').fadeIn();
                    }
                    }
                    });
                    $(window).resize(function() {
                    var winwidth2 = $(window).width();
                    var homeheight = $('.homepage-owl').height();
                    $(window).scroll(function() {
                    if (winwidth2 <= 1300 && winwidth2 > 480) {
                    var scrolled_val = $(document).scrollTop();
                    //alert(scrolled_val);
                    if (scrolled_val > homeheight) {
                    $('.fixed-menu-right').fadeOut();
                    } else {
                    $('.fixed-menu-right').fadeIn();
                    }
                    }
                    });
                    });
                    });
                    function select_slide_first(slide_number) {
                    $("#owl-example").stop(); // Autoplay Stop
                    $('.back-to-top').click();
                    var owl = $("#owl-example").data('owlCarousel');
                    owl.stop(); // Autoplay Stop
                    $(".fixed-menu-right li").removeClass('active');
                    $(".fixed-menu-right li:nth-child(" + slide_number + ")").addClass('active');
                    slide_number--;
                    $('#owl-example').trigger('owl.goTo', slide_number);
                    if (slide_number < 1) {
                    $(".home-serch-container").fadeIn();
                    } else {
                    $(".home-serch-container").fadeOut();
                    }
                    slide_number++;
                    $(".fixed-menu-right li:nth-child(" + slide_number + ")").click();
                    }
                </script>
                <script type="1d2c8a7024420f104c0feeb6-text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"92258c03cc","applicationID":"169692954","transactionName":"b1VXbUAAWBdQUkBQC1YfdFpGCFkKHnxVUAoXWVtdVxk=","queueTime":0,"applicationTime":38,"atts":"QxJUGwgaSxk=","errorBeacon":"bam.nr-data.net","agent":""}</script><script src="../ajax.cloudflare.com/cdn-cgi/scripts/a2bd7673/cloudflare-static/rocket-loader.min.js" data-cf-settings="1d2c8a7024420f104c0feeb6-|49" defer=""></script></body>

                <!-- Mirrored from oladoc.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2019 11:49:08 GMT -->
                </html>
