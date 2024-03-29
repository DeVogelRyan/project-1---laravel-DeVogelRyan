<?php

use App\Http\Controllers\PageC;
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

Route::middleware('auth')->group(function() {//check if user is logged in
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
    //DashboardViewUsers
    Route::get('users/edit', 'App\Http\Controllers\DashboardController@viewUsers')->name('viewUsersAdmin');
    Route::get('users/{id}/promote', 'App\Http\Controllers\DashboardController@promote')->name('promote');
    Route::get('users/{id}/demote', 'App\Http\Controllers\DashboardController@demote')->name('demote');
});

//latest news
Route::middleware('auth')->group(function() {//check if user is logged in
    Route::get('/', 'App\Http\Controllers\LatestNewsController@latestNewsView')->name('home'); // = HOME
    Route::get('latestNewsCreateView', 'App\Http\Controllers\LatestNewsController@latestNewsCreate')->name('latestNewsCreateView');
    Route::post('latestNewsCreate', 'App\Http\Controllers\LatestNewsController@create')->name('latestNewsCreate');
    Route::get('latestNews/{id}/edit', 'App\Http\Controllers\LatestNewsController@editSingle')->name('latestNewsEdit');
    Route::get('latestNews/{id}/delete', 'App\Http\Controllers\LatestNewsController@delete')->name('deletelatestNewsId');
    Route::post('latestNews/update','App\Http\Controllers\LatestNewsController@update')->name('updatelatestNews');
});

//posts
Route::middleware('auth')->group(function() {//check if user is logged in
    //views
    Route::get('post/create', 'App\Http\Controllers\PostViewController@getViewCreate')->name('createPosts');
    Route::get('post/edit', 'App\Http\Controllers\PostViewController@getViewEdit')->name('editPosts');
    Route::get('post/{id}/edit', 'App\Http\Controllers\PostViewController@editSingle')->name('editPostId');
    Route::get('post/view', 'App\Http\Controllers\PostViewController@getData')->name('viewPosts');
    //operations
    Route::get('post/{id}/delete', 'App\Http\Controllers\PostCrudController@delete')->name('deletePostId');
    Route::post('post/store','App\Http\Controllers\PostCrudController@store')->name('storePosts');
    Route::post('post/update','App\Http\Controllers\PostCrudController@update')->name('updatePosts');
});

//contactForm
Route::middleware('auth')->group(function() {//check if user is logged in
    Route::get('contact', 'App\Http\Controllers\ContactViewController@createContact')->name('contact');
    Route::post('contact/create', 'App\Http\Controllers\ContactCRUDController@create')->name('contactCreate');
    Route::get('contact/view', 'App\Http\Controllers\ContactViewController@viewContact')->name('viewContact');
    Route::get('contact/{id}/reply', 'App\Http\Controllers\ContactViewController@reply')->name('replyContactId');
    Route::get('contact/{id}/delete', 'App\Http\Controllers\ContactCRUDController@delete')->name('deleteContactId');
    Route::post('contact/storeReply', 'App\Http\Controllers\ContactReplyController@store')->name('storeReply');
});

//edit profile
Route::middleware('auth')->group(function() {//check if user is logged in
    Route::get('editProfile', 'App\Http\Controllers\UserProfileController@getView')->name('editProfile');
    Route::post('updateProfile', 'App\Http\Controllers\UserProfileController@update')->name('updateProfile');
});

//view all users
Route::middleware('auth')->group(function() {//check if user is logged in
    Route::get('viewAllUsers', 'App\Http\Controllers\ViewAllUsers@getAll')->name('viewAllUsers');
    Route::get('viewSingleUser/{id}', 'App\Http\Controllers\ViewAllUsers@getSingle')->name('viewSingleUser');
    Route::get('viewSingleUserHistory/{id}', 'App\Http\Controllers\ViewAllUsers@getHistory')->name('viewSingleUserHistory');
});

//FAQ
Route::middleware('auth')->group(function() {//check if user is logged in
    Route::get('viewFAQ', 'App\Http\Controllers\FAQController@view')->name('viewFAQ');
    Route::get('createViewFAQ', 'App\Http\Controllers\FAQController@createView')->name('createViewFAQ');
    Route::post('createFAQ', 'App\Http\Controllers\FAQController@create')->name('createFAQ');
});

//About=sources
Route::middleware('auth')->group(function() {//check if user is logged in
    Route::get('sources', function(){
        return view('about');
    })->name('sources');
    Route::get('credits', function(){
        return view('credits');
    })->name('credits');
});



require __DIR__.'/auth.php';
