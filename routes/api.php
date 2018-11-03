<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// List results 
Route::get('TestResult', 'TestResultController@index');

// List single result 
Route::get('TestResult/{id}', 'TestResultController@show');

// Create new result
Route::post('TestResult', 'TestResultController@store');

// update new result
Route::put('TestResult/{id}', 'TestResultController@store');

// Delete result
Route::delete('TestResult/{id}', 'TestResultController@destroy');
