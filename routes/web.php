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

// User Routes

// Admin Routes
Route::resource('/admin/posts', 'Admin\AdminPostsController', ['as' => 'admin']);

Route::resource('/admin/categories', 'Admin\AdminCategoriesController', ['as'     => 'admin', 
																		 'except' => 'show']);

Route::resource('/admin/tags', 'Admin\AdminTagsController', ['as' => 'admin', 
																     'except' => 'show']);



 

// Auth
Auth::routes();
