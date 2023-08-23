<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>News HTML-5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/ticker-style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
</head>

<body>

    <!-- Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->

    @include('frontend.partials.header')

    <main>
        <div class="container mt-5 ">
            <div id="carouselExampleControls" class="carousel slide shadow bg-white rounded" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" height="600px"
                            src="{{ asset('frontend/assets/img/trending/trending_bottom3.jpg') }}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" height="600px"
                            src="{{ asset('frontend/assets/img/trending/trending_bottom1.jpg') }}"
                            alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" height="600px"
                            src="{{ asset('frontend/assets/img/trending/trending_bottom2.jpg') }}" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- Trending Area Start -->
        <div class="trending-area fix">
            <div class="container mt-5">
                <div class="trending-main">
                    <div class="row">
                        <!-- Trending Bottom -->
                        <div class="trending-bottom col-8">
                            <div class="row p-2 shadow-sm mb-5 bg-white rounded">
                                <div class="col-lg-12">
                                    <div class="section-tittle mb-30">
                                        <h3>Weekly Top News</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="{{ asset('frontend/assets/img/trending/trending_bottom1.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color1">Lifestyple</span>
                                            <h4><a href="details.html">Get the Illusion of Fuller Lashes by
                                                    “Mascng.”</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="{{ asset('frontend/assets/img/trending/trending_bottom2.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color2">Sports</span>
                                            <h4>
                                                <h4><a href="details.html">Get the Illusion of Fuller Lashes by
                                                        “Mascng.”</a></h4>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="{{ asset('frontend/assets/img/trending/trending_bottom3.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color3">Travels</span>
                                            <h4><a href="details.html"> Welcome To The Best Model Winner
                                                    Contest</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 ">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="{{ asset('frontend/assets/img/news/whatNews1.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color3">Night Party</span>
                                            <h4><a href="details.html"> Welcome To The Best Model Winner
                                                    Contest</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 ">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="{{ asset('frontend/assets/img/news/whatNews2.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color3">Night Party</span>
                                            <h4><a href="details.html"> Welcome To The Best Model Winner
                                                    Contest</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 ">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="{{ asset('frontend/assets/img/news/whatNews3.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color3">Night Party</span>
                                            <h4><a href="details.html"> Welcome To The Best Model Winner
                                                    Contest</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <!--Start pagination -->
                                <div class="pagination-area pb-45 text-center col-12">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="single-wrap d-flex justify-content-center">
                                                    <nav aria-label="Page navigation example">
                                                        <ul class="pagination justify-content-start">
                                                            <li class="page-item"><a class="page-link"
                                                                    href="#"><span
                                                                        class="flaticon-arrow roted"></span></a></li>
                                                            <li class="page-item active"><a class="page-link"
                                                                    href="#">01</a></li>
                                                            <li class="page-item"><a class="page-link"
                                                                    href="#">02</a></li>
                                                            <li class="page-item"><a class="page-link"
                                                                    href="#">03</a></li>
                                                            <li class="page-item"><a class="page-link"
                                                                    href="#"><span
                                                                        class="flaticon-arrow right-arrow"></span></a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End pagination  -->
                            </div>

                            <div class="row p-2 shadow-sm mb-5 bg-white rounded">
                                <div class="col-lg-12">
                                    <div class="section-tittle mb-30">
                                        <h3>Recent News</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="{{ asset('frontend/assets/img/trending/trending_bottom1.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color1">Lifestyple</span>
                                            <h4><a href="details.html">Get the Illusion of Fuller Lashes by
                                                    “Mascng.”</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="{{ asset('frontend/assets/img/trending/trending_bottom2.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color2">Sports</span>
                                            <h4>
                                                <h4><a href="details.html">Get the Illusion of Fuller Lashes by
                                                        “Mascng.”</a></h4>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="{{ asset('frontend/assets/img/trending/trending_bottom3.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color3">Travels</span>
                                            <h4><a href="details.html"> Welcome To The Best Model Winner
                                                    Contest</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 ">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="{{ asset('frontend/assets/img/news/whatNews1.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color3">Night Party</span>
                                            <h4><a href="details.html"> Welcome To The Best Model Winner
                                                    Contest</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 ">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="{{ asset('frontend/assets/img/news/whatNews2.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color3">Night Party</span>
                                            <h4><a href="details.html"> Welcome To The Best Model Winner
                                                    Contest</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 ">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="{{ asset('frontend/assets/img/news/whatNews3.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color3">Night Party</span>
                                            <h4><a href="details.html"> Welcome To The Best Model Winner
                                                    Contest</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <!--Start pagination -->
                                <div class="pagination-area pb-45 text-center col-12">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="single-wrap d-flex justify-content-center">
                                                    <nav aria-label="Page navigation example">
                                                        <ul class="pagination justify-content-start">
                                                            <li class="page-item"><a class="page-link"
                                                                    href="#"><span
                                                                        class="flaticon-arrow roted"></span></a></li>
                                                            <li class="page-item active"><a class="page-link"
                                                                    href="#">01</a></li>
                                                            <li class="page-item"><a class="page-link"
                                                                    href="#">02</a></li>
                                                            <li class="page-item"><a class="page-link"
                                                                    href="#">03</a></li>
                                                            <li class="page-item"><a class="page-link"
                                                                    href="#"><span
                                                                        class="flaticon-arrow right-arrow"></span></a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End pagination  -->
                            </div>
                        </div>
                        <!-- Right content -->
                        <div class="col-lg-4">
                            <div class="trand-right-single d-flex">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                                </div>
                                <div class="trand-right-cap">
                                    <span class="color1">Video</span>
                                    <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="trand-right-single d-flex">
                                <div class="trand-right-img">
                                    <img src="{{ asset('frontend/assets/img/trending/right1.jpg') }}" alt="">
                                </div>
                                <div class="trand-right-cap">
                                    <span class="color1">Concert</span>
                                    <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="trand-right-single d-flex">
                                <div class="trand-right-img">
                                    <img src="{{ asset('frontend/assets/img/trending/right2.jpg') }}" alt="">
                                </div>
                                <div class="trand-right-cap">
                                    <span class="color3">sea beach</span>
                                    <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="trand-right-single d-flex">
                                <div class="trand-right-img">
                                    <img src="{{ asset('frontend/assets/img/trending/right3.jpg') }}" alt="">
                                </div>
                                <div class="trand-right-cap">
                                    <span class="color2">Bike Show</span>
                                    <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="trand-right-single d-flex">
                                <div class="trand-right-img">
                                    <img src="{{ asset('frontend/assets/img/trending/right4.jpg') }}" alt="">
                                </div>
                                <div class="trand-right-cap">
                                    <span class="color4">Sea beach</span>
                                    <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="trand-right-single d-flex">
                                <div class="trand-right-img">
                                    <img src="{{ asset('frontend/assets/img/trending/right5.jpg') }}" alt="">
                                </div>
                                <div class="trand-right-cap">
                                    <span class="color1">Skeping</span>
                                    <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="trand-right-single d-flex">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                                </div>
                                <div class="trand-right-cap">
                                    <span class="color1">Video</span>
                                    <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="trand-right-single d-flex">
                                <div class="trand-right-img">
                                    <img src="{{ asset('frontend/assets/img/trending/right5.jpg') }}" alt="">
                                </div>
                                <div class="trand-right-cap">
                                    <span class="color1">Skeping</span>
                                    <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="trand-right-single d-flex">
                                <div class="trand-right-img">
                                    <img src="{{ asset('frontend/assets/img/trending/right4.jpg') }}" alt="">
                                </div>
                                <div class="trand-right-cap">
                                    <span class="color4">Sea beach</span>
                                    <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="trand-right-single d-flex">
                                <div class="trand-right-img">
                                    <img src="{{ asset('frontend/assets/img/trending/right5.jpg') }}" alt="">
                                </div>
                                <div class="trand-right-cap">
                                    <span class="color1">Skeping</span>
                                    <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="trand-right-single d-flex">
                                <div class="trand-right-img">
                                    <img src="{{ asset('frontend/assets/img/trending/right4.jpg') }}" alt="">
                                </div>
                                <div class="trand-right-cap">
                                    <span class="color4">Sea beach</span>
                                    <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Trending Area End -->

        <!--   Weekly2-News start -->
        <div class="weekly2-news-area  weekly2-pading gray-bg">
            <div class="container">
                <div class="weekly2-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>Weekly Top News</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="weekly2-news-active dot-style d-flex dot-style">
                                <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <img src="{{ asset('frontend/assets/img/news/weekly2News1.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="weekly2-caption">
                                        <span class="color1">Corporate</span>
                                        <p>25 Jan 2020</p>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <img src="{{ asset('frontend/assets/img/news/weekly2News2.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="weekly2-caption">
                                        <span class="color1">Event night</span>
                                        <p>25 Jan 2020</p>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <img src="{{ asset('frontend/assets/img/news/weekly2News3.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="weekly2-caption">
                                        <span class="color1">Corporate</span>
                                        <p>25 Jan 2020</p>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <img src="{{ asset('frontend/assets/img/news/weekly2News4.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="weekly2-caption">
                                        <span class="color1">Event time</span>
                                        <p>25 Jan 2020</p>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <img src="{{ asset('frontend/assets/img/news/weekly2News4.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="weekly2-caption">
                                        <span class="color1">Corporate</span>
                                        <p>25 Jan 2020</p>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Weekly2-News -->
        <!-- Video Section -->
        <div class="weekly2-news-area  weekly2-pading gray-bg">
            <div class="container">
                <div class="weekly2-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="weekly2-news-active dot-style d-flex dot-style">
                                <div class="weekly2-single">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item"
                                            src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="weekly2-caption">
                                        <span class="color1">Corporate</span>
                                        <p>25 Jan 2020</p>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="weekly2-single">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item"
                                            src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="weekly2-caption">
                                        <span class="color1">Event night</span>
                                        <p>25 Jan 2020</p>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="weekly2-single">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item"
                                            src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="weekly2-caption">
                                        <span class="color1">Corporate</span>
                                        <p>25 Jan 2020</p>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="weekly2-single">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item"
                                            src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="weekly2-caption">
                                        <span class="color1">Event time</span>
                                        <p>25 Jan 2020</p>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="weekly2-single">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item"
                                            src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="weekly2-caption">
                                        <span class="color1">Corporate</span>
                                        <p>25 Jan 2020</p>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Video Section -->
    </main>

    @include('frontend.partials.footer')

    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="{{ asset('frontend/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('frontend/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('frontend/assets/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
    <!-- Date Picker -->
    <script src="{{ asset('frontend/assets/js/gijgo.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/animated.headline.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.js') }}"></script>

    <!-- Breaking New Pluging -->
    <script src="{{ asset('frontend/assets/js/jquery.ticker.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/site.js') }}"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="{{ asset('frontend/assets/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.sticky.js') }}"></script>

    <!-- contact js -->
    <script src="{{ asset('frontend/assets/js/contact.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.form.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/mail-script.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    <!-- JS here End-->


</body>

</html>
