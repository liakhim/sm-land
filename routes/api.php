<?php

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::group(['prefix' => 'employees'], function () {
    Route::post('', 'EmployeeController@create');
    Route::get('', 'EmployeeController@index');
    Route::get('{id}', 'EmployeeController@show');
    Route::patch('{id}', 'EmployeeController@update');
});
