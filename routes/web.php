<?php

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

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');


Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@getIndex'
]);

Route::get('/docs', [
    'as' => 'documentation',
    'uses' => 'HomeController@getDocs'
]);

Route::get('/search/{search_string}', [
    'as' => 'search.global.get',
    'uses' => 'SearchController@getSearchGlobal'
]);
Route::post('/search', [
    'as' => 'search.global.post',
    'uses' => 'SearchController@postSearchGlobal'
]);

Route::get('/quotes', [
    'as' => 'quotes.index',
    'uses' => 'QuotesController@getIndex'
]);

Route::post('/quotes', [
    'as' => 'quotes.store',
    'uses' => 'QuotesController@postStore'
]);

Route::get('/quotes/create', [
    'as' => 'quotes.create',
    'uses' => 'QuotesController@getCreate'
]);

Route::get('/quotes/{id}', [
    'as' => 'quotes.show',
    'uses' => 'QuotesController@getShow'
]);

Route::patch('/quotes/{id}/edit', [
    'as' => 'quotes.edit',
    'uses' => 'QuotesController@postUpdate'
]);

Route::delete('/quotes/{id}', [
    'as' => 'quotes.destroy',
    'uses' => 'QuotesController@postDestroy'
]);

Route::get('/authors', [
    'as' => 'authors.index',
    'uses' => 'AuthorsController@getIndex'
]);

Route::get('/authors/{id}', [
    'as' => 'authors.show',
    'uses' => 'AuthorsController@getShow'
]);