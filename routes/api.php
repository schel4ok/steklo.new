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

Route::get('/search', [
    'as' => 'api.search',  // путь /api/search?q=searchword  откроет результаты поиска в формате json
    'uses' => 'Api\SearchController@search'
]);

Route::get('/todos', [
    'as' => 'api.todos',  // путь /api/search?q=searchword  откроет результаты поиска в формате json
    'uses' => function() { return App\Todo::all(); }
]);



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
