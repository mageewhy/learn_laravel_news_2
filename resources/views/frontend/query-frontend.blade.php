@extends('frontend.frontend-layout')
@section('frontend-content')
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-3 col-md-3">
                    <div class="section-tittle mb-30">
                        <h3>
                            @if (session()->get('language') == 'khmer')
                                ព័ត៌មានដែលបានស្រាវជ្រាវ
                            @else
                                Searched News
                            @endif
                        </h3>
                    </div>
                </div>

            </div>
            <div class="row">

                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">

                        @forelse ($post as $item)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="{{ asset('images/' . $item->image) }}" alt="">
                                    <a href="#" class="blog_item_date">
                                        <p>{{ $item->updated_at->toFormattedDayDateString() }}</p>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="{{ route('single-post-frontend', $item->id) }}">
                                        <h2>
                                            @if (session()->get('language') == 'khmer')
                                                {{ Str::words($item->title_kh, 10) }}
                                            @else
                                                {{ Str::words($item->title_en, 10) }}
                                            @endif
                                        </h2>
                                    </a>
                                    <p>
                                        @if (session()->get('language') == 'khmer')
                                            {!! Str::words($item->description_kh, 40) !!}
                                        @else
                                            {!! Str::words($item->description_en, 60) !!}
                                        @endif
                                    </p>
                                    <ul class="blog-info-link">
                                        <li>
                                            <span><i class="fa fa-user"></i>
                                                @if (session()->get('language') == 'khmer')
                                                    {{ $item->category->category_kh }},
                                                    {{ $item->subcategory->sub_category_kh }}
                                                @else
                                                    {{ $item->category->category_en }},
                                                    {{ $item->subcategory->sub_category_en }}
                                                @endif
                                            </span>
                                        </li>
                                        <li>
                                            <span><i class="fa fa-comments"></i>
                                                {{ $item->comment->count()}} Comments
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        @empty
                            @include('frontend.partials.empty-page')
                        @endforelse

                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                {{ $post->links() }}
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    @include('frontend.partials.post-sidebar')
                </div>
            </div>
        </div>
    </section>
@endsection
