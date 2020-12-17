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

// Route::get('/', function () {
//     return view("welcome");
// });
Route::get('/userList', function () {
       return view("users-list");
     });
Route::get('/createPost', function () {
        return view("create-post");
    });
Route::get('/updatePost', function () {
      return view("update-post");
});
Route::get('/confirmPassword', function () {
  return view("confirm-password");
});
Route::get('/userDetail', function () {
  return view("user-detail");
});
Route::get('/updateUser', function () {
  return view("update-user");
});
Route::get('/changePassword', function () {
  return view("change-password");
});

Route::get('/posts','PostListController@detail');

Route::get('/posts/add','PostListController@add');

Route::post('/posts/add/confirm','PostListController@confirmPost');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
