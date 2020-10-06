<?php

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


Route::get('/', function(){
    return view('skinDialogue.home');
});
Route::get('/product', function(){
    return view('skinDialogue.product');
});
Route::get('/products/{slug}', function(){
    return view('skinDialogue.detailProduct');
});

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('register.blade');
});
Route::get('/editProfile', function () {
    return view('layouts.app');
});

Route::resource('/blog','BlogController');
Route::resource('/allBlog','AllBlogController');
Route::resource('/category','CategoryController')->middleware('auth');
Route::resource('/article','ArticleController')->middleware('auth');
Route::resource('/user','UserController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


