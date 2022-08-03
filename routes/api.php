<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PostController;

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

Route::get('posts', ['PostController::class', 'index']);

Route::group(['controller' => PostController::class , 'prefix' => 'post'], function(){
    Route::post('add', 'add');
    Route::post('edit/{id}', 'edit');
    Route::post('update/{id}', 'update');
    Route::delete('delete/{id}', 'delete');
});