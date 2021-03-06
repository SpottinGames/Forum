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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

 
 Route::group(['prefix' => 'question'], function(){

 		Route::get('post', ['as' => 'get_post', 'uses' => 'ForumController@getPost']);

 		Route::post('post', ['as' => 'post_question', 'uses' => 'ForumController@postQuestion']);

});
