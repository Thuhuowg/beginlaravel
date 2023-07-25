<?php
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\User;
Route::get('/category', function () {
    $categories = Category::where('id', '>', 20)->get();
    foreach ($categories as $category) {
        echo $category->id;
    }
});

Route::get('/categoryById', function () {
    //$category = Category::find(31);
    $category = Category::where('name', 'Áo nam 19')->first();
    dd($category->name);
});

Route::get('insert-category', function () {
     $category = new Category();
     $category->name = 'Áo nam 19';
     $category->parent_id = 0;
     $category->save();

//    Category::create([
//        'name' => 'Ao nam16',
//        'parent_id' => 0
//    ]);
});
Route::get('insert-user', function (){
    User::create([
        'name'=>'Huong',
        'email'=>'huogthu5522gmail.com',
        'password'=>'12345'
    ]);
});
