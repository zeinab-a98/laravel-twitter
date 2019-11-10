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
//Route::middleware('auth:api')->get('/user', function (Request $request) {
    //return $request->user();
//});
//Route::apiResource('category', 'CategoryController')->middleware('cors');
//Route::apiResource('product', 'ProductController')->middleware('cors');
// Route::get('/sms', 'SmsController@index')->middleware('cors');
// Route::post('/sms', 'SmsController@post')->middleware('cors');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/twitts/all', 'TwitterController@index')->middleware('cors');
Route::post('/twitts', 'TwitterController@post')->middleware('cors');
Route::delete('/delete', 'TwitterController@delete')->middleware('cors');
Route::post('/update', 'TwitterController@update')->middleware('cors');
Route::post('/register', 'Api\AuthController@register');
Route::post('/login', 'Api\AuthController@login');
Route::post('/book', 'BookController@index');