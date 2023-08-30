<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            {{-- header --}}
            <div class="header-top black-bg d-none d-md-block">
                <div class="container">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                <ul>
                                    <li><img src="{{ asset('frontend/assets/img/icon/header_icon1.png') }}"
                                            alt="">{{ $date }}</li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul class="header-social">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li> <a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- top nav --}}
            <div class="header-mid d-none d-md-block">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-3 col-lg-3 col-md-3">
                            <div class="logo">
                                <a href="{{ route('home-page') }}">
                                    <h1 class="text-danger text-bold">Laravel News</h1>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Marquee --}}
            @php
                $post = App\Models\Post::orderBy('order', 'desc')
                    ->limit(4)
                    ->latest()
                    ->get();
            @endphp
            <div class="mt-3 mb-3">
                <marquee behavior="scroll" scrollamount="5" onmouseover="this.stop()" onmouseout="this.start()"
                    width="100%" direction="left" height="auto">
                    @foreach ($post as $item)
                        <a href="{{route('single-post-frontend', $item->id)}}" style="color:black;">
                            @if (session()->get('language') == 'khmer')
                                {{ Str::words($item->title_kh, 30) }}
                            @else
                                {{ Str::words($item->title_en, 30) }}
                            @endif
                        </a>
                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    @endforeach
                </marquee>
            </div>
            {{-- Navigation Bar --}}
            <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                            <!-- sticky -->
                            <div class="sticky-logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-md-block">
                                <nav>
                                    @php
                                        $category = App\Models\Category::all();
                                    @endphp
                                    <ul id="navigation">
                                        <li><a href="{{ route('home-page') }}">Home</a></li>
                                        @foreach ($category as $categ_data)
                                            <li><a href=""> {{ $categ_data->category_en }} </a>
                                                @php
                                                    $subcategory = App\Models\Subcategory::where('category_id', $categ_data->id)->get();
                                                @endphp
                                                <ul class="submenu">
                                                    @forelse ($subcategory as $sub_data)
                                                        <li><a href="">{{ $sub_data->sub_category_en }}</a></li>
                                                    @empty
                                                        <li><a href="#">No Subcategory</a></li>
                                                    @endforelse
                                                </ul>
                                            </li>
                                        @endforeach
                                        <li><a href="latest_news.html">Latest News</a></li>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4">
                            <div class="header-right-btn f-right d-none d-lg-block">
                                <i class="fas fa-search special-tag"></i>
                                <div class="search-box">
                                    <form action="#">
                                        <input type="text" placeholder="Search">

                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-md-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
