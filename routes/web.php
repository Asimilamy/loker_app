<?php
use Illuminate\Http\Request;

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

Route::get('/', 'LoginController@user_login');
Route::get('/company', 'LoginController@company_login');
Route::get('/admin', 'LoginController@admin_login');

Route::get('/login', function() {
    return redirect('/');
});
Route::post('/login', 'LoginController@login')->name('login');
Route::post('/register', 'RegisterController@register')->name('register');
Route::get('/logout', 'LoginController@logout');

// Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    // Route::get('/', 'HomeController@index')->name('home');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/welcome', function() {
        return view('welcome');
    });
});
