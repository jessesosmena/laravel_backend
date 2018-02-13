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

Route::post('register', 'APIController@register');
Route::post('login', 'APIController@login');

Route::group(['middleware' => 'jwt.auth'], function () {
    Route::get('user', 'APIController@getAuthUser');
});





//Route::middleware('auth:api')->get('/user', function (Request $request) {
    //return $request->user();
//});




