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
    public function viewPost(){
        $post = Post::latest()->paginate(5);
        $categories = Category::all();
        $sub_categories = Subcategory::all();

        return view('admin.post.post', compact('post', 'categories','sub_categories'));
    }

    public function addPost(){
        // $categories = Category::all();
        $post = Post::all();
        $categories = Category::all();
        $sub_categories = Subcategory::all();

        return view('admin.post.add-post', compact('post', 'categories', 'sub_categories'));
    }

    public function storePost(Request $request){
        $request->validate([
            'category_id' => 'required',
            'sub_category_id' => 'required',
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
                'sub_category_id' => $request->sub_category_id,
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
                'sub_category_id' => $request->sub_category_id,
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



        return redirect()->route('admin.post')->with('success', 'Post has been added successfully!');
    }

    public function editPost($post_id){
        $post = Post::find($post_id);
        $categories = Category::all();
        $sub_categories = Subcategory::all();

        return view('admin.post.edit-post', compact('post', 'categories', 'sub_categories'));

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
            $post->sub_category_id = $request->input('sub_category_id');
            $post->title_kh = $request->input('title_kh');
            $post->title_en = $request->input('title_en');
            $post->description_kh = $request->input('description_kh');
            $post->description_en = $request->input('description_en');
            $post->image = $imageName;
            $post->status = $request->input('status');
            $post->updated_at = Carbon::now();

        } else {
            $post->category_id = $request->input('category_id');
            $post->sub_category_id = $request->input('sub_category_id');
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
        return redirect()->back()->with('success', 'Post has been deleted successfully!');

    }

    //ajax get Subcategory

    public function getSubOpt(Request $request){

        $sub_categories = Subcategory::where('category_id', $request->cat_id)->get();

        $sub_cat_data = '<option value="">Select Sub Category</option>';

        foreach ($sub_categories as $key => $value) {
            $sub_cat_data.='<option value="'.$value->id.'">'.$value->sub_category_kh.' | '.$value->sub_category_en.'</option>';
        }
        return $sub_cat_data;

        // return $request;
    }
}
