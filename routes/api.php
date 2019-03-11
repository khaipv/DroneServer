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
//product
Route::get("/product","ProductController@index");
Route::post("/product","ProductController@insert");
Route::put('/product/{id}',"ProductController@update");
Route::delete('/product/{id}', "ProductController@delete");
//user 
Route::get("/user","UserController@index");
Route::post("/user","UserController@insert");
Route::put('/user/{id}',"UserController@update");
Route::delete('/user/{id}', "UserController@delete");
//store    
Route::get("/store","StoreController@index");
Route::post("/store","StoreController@insert");
Route::put('/store/{id}',"StoreController@update");
Route::delete('/store/{id}', "StoreController@delete");
//role    
Route::get("/role","RoleController@index");
Route::post("/role","RoleController@insert");
Route::put('/role/{id}',"RoleController@update");
Route::delete('/role/{id}', "RoleController@delete");
//order    
Route::get("/order","OrderController@index");
Route::post("/order","OrderController@insert");
Route::put('/order/{id}',"OrderController@update");
Route::delete('/order/{id}', "OrderController@delete");
Route::get("/orderdetail/{id}","OrderController@getdetailorder");
//catagory    
Route::get("/catagory","CatagoryController@index");
Route::post("/catagory","CatagoryController@insert");
Route::put('/catagory/{id}',"CatagoryController@update");
Route::delete('/catagory/{id}', "CatagoryController@delete");
//cart    
Route::get("/cart","CartController@index");
Route::post("/cart","CartController@insert");
Route::put('/cart/{id}',"CartController@update");
Route::delete('/cart/{id}', "CartController@delete");
Route::get("/cartdetail/{id}","CartController@getdetailcart");