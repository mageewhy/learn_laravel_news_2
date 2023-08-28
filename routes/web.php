<?php

use Carbon\Carbon;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SubcategoryController;
use App\Models\Category;
use App\Models\Post;
use App\Models\Subcategory;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Middleware\ShareErrorsFromSession;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//====================================== FRONT END ROUTES ===================================================================//
Route::get('/', function () {
    $date = Carbon::now()->toFormattedDayDateString();
    $category1 = Category::skip(2)->first();
    $category2 = Category::skip(1)->first();
    // $category3 = Category::skip(0)->first();

    $data = [
        'post_hero' => Post::latest()->limit(4)->get(),
        'highlightPost' => Post::latest()->first(),
        'miniHighlightPost1' => Post::skip(0)->limit(3)->get(),
        'miniHighlightPost2' => Post::skip(3)->limit(3)->get(),

        'category1PostHighlight' => Post::where('category_id', $category1['id'])->latest()->first(),
        'category1PostHighlightUnder' => Post::where('category_id', $category1['id'])->skip(2)->limit(2)->get(),
        'category1PostHighlight2' => Post::where('category_id', $category1['id'])->skip(4)->latest()->first(),
        'category2PostHighlight' => Post::where('category_id', $category2['id'])->latest()->first(),
        // 'category3PostHighlight' => Post::where('category_id', $category3['id'])->latest()->first(),

        'category1Post' => Post::where('category_id', $category1['id'])->skip(0)->limit(4)->get(),
        'category2Post' => Post::where('category_id', $category2['id'])->skip(0)->limit(2)->get(),
        'category2Post2' => Post::where('category_id', $category2['id'])->skip(2)->limit(2)->get(),
        // 'category3Post' => Post::where('category_id', $category3['id'])->skip(0)->get(),

        'trendingPost' => Post::orderBy('order', 'desc')->limit(5)->latest()->get(),
    ];



    return view('frontend.mainpage', compact('category1', 'category2', 'date'))->with($data);
})->name('home-page');

Route::get('/category/{id}', function($id){
    $category = Category::where('id', $id)->first();
    $post = Post::where('category_id', $id)->latest()->paginate(4);

    return view('frontend.category-page', compact('category', 'post'));
})->name('category-frontend');

Route::get('/subcategory/{id}', function($id){
    $subcategory = SubCategory::where('id', $id)->first();
    $post = Post::where('sub_category_id', $id)->latest()->paginate(4);

    return view('frontend.subcategory-page', compact('subcategory', 'post'));
})->name('subcategory-frontend');

Route::get('/single-post/{id}', function($id){
    Post::where('id', $id)->increment('order');
    $post = Post::where('id', $id)->first();

    return view('frontend.single-post', compact('post'));
})->name('single-post-frontend');

//============================================================================================================================//


//authentication middleware
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    //original dashboard route
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    // Route::get('/login', function(){
    //     return view('admin.auth.login');
    // })->name('login-page');

    Route::get('/dashboard', function () {
        return view('admin.dashboard-layout');
    })->name('dashboard');

    //Main Route For Category, SubCategory, and Posts
    Route::prefix('admin')->group(function (){

        Route::controller(CategoryController::class)->group(function(){

            Route::get('/category', 'categoryShow')->name('admin.category');

            Route::get('/category/add-category', 'addCategory')->name('admin.add-category');
            Route::post('/add/new-category', 'storeCategory')->name('admin.store-category');

            Route::get('/edit-category/{category_id}', 'editCategory')->name('admin.edit-category');
            Route::post('/update-category/{category_id}', 'updateCategory')->name('admin.update-category');

            Route::get('/delete-category/{category_id}', 'deleteCategory')->name('admin.delete-category');

            Route::get('/category/search', 'searchQuery')->name('category-searchQuery');

        });

        Route::controller(SubCategoryController::class)->group(function(){
            Route::get('/subcategory', 'subcategoryShow')->name('admin.subcategory');

            Route::get('/subcategory/add-subcategory', 'addSubcategory')->name('admin.add-subcategory');
            Route::post('/add-new-subcategory', 'storeSubcategory')->name('admin.store-subcategory');

            Route::get('/edit-subcategory/{sub_category_id}', 'editSubcategory')->name('admin.edit-subcategory');
            Route::post('/update-subcategory/{sub_category_id}', 'updateSubcategory')->name('admin.update-subcategory');

            Route::get('/delete-subcategory/{sub_category_id}', 'deleteSubcategory')->name('admin.delete-subcategory');

            Route::get('/subcategory/search', 'searchQuery')->name('subcategory-searchQuery');

        });

        Route::controller(PostController::class)->group(function(){
            Route::get('/posts', 'viewPost')->name('admin.posts');

            Route::get('/add-posts', 'addPost')->name('admin.add-post');
            Route::post('/add-new-post', 'storePost')->name('admin.store-post');

            Route::get('/edit-posts/{posts_id}', 'editPost')->name('admin.edit-post');
            Route::post('/update-posts/{posts_id}', 'updatePost')->name('admin.update-posts');

            Route::get('/delete-post/{posts_id}', 'deletePost')->name('admin.delete-post');

            Route::get('/post/search', 'searchQuery')->name('post-searchQuery');

            //ajax
            Route::get('/get-subcategory-option', 'getSubOpt')->name('admin.get-subcategory-option');

        });

    });

});

//Language Controller for changing language
Route::controller(LanguageController::class)->group(function(){
    Route::get('/lang-kh', 'Khmer')->name('lang.khmer');
    Route::get('/lang-eng', 'English')->name('lang.english');
});
