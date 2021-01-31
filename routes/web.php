<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/contact', function () {
//    //return view('welcome');
//    return "Hi, this is contact";
//});
//
//Route::get('/about', function () {
//    //return view('welcome');
//    return "This the about Page";
//});
//
//Route::get('/post/{id}', function ($id) {
//    //return view('welcome');
//    return "This the post no. ".$id;
//});
//
//Route::get('/admin/post/example', array('as'=>'admin.post', function (){
//    $url = route('admin.post');
//
//    return "This url is ".$url;
//}));

//Route::get('/post/{id}', [PostsController::class, 'index']);

Route::resource('posts', PostsController::class);
