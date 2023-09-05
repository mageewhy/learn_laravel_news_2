<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Subcategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function categoryShow(){
        $category = Category::latest()->paginate(7);

        return view('admin.category.category', compact('category'));
    }

    public function addCategory(){
        return view('admin.category.add-category');
    }

    public function storeCategory(Request $request){

        $request->validate([
            'category_kh' => ['required', Rule::unique('categories')],
            'category_en' => ['required', Rule::unique('categories')],
        ]);

        Category::create([
            'category_kh' => $request->category_kh,
            'category_en' => $request->category_en,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return redirect()->route('admin.category')->with('success', 'Category has been added successfully!');
    }

    public function editCategory($category_id){
        // abort_if(!isset($category[$id]),404);
        $category = Category::find($category_id);
        return view('admin.category.edit-category', compact('category'));

    }

    public function updateCategory(Request $request, $category_id){

        $request->validate([
            'category_kh' => ['required', Rule::unique('categories')->ignore($category_id)],
            'category_en' => ['required', Rule::unique('categories')->ignore($category_id)],
        ]);

        $category = Category::find($category_id);
        $category->category_kh = $request->input('category_kh');
        $category->category_en = $request->input('category_en');
        $category->updated_at = Carbon::now();

        $category->update();
        return redirect()->route('admin.category')->with('success', 'Category has been updated successfully!');
    }

    public function deleteCategory($category_id){

        $category = Category::findOrFail($category_id);
        
        if($category){
            $post = Post::where('category_id', $category_id)->firstOrFail();
            
            $category->delete();
            $category->subcategory()->delete();
            $post->comment()->delete();
            $category->posts()->delete();

            return redirect()->back()->with('success', 'Category with its Subcategory and Posts have been deleted!');
        }
        else {
            return redirect()->back()->with('error', 'Failed to delete the content!');
        }

    }

    public function searchQuery(Request $request){
        $search_text = $request->input('search-category');
        $category = Category::where('category_en', 'LIKE', '%'.$search_text.'%')->paginate(5);

        return view('admin.category.category-query', compact('category'));
    }

}
