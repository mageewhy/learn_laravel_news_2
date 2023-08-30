@extends('frontend.frontend-layout')
@section('frontend-content')
    <main>
        <!-- Whats New Start -->
        <section class="whats-news-area pt-50 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row d-flex justify-content-between">
                            <div class="col-lg-3 col-md-3">
                                <div class="section-tittle mb-30">
                                    <h3>
                                        @if (session()->get('language') == 'khmer')
                                            {{ $category->category_kh }}
                                        @else
                                            {{ $category->category_en }}
                                        @endif
                                    </h3>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-12">
                                <!-- Nav Card -->
                                <div class="tab-content" id="nav-tabContent">
                                    <!-- Home Card -->
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                        aria-labelledby="nav-home-tab">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                @forelse ($post as $item)
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="single-what-news mb-100">
                                                            <div class="what-img">
                                                                <img src="{{ asset('images/' . $item->image) }}"
                                                                    alt="{{$item->image}}">
                                                            </div>
                                                            <div class="what-cap">
                                                                <span class="color1">
                                                                    @if (session()->get('language') == 'khmer')
                                                                        {{ $item->category->category_kh }}
                                                                    @else
                                                                        {{ $item->category->category_en }}
                                                                    @endif
                                                                </span>
                                                                <h4>
                                                                    <a href="#">
                                                                        @if (session()->get('language') == 'khmer')
                                                                            {{ Str::words($item->title_kh, 10) }}
                                                                        @else
                                                                            {{ Str::words($item->title_en, 10) }}
                                                                        @endif
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @empty
                                                    @include('frontend.partials.empty-page')
                                                @endforelse
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Nav Card -->
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        @include('frontend.partials.post-sidebar')
                    </div>
                </div>
                <!--Start pagination -->
                <div class="pagination-area pb-45 text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="single-wrap d-flex justify-content-center">
                                    <nav aria-label="Page navigation example">
                                        {{ $post->links() }}
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End pagination  -->
            </div>
        </section>
        <!-- Whats New End -->



    </main>
@endsection


{{-- <div class="col-lg-9 col-md-9">
    <div class="properties__button">
        <!--Nav Button  -->
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                    href="#nav-home" role="tab" aria-controls="nav-home"
                    aria-selected="true">All</a>
                @foreach ($subcategory as $item)
                    <a class="nav-item nav-link" id="subcategory-tab" data-toggle="tab"
                        href="#tab--{{ $item->id }}" role="tab"
                        aria-controls="#tab--{{ $item->id }}"
                        aria-selected="false">{{ $item->sub_category_en }}</a>
                @endforeach
            </div>
        </nav>
        <!--End Nav Button  -->
    </div>
</div> --}}

<!-- Subcategory Tab -->
{{-- @foreach ($post as $item)
<div class="tab-pane fade" id="tab--{{ $item->id }}" role="tabpanel"
    aria-labelledby="subcategory-tab">
    <div class="whats-news-caption">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="single-what-news mb-100">
                    <div class="what-img">
                        <img src="{{ asset('images/' . $item->image) }}" alt="Subcategory Image">
                    </div>
                    <div class="what-cap">
                        <span class="color1">
                            @if (session()->get('language') == 'khmer')
                                {{ $item->category->category_kh }}
                            @else
                                {{ $item->category->category_en }}
                            @endif
                        </span>
                        <h4>
                            <a href="{{route('subcategory-frontend', $item->id)}}">
                                @if (session()->get('language') == 'khmer')
                                    {{ Str::words($item->title_kh, 10) }}
                                @else
                                    {{ Str::words($item->title_en, 10) }}
                                @endif
                            </a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endforeach --}}
