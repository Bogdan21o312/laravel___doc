<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [\App\Http\Controllers\indexController::class, 'index']);
Route::get('/category/{slug}', [\App\Http\Controllers\indexController::class, 'getPostsByCategory'])->name('getPostsByCategory');
Route::get('/category/{slug_category}/{slug_post}', [\App\Http\Controllers\indexController::class, 'getPost'])->name('getPost');



//Route::get('/', function () {
//    $posts = DB::table('posts')->get();
//    return view('home', compact('posts'));
//});
//
//Route::get('/html', function () {
//    $posts = DB::table('posts')->get();
//    return view('HTML', compact('posts'));
//});

//Route::get('/', 'App\Http\Controllers\indexController@index',)->name('main-page');
//
//
//Route::get('/category/{category}', 'App\Http\Controllers\indexHomeController@index',)->name('postByCategory');

Route::get('html', function () {return view('HTML');});
Route::get('exsamples', function () {return view('../EXSAMPLES/EXSAMPLES');});
Route::get('/exsamples/header', function () {return view('../EXSAMPLES/exsample/header');});
Route::get('/exsamples/main', function () {return view('../EXSAMPLES/exsample/main');});
Route::get('/exsamples/footer', function () {return view('../EXSAMPLES/exsample/footer');});


////////////////////////////////////////////////////


Route::get('header-relvise', function () {return view('ex/header/relvise');});
//Route::get('exsamples', function () {return view('../EXSAMPLES/EXSAMPLES');});
//Route::get('/exsamples/header', function () {return view('../EXSAMPLES/exsample/header');});
//Route::get('/exsamples/main', function () {return view('../EXSAMPLES/exsample/main');});
//Route::get('/exsamples/footer', function () {return view('../EXSAMPLES/exsample/footer');});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/adminpanel', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin'); // /admin

    Route::resource('category', CategoryController::class);
    Route::resource('post', PostController::class);
//});
