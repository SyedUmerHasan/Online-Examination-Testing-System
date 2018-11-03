<?php
use App\Notifications\Subscription;
use App\User;
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

// Authentication page Routes
Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('admin/login', 'Auth\LoginController@login');
Route::post('admin/logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('admin/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('admin/register', 'Auth\RegisterController@register');

    // Password Reset Routes...
Route::get('admin/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('admin/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('admin/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('admin/password/reset', 'Auth\ResetPasswordController@reset');
// Authentication page Routes

Route::get('/', function () {

    $user = auth()->user();
    $user->notify(new Subscription($user));
    // Notification::route('mail', 'taylor@example.com')
    //         ->notify(new Subscription($user));

    return view("welcome");
})->name('comingsoon');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin/home', 'AdminController@index')->name('home');
    Route::get('/admin', 'AdminController@index')->name('home');
    Route::get('/admin/settings', 'AdminController@settings')->name('settings');
    Route::get('/admin/checkpassword', 'AdminController@checkpassword')->name('checkpassword');
    Route::match(['get', 'post'], '/admin/updatepassword', 'AdminController@updatepassword')->name('updatepassword');
    Route::match(['get', 'post'], '/admin/updateusername', 'AdminController@updateusername')->name('updateusername');

    Route::get('/admin/CreateTest', 'TestController@CreateTest')->name('CreateTest');
    Route::get('/admin/ShowTest', 'TestController@ShowTest')->name('ShowTest');
    Route::match(['get', 'post'], '/admin/addposts', 'TestController@addtest')->name('addtest');
    Route::match(['get', 'post'], '/test/{slug}', 'TestController@taketest')->name('taketest');
    Route::match(['get', 'post'], '/starttest/{slug}', 'TestController@starttest')->name('starttest');
    
    Route::get('/tests/{testcategory}', 'TestController@starttest')->name('StartTest');


    Route::get('/tests', 'TestController@AllTests')->name('AllTests');
    Route::match(['get', 'post'], '/submittest', 'TestController@submittest')->name('submittest');

    //notification 
    
    Route::get('/notification/MarkAllAsRead', function() {
        auth()->user()->unreadNotifications->markAsRead();
        return redirect()->back();
    })->name('MarkAllAsRead');
    
});

