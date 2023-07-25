<?php
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\User;
use App\Models\UserInfo;
use App\Models\Product;

Route::get('demo-paginate-categories', function (){
    $q = request()->q ?? "";
//  $categories = Category::where('name', 'like', "%$q%")->paginate(10)->appends(['q'=>$q]);
    $categories = Category::where('name', 'like', "%$q%")->paginate(10)->withQueryString();
    $products=Product::all();
  return view('category.list', compact('categories','products'));
});
Route::get('users', function (){
    $users= User::all();
    $userInfos = UserInfo::all();
    return view('user.list', compact('users','userInfos'));
});
Route::get('actor-film', function (){
    $actors = \App\Models\Actor::all();
    $films= \App\Models\Film::all();
    return view('film',compact('actors','films'));
});
