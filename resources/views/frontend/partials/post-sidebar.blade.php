<div class="blog_right_sidebar">
    <aside class="single_sidebar_widget search_widget">
        <form action="{{route('search-query-frontend')}}" method="GET">
            <div class="form-group">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder='Search Keyword' onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Search Keyword'" id="search" name="search-news">
                    <div class="input-group-append">
                        <button class="btns" type="submit"><i class="ti-search"></i></button>
                    </div>
                </div>
            </div>
            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Search</button>
        </form>
    </aside>
    <aside class="single_sidebar_widget post_category_widget">
        @php
            $category = App\Models\Category::all();
        @endphp
        <h4 class="widget_title">Category</h4>
        <ul class="list cat-list">
            @foreach ($category as $item)
                @php
                    $post_category = App\Models\Post::where('category_id', $item->id)->get();
                @endphp
                <li>
                    <a href="{{ route('category-frontend', $item->id) }}" class="d-flex">
                        <p>
                            @if (session()->get('language') == 'khmer')
                                {{ $item->category_kh }}
                            @else
                                {{ $item->category_en }}
                            @endif
                        </p>
                        <p>({{ $post_category->count() }})</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </aside>
    <aside class="single_sidebar_widget popular_post_widget">
        @php
            $post = App\Models\Post::latest()
                ->limit(4)
                ->get();
        @endphp
        <h3 class="widget_title">Recent Post</h3>
        @foreach ($post as $item)
            <div class="media post_item">
                <img src="{{ asset('images/'. $item->image) }}" style="width: 50px; height:50px;" alt="{{$item->image}}">
                <div class="media-body">
                    <a href="{{route('single-post-frontend', $item->id)}}">
                        <h3>
                            @if (session()->get('language') == 'khmer')
                                {{ Str::words($item->title_kh, 5) }}
                            @else
                                {{ Str::words($item->title_en, 5) }}
                            @endif
                        </h3>
                    </a>
                    <p>{{ $item->updated_at->diffForHumans() }}</p>
                </div>
            </div>
        @endforeach
    </aside>
</div>
