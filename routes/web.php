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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/student-profile', 'HomeController@profile')->name('profile');
Route::get('/profile-edit/{id}', 'HomeController@profiles')->name('profiles');
Route::get('/admin/result/{id}', 'HomeController@check')->name('check');
Route::get('/admin/details/{id}', 'HomeController@detail')->name('detail');
Route::get('/admin/edit/{id}', 'HomeController@edit')->name('edit');
Route::get('/admin/delete/{id}', 'HomeController@delete')->name('delete');
Route::get('/first/{id}', 'HomeController@first')->name('first');
Route::get('/admin/edit-result/{id}', 'HomeController@edit_result')->name('edit.result');
Route::get('/admin/view-students', 'HomeController@view')->name('view');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');

    //Password reset routes
    Route::get('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});


Route::get('/check/action', 'SearchController@checks')->name('check.action');
Route::get('/profile/action', 'SearchController@profile')->name('profile.action');
Route::get('/search/action', 'SearchController@action')->name('search.action');
Route::get('/admin/check', 'SearchController@check')->name('check');
Route::get('/admin/search', 'SearchController@search')->name('search');
Route::resource('result', 'ResultController');
Route::resource('profile', 'ProfileController');
Route::resource('student', 'StudentController');
