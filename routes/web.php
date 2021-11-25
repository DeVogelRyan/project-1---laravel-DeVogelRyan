<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageC;
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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middelware' => ['auth']], function () {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name
    ('dashboard');
});

Route::get('post/create', 'App\Http\Controllers\PostController@create')->middleware('auth')->name('createPosts');
Route::get('post/edit', 'App\Http\Controllers\PostController@edit')->middleware('auth')->name('editPosts');
Route::get('/post/{id}/edit', 'App\Http\Controllers\PostController@editSingle')->name('editPostId');

Route::post('posts','App\Http\Controllers\PostController@store')->middleware('auth');
Route::get('post/view', 'App\Http\Controllers\PostController@getData')->middleware('auth')->name('viewPosts');

Route::post('post/update','App\Http\Controllers\PostController@update')->middleware('auth');

require __DIR__.'/auth.php';
