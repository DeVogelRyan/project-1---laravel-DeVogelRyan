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

Route::get('/', function () {
    return view('welcome');
});



Route::group(['middelware' => ['auth']], function () {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name
    ('dashboard');
});


Route::get('post/create', 'App\Http\Controllers\PostController@create')->middleware('auth')->name('createPosts');
Route::post('posts','App\Http\Controllers\PostController@store')->middleware('auth');

Route::get('post/view', 'App\Http\Controllers\PostController@getData')->middleware('auth');

require __DIR__.'/auth.php';
