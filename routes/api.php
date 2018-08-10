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

Route::post('login', 'Api\UserController@login');
/**registrar cliente */
Route::post('cliente/registrar', 'Api\ClienteController@register');

/**login de liente */
Route::post('cliente/login', 'Api\ClienteController@login');

// Route::group(['middleware' => 'auth:api'], function(){

Route::middleware(['auth:api'])->group(function (){
    Route::post('details', 'Api\UserController@details');
    Route::get('producto', 'Admin\ProductoController@showApi');
});
