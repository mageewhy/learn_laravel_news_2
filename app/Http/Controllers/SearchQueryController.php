<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SearchQueryController extends Controller
{
    public function searchQuery(Request $request){
        $date = Carbon::now()->toFormattedDayDateString();
        $term = $request->input('search-news');

        $post = Post::where(function ($query) use ($term) {
            $query->where('title_en', 'like', '%'.$term.'%')
            ->orWhere('title_kh', 'like', '%'.$term.'%');
        })->paginate(5);

        return view('frontend.query-frontend', compact('post', 'date'));
    }
}
