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
Route::group(['namespace' => 'Frontend'], function() {
    Route::get('/', [
            'as' => 'frontend.index',
            'uses' => 'HomeController@index'
    ]);
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
});
Route::group(['prefix'=>'categories'], function() {
    Route::get('/', [
        'as' => 'admin.category.index',
        'uses' =>'CategoryController@index'
    ]);
    Route::get('create', [
        'as' => 'admin.category.create',
        'uses' =>'CategoryController@create'
    ]);
    Route::post('create', [
        'as' => 'admin.category.store',
        'uses' => 'CategoryController@store'
    ]);
    Route::get('edit/{id}', [
        'as' => 'admin.category.edit',
        'uses' => 'CategoryController@edit'
    ]);
    Route::post('edit/{id}', [
        'as' => 'admin.category.update',
        'uses' => 'CategoryController@update'
    ]);
    Route::get('delete/{id}', [
        'as' => 'admin.category.destroy',
        'uses' => 'CategoryController@destroy'
    ]);
});

Route::group(['prefix' => 'news'], function() {
    Route::get('/', [
        'as' => 'admin.new.index',
        'uses' => 'NewsController@index'
    ]);
    Route::get('create', [
        'as' => 'admin.new.create',
        'uses' => 'NewsController@create'
    ]);
    Route::post('create', [
        'as'=>'admin.new.store',
        'uses'=>'NewsController@store'
    ]);
    Route::get('edit/{id}', [
        'as' => 'admin.new.edit',
        'uses' => 'NewsController@edit'
    ]);
    Route::post('edit/{id}', [
        'as' => 'admin.new.update',
        'uses' => 'NewsController@update'
    ]);
    Route::get('delete/{id}', [
        'as' => 'admin.new.destroy',
        'uses' => 'NewsController@destroy'
    ]);
});