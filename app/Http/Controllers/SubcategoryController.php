<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function showSubcategory(){
        $subcategory = Subcategory::lastest()->paginate(7);
        return view(compact('subcategory'));
    }
}
