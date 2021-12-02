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
//DashboardViewUsers
Route::get('users/edit', 'App\Http\Controllers\DashboardController@viewUsers')->middleware('auth')->name('viewUsersAdmin');
Route::get('users/{id}/promote', 'App\Http\Controllers\DashboardController@promote')->middleware('auth')->name('promote');
Route::get('users/{id}/demote', 'App\Http\Controllers\DashboardController@demote')->middleware('auth')->name('demote');

//posts
Route::group(['middelware' => ['auth']], function () {
    Route::get('post/create', 'App\Http\Controllers\PostController@create')->name('createPosts');
    Route::get('post/edit', 'App\Http\Controllers\PostController@edit')->name('editPosts');
    Route::get('/post/{id}/edit', 'App\Http\Controllers\PostController@editSingle')->name('editPostId');
    Route::get('/post/{id}/delete', 'App\Http\Controllers\PostController@delete')->name('deletePostId');
    Route::post('post/store','App\Http\Controllers\PostController@store')->name('storePosts');
    Route::get('post/view', 'App\Http\Controllers\PostController@getData')->name('viewPosts');
    Route::post('post/update','App\Http\Controllers\PostController@update')->name('updatePosts');
});

//contactForm
Route::group(['middelware' => ['auth']], function () {
    Route::get('contact', 'App\Http\Controllers\ContactController@getView')->name('contact');
    Route::post('contact/create', 'App\Http\Controllers\ContactController@create')->name('contactCreate');
});

require __DIR__.'/auth.php';
