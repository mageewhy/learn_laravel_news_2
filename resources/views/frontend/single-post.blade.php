@extends('frontend.frontend-layout')
@section('frontend-content')
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid" src="{{ asset('images/' . $post->image) }}" alt="{{ $post->image }}">
                        </div>
                        <div class="blog_details">
                            <h2>
                                @if (session()->get('language') == 'khmer')
                                    {{ $post->title_kh }}
                                @else
                                    {{ $post->title_en }}
                                @endif
                            </h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li>
                                    <a href="#"><i class="fa fa-user"></i>
                                        {{ $post->category->category_en }},
                                        {{ $post->subcategory->sub_category_en }}
                                    </a>
                                </li>
                                <li><a class="comment-scroll" href="#comment-section"><i class="fa fa-comments"></i> {{ $post->comment->count() }}
                                        Comments</a></li>
                            </ul>
                            <p class="excert">
                                @if (session()->get('language') == 'khmer')
                                    {!! $post->description_kh !!}
                                @else
                                    {!! $post->description_en !!}
                                @endif

                            </p>
                        </div>
                    </div>
                    {{-- <div class="blog-author">
                        <div class="media align-items-center">
                            <img src="assets/img/blog/author.png" alt="">
                            <div class="media-body">
                                <a href="#">
                                    <h4>Harvard milan</h4>
                                </a>
                                <p>Second divided from form fish beast made. Every of seas all gathered use saying you're,
                                    he
                                    our dominion twon Second divided from</p>
                            </div>
                        </div>
                    </div> --}}
                    <div class="comments-area" id="comment-section">
                        <h4>{{ $comment->count() }} Comments</h4>
                        @forelse($comment as $item)
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="desc">
                                            <p class="comment">
                                                {{ $item->comment }}
                                            </p>
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <h5>
                                                        <span>{{ $item->name }}</span>
                                                    </h5>
                                                    <p class="date">{{ $item->created_at->toDayDateTimeString() }}</p>
                                                </div>
                                                {{-- <div class="reply-btn">
                                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="desc">
                                            No Comments On This Post
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforelse
                    </div>
                    <div class="comment-form">
                        <h4>Leave a Reply</h4>
                        <form class="form-contact comment_form" action="{{ route('add-comment-frontend', $post->id) }}"
                            id="commentForm" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                            placeholder="Write Comment"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" type="text"
                                            placeholder="Name">
                                    </div>
                                </div>
                                {{-- <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="email" id="email" type="email"
                                            placeholder="Email">
                                    </div>
                                </div> --}}
                            </div>
                            <div class="form-group">
                                <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send
                                    Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    @include('frontend.partials.post-sidebar')
                </div>
            </div>
        </div>
    </section>
@endsection
