<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Subcategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function viewCommentOfPost($post_id){
        $comment = Comment::where('post_id', $post_id)->paginate(7);
        $post = $post_id;

        return view('admin.post.comment-of-post', compact('comment', 'post'));
    }

    public function storeComment(Request $request, $post_id){
        $request->validate([
            'comment' => 'required',
            'name' => 'required',
        ]);

        Comment::create([
            'post_id' => $post_id,
            'comment' => $request->comment,
            'name' => $request->name,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return redirect()->route('single-post-frontend', $post_id);
    }

    public function deleteComment($comment_id){
        $comment = Comment::findOrFail($comment_id);

        $comment->delete();

        return redirect()->back()->with('success', 'Comment has been deleted successfully!');
    }

    public function searchQuery(Request $request, $post_id){
        $search_text = $request->input('search-post');

        $comment = Comment::where('name', 'like', '%'.$search_text.'%')->paginate(7);
        $post = $post_id;

        return view('admin.post.comment-of-post-query', compact('comment', 'post'));
    }
}
