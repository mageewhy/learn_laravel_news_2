@extends('frontend.frontend-layout')
@section('frontend-content')
    <main>
        <div class="container mt-5 ">
            <div class="swiper">
                <div class="swiper-wrapper">
                    @foreach ($post_hero as $hero_data)
                        <div class="swiper-slide" data-swiper-autoplay="2000">
                            <img class="d-block w-100" height="500px" src="{{ asset('images/' . $hero_data->image) }}"
                                alt="hero slide">
                        </div>
                    @endforeach
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
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
                                            <img src="{{ asset('frontend/assets/img/news/whatNews1.jpg') }}" alt="">
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
                                            <img src="{{ asset('frontend/assets/img/news/whatNews2.jpg') }}" alt="">
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
                                            <img src="{{ asset('frontend/assets/img/news/whatNews3.jpg') }}" alt="">
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
                                                            <li class="page-item"><a class="page-link" href="#"><span
                                                                        class="flaticon-arrow roted"></span></a></li>
                                                            <li class="page-item active"><a class="page-link"
                                                                    href="#">01</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">02</a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">03</a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#"><span
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
                                            src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
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
                                            src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
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
                                            src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
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
                                            src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
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
                                            src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
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
@endsection
@section('frontend-script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
            const swiper = new Swiper('.swiper', {
                speed: 400,
                spaceBetween: 100,
            });
            const swiper = document.querySelector('.swiper').swiper;

            // Now you can use all slider methods like
            swiper.slideNext();

        });
    </script>
@endsection
