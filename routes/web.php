<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/laravel',function(){
    return view('laravel');
});
Route::get('/abouts',function(){
    return view('about');
});
Route::prefix('admin')->group(function(){
    Route::get('/user',function(){
        echo 'user admin page';
    });
    Route::get('/category',function(){
        echo'category admin page';
    })->name('admin.category');
});
Route::get('/demo-view', function(){
    // return view('sub.demo',[
    //     'username'=>'Huong',
    //     'age'=>'20'
    // ]);
    // return view('sub.demo')->with('username','Hoa')->with('age','26');
    $username='Hoai';
    $age='25';
    return view('sub.demo',compact('username','age'));
});
Route::get('demo-1-view',function(){
    $collection=[
        'Hoa',
        'Huong',
        'Hoai',
    ];
    return view('sub.demo-1',compact('collection'));
});
Route::get('/login',[\App\Http\Controllers\AuthController::class,'login'])->name('login');
Route::post('/do-login',[\App\Http\Controllers\AuthController::class,'doLogin'])->name('do-login');


Route:: get('/home', function(){
    return view('home');
});
Route::get('/contact', function(){
    return view('contact');
});
//require_once __DIR__ . '/demo_session_3.php';
//require_once __DIR__ . '/demo_session_4.php';
//require_once __DIR__ . '/demo_session_5.php';
require_once __DIR__ . '/bt.php';
