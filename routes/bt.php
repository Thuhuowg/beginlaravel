<?php
use Illuminate\Support\Facades\Route;
Route::get('/list-posts', function (){
   $categories = \App\Models\Category::all();
   $posts = \App\Models\Post::all();
   return view('ex.list', compact('categories','posts'));
});
Route::get('/create-post', function (){

    $categories = \App\Models\Category::all();

    return view('ex.create',compact('categories'));
});


Route::post('posts-category-form', function () {
    \App\Models\Post::create(request()->all());
    return redirect('/list-posts');
})->name('post.category.add');

Route::get('update/{id}', [\App\Http\Controllers\PostController::class,'edit']);

Route::post('posts-update-form/{id}',[\App\Http\Controllers\PostController::class,'update']);

//Route::get('/delete/{$id}', function ($id) {
//
////    \App\Models\Post::where('id', '=', "$d")->delete();
////    $post->delete();
////
//     \App\Models\Post::where('id',"$id")->delete();
//
//})->name('delete');

Route::get('delete/{id}',[\App\Http\Controllers\PostController::class,'delete','direct']);
Route::get('/create-category', function (){
    $categories = \App\Models\Category::all();
    return view('ex.create-category', compact('categories'));
});

Route::post('category-form', function () {
    \App\Models\Category::create(request()->all());
    return redirect('/create-category');
})->name('category.add');

