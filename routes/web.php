<?php

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


//Route::get('/users/{id}/{name}',function($id,$name){
////    return view('pages.about');
//    return "this is user".$name . " with an id of ".$id;
//
//});
//Route::get('/', function () {
//    return view('layouts.master');
//});
Route::get('/','PagesController@index')->name('homepages');
Route::get('/about','PagesController@about')->name('about');
Route::get('/services','PagesController@services')->name('services');

Auth::routes();

Route::get('/homeuser', 'HomeController@index')->name('homeuser');

Route::resource('posts','PostsController');