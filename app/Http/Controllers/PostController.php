<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Subcategory;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function viewPost(Request $request){
        $post = Post::latest()->paginate(5);
        $categories = Category::all();
        $subcategories = Subcategory::all();

        $category_query = $request->input('select-category-query');
        $subcategory_query = $request->input('select-subcategory-query');

        $category_id = $category_query;
        $subcategory_id = $subcategory_query;

        return view('admin.post.post', compact('post', 'categories','subcategories', 'category_id', 'subcategory_id'));
    }

    public function addPost(){
        $post = Post::all();
        $categories = Category::all();
        $subcategories = Subcategory::all();

        return view('admin.post.add-post', compact('post', 'categories', 'subcategories'));
    }

    public function storePost(Request $request){
        $request->validate([
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'title_kh' => 'required|min:5|max:256',
            'title_en' => 'required|min:5|max:256',
            'description_kh' => 'required',
            'description_en' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg|max:2048',
        ]);
        //call image from form
        $image = $request->image;
        //generate image name
        if ($image) {
            $imageName = time().'.'.$request->file('image')->getClientOriginalName();
            //$imageName = time().'.'.$image->extension();
            //save/move image to paths
            $request->image->move(public_path('images'), $imageName);

            Post::create([
                'category_id' => $request->category_id,
                'subcategory_id' => $request->subcategory_id,
                'title_kh' => $request->title_kh,
                'title_en' => $request->title_en,
                'description_kh' => $request->description_kh,
                'description_en' => $request->description_en,
                'image' => $imageName,
                'status' => $request->status,
                // 'status' => $request->status,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        } else {
            Post::create([
                'category_id' => $request->category_id,
                'subcategory_id' => $request->subcategory_id,
                'title_kh' => $request->title_kh,
                'title_en' => $request->title_en,
                'description_kh' => $request->description_kh,
                'description_en' => $request->description_en,
                'status' => $request->status,
                // 'status' => $request->status,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }

        return redirect()->route('admin.posts')->with('success', 'Post has been added successfully!');
    }

    public function editPost($post_id){
        $post = Post::find($post_id);
        $categories = Category::all();
        $subcategories = Subcategory::all();

        return view('admin.post.edit-post', compact('post', 'categories', 'subcategories'));

    }

    public function updatePost(Request $request, $post_id){
        $request->validate([
            'title_kh' => 'required|min:5|max:256',
            'title_en' => 'required|min:5|max:256',
            'description_kh' => 'required',
            'description_en' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg|max:2048',
        ]);

        $post = Post::find($post_id);

        //image name and path
        $image_name = $post->image;
        $image_path = public_path('images/'.$image_name);

        if ($request->image) {                                              //if image exists
            //remove image on update
            if(File::exists($image_path)) {
                unlink($image_path);
            }
            //image add on update

            //generate image name
            $imageName = time().'.'.$request->file('image')->getClientOriginalName();
            // $imageName = time().'.'.$image->extension();

            //save/move image to paths
            $request->image->move(public_path('images'), $imageName);

            $post->category_id = $request->input('category_id');
            $post->subcategory_id = $request->input('subcategory_id');
            $post->title_kh = $request->input('title_kh');
            $post->title_en = $request->input('title_en');
            $post->description_kh = $request->input('description_kh');
            $post->description_en = $request->input('description_en');
            $post->image = $imageName;
            $post->status = $request->input('status');
            $post->updated_at = Carbon::now();

        } else {
            $post->category_id = $request->input('category_id');
            $post->subcategory_id = $request->input('subcategory_id');
            $post->title_kh = $request->input('title_kh');
            $post->title_en = $request->input('title_en');
            $post->description_kh = $request->input('description_kh');
            $post->description_en = $request->input('description_en');
            $post->status = $request->input('status');
            $post->updated_at = Carbon::now();

        }


        $post->update();

        return redirect()->route('admin.post')->with('success', 'Post has been updated successfully!');
    }

    public function deletePost($post_id){

        $post = Post::find($post_id);
        $image_name = $post->image;
        $image_path = public_path('images/'.$image_name);
        if(File::exists($image_path)) {
            File::delete($image_path);
        }

        $post->delete();
        $post->comment()->delete();
        return redirect()->back()->with('success', 'Post has been deleted successfully!');

    }

    //ajax get Subcategory

    public function getSubOpt(Request $request){

        $subcategories = Subcategory::where('category_id', $request->cat_id)->get();
        $subcategories_all = Subcategory::all();
        $sub_cat_data = '<option value="">Select Subcategory</option>';

        if($request->cat_id == null){
            foreach($subcategories_all as $key => $value){
                $sub_cat_data.='<option value="0">'.$value->sub_category_kh.' | '.$value->sub_category_en.'</option>';
            }
        }
        else {
            foreach ($subcategories as $key => $value) {
                $sub_cat_data.='<option value="'.$value->id.'">'.$value->sub_category_kh.' | '.$value->sub_category_en.'</option>';
            }
        }
        return $sub_cat_data;

        // return $request;
    }

    public function searchQuery(Request $request){
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $search_text = $request->input('search-post');
        $category_query = $request->input('select-category-query');
        $subcategory_query = $request->input('select-subcategory-query');


        if($category_query == null && $subcategory_query == null && $search_text == null){
            $post = Post::paginate(5);
            $category_id = $category_query;
            $subcategory_id = $subcategory_query;
        }
        else if($category_query != null && $subcategory_query != null && $search_text != null){
            $post = Post::where('title_en', 'LIKE', '%'.$search_text.'%')
            ->orWhere('title_kh', 'LIKE', '%'.$search_text.'%')
            ->orWhere('category_id', $category_query)
            ->orWhere('subcategory_id', $subcategory_query)
            ->paginate(5);
            $category_id = Category::find($category_query);
            $subcategory_id = Subcategory::find($subcategory_query);
        }
        else if($category_query != null && $subcategory_query == null && $search_text == null){
            $post = Post::where('category_id', $category_query)
            ->paginate(5);
            $category_id = Category::find($category_query);
            $subcategory_id = $subcategory_query;
        }
        else if($category_query == null && $subcategory_query !== null && $search_text == null){
            $post = Post::where('subcategory_id', $subcategory_query)
            ->paginate(5);
            $category_id = $category_query;
            $subcategory_id = Subcategory::find($subcategory_query);
        }
        else if($category_query != null && $subcategory_query != null && $search_text == null){
            $post = Post::where('category_id', $category_query)
            ->orWhere('subcategory_id', $subcategory_query)
            ->paginate(5);
            $category_id = Category::find($category_query);
            $subcategory_id = Subcategory::find($subcategory_query);

        }
        else if($category_query != null && $subcategory_query == null && $search_text != null){
            $post = Post::where('category_id', $category_query)
            ->orWhere(function ($query) use ($search_text) {
                $query->where('title_en', 'LIKE', '%'.$search_text.'%')
                ->orWhere('title_kh', 'LIKE', '%'.$search_text.'%');
            })
            ->paginate(5);
            $category_id = Category::find($category_query);
            $subcategory_id = $subcategory_query;
        }
        else if($category_query == null && $subcategory_query != null && $search_text != null){
            $post = Post::where('subcategory_id', $subcategory_query)
            ->orWhere(function ($query) use ($search_text) {
                $query->where('title_en', 'LIKE', '%'.$search_text.'%')
                ->orWhere('title_kh', 'LIKE', '%'.$search_text.'%');
            })
            ->paginate(5);
            $category_id = $category_query;
            $subcategory_id = Subcategory::find($subcategory_query);
        }
        else if($category_query == null && $subcategory_query == null && $search_text != null){
            $post = Post::where(function ($query) use ($search_text) {
                $query->where('title_en', 'LIKE', '%'.$search_text.'%')
                ->orWhere('title_kh', 'LIKE', '%'.$search_text.'%');
            })
            ->paginate(5);
            $category_id = $category_query;
            $subcategory_id = $subcategory_query;
        }

        return view('admin.post.post-query', compact('post', 'categories', 'subcategories' , 'category_id', 'subcategory_id'));
    }
}
