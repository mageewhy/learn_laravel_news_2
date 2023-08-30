@php
    $trending = App\Models\Post::orderBy('order', 'desc')
        ->limit(5)
        ->latest()
        ->get();
    $post = App\Models\Post::latest()
        ->limit(5)
        ->get();
@endphp

<div class="col-lg-4">
    <div class="trand-right-single d-flex">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                allowfullscreen></iframe>
        </div>
        <div class="trand-right-cap">
            <span class="color1">Video</span>
            <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
        </div>
    </div>
    @foreach ($trending as $item)
        <div class="trand-right-single d-flex">
            <div class="trand-right-img">
                <img src="{{ asset('images/' . $item->image) }}" style="width: 120px; height: 100px;"
                    alt="Sidebar Post Trending">
            </div>
            <div class="trand-right-cap">
                <span class="color3">
                    @if (session()->get('language') == 'khmer')
                        {{ $item->category->category_kh }}
                    @else
                        {{ $item->category->category_en }}
                    @endif
                </span>
                <h4>
                    <a href="{{ route('single-post-frontend', $item->id) }}">
                        @if (session()->get('language') == 'khmer')
                            {{ Str::words($item->title_kh, 10) }}
                        @else
                            {{ Str::words($item->title_en, 10) }}
                        @endif
                    </a>
                </h4>
            </div>
        </div>
    @endforeach
    <div class="trand-right-single d-flex">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                allowfullscreen></iframe>
        </div>
        <div class="trand-right-cap">
            <span class="color1">Video</span>
            <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
        </div>
    </div>
    @foreach ($post as $item)
        <div class="trand-right-single d-flex">
            <div class="trand-right-img">
                <img src="{{ asset('images/' . $item->image) }}" style="width: 120px; height: 100px;"
                    alt="Sidebar Post Latest">
            </div>
            <div class="trand-right-cap">
                <span class="color4">
                    @if (session()->get('language') == 'khmer')
                        {{ $item->category->category_kh }}
                    @else
                        {{ $item->category->category_en }}
                    @endif
                </span>
                <h4>
                    <a href="{{ route('single-post-frontend', $item->id) }}">
                        @if (session()->get('language') == 'khmer')
                            {{ Str::words($item->title_kh, 10) }}
                        @else
                            {{ Str::words($item->title_en, 10) }}
                        @endif
                    </a>
                </h4>
            </div>
        </div>
    @endforeach
</div>
