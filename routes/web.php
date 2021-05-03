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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/main', 'PagesController@main');
Route::get('/about/', 'PagesController@about');
Route::get('/contacts', 'PagesController@contacts');
Route::post('/contacts/submit', 'PagesController@submit')->name('formHandler');
Route::get('/test', 'PagesController@test');
Route::get('/calendar', 'PagesController@calendar');
Route::get('/post/{id}', 'PostController@showOne');
Route::get('/posts', 'PostController@showAll');
Route::get('/product/{category_id}/{product_id}', 'ProductController@showProduct');
