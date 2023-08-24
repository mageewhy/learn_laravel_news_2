<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SubCategoryController extends Controller
{
    public function subcategoryShow(){
        $sub_category = Subcategory::latest()->paginate(7);

        return view('admin.sub_category.subcategory', compact('sub_category'));
    }

    public function addSubCategory(){
        $categories = Category::all();

        return view('admin.subcategory.add-subcategory', compact('categories'));
    }

    public function storeSubcategory(Request $request){
        $request->validate([
            'sub_category_kh' => ['required', Rule::unique('subcategories')],
            'sub_category_en' => ['required', Rule::unique('subcategories')],
        ]);

        SubCategory::create([
            'category_id' =>$request->category_id,
            'sub_category_kh' => $request->sub_category_kh,
            'sub_category_en' => $request->sub_category_en,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return redirect()->route('admin.subcategory')->with('success', 'Subcategory has been added successfully!');
    }

    public function editSubcategory($sub_category_id){
        // abort_if(!isset($category[$id]),404);
        $categories = Category::all();
        $sub_category = Subcategory::find($sub_category_id);

        return view('admin.subcategory.edit-subcategory', compact('sub_category', 'categories'));

    }

    public function updateSubcategory(Request $request, $sub_category_id){

        $request->validate([
            'sub_category_kh' => ['required', Rule::unique('subcategories')->ignore($sub_category_id)],
            'sub_category_en' => ['required', Rule::unique('subcategories')->ignore($sub_category_id)],
        ]);

        // SubCategory::insert([
        //     'category_id' => $request->category_edit_selector,
        //     'sub_category_kh' => $request->sub_category_kh,
        //     'sub_category_en' => $request->sub_category_en,
        //     'updated_at' => now()
        // ]);
        $sub_category = Subcategory::find($sub_category_id);
        $sub_category->category_id = $request->input('category_edit_selector');
        $sub_category->sub_category_kh = $request->input('sub_category_kh');
        $sub_category->sub_category_en = $request->input('sub_category_en');
        $sub_category->updated_at = Carbon::now();

        $sub_category->update();
        return redirect()->route('admin.subcategory')->with('success', 'Subcategory has been updated successfully!');
    }

    public function deleteSubcategory($sub_category_id){

        $sub_category = Subcategory::find($sub_category_id);

        if($sub_category){
            $sub_category->posts()->delete();
            $sub_category->delete();
            return redirect()->back()->with('success', 'Subcategory with its Posts have been deleted!');
        }
        else {
            return redirect()->back()->with('error', 'Failed to delete the content!');
        }

    }

}
