<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('auth:sanctum')->get('/', function(){
    return response()->json(["nombre"=>"alexis"]);
});


Route::group(['prefix' => 'user'], function(){
     Route::post('/login', 'Auth\AuthController@login');
});


Route::get('/brand', 'BrandController@index');
Route::post('/brand', 'BrandController@store');
Route::put('/brand/{id}', 'BrandController@update');
Route::get('/brand/{id}', 'BrandController@show');
Route::delete('/brand/{id}', 'BrandController@destroy');

Route::get('/products', 'ProductsController@index');
Route::get('/products/brands', 'ProductsController@brands');
Route::post('/products', 'ProductsController@store');
Route::put('/products/{id}', 'ProductsController@update');
Route::get('/products/{id}', 'ProductsController@show');
Route::delete('/products/{id}', 'ProductsController@destroy');

// Route::middleware('auth:api')->get('/', function(){
//     return response()->json(["nombre"=>"alexis"]);
// });