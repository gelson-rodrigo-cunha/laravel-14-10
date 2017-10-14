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
//Route::resource('api/clients','ClientController'); 
Route::resource('api/clients','ClientController',['middleware'=>'auth']); 
Route::resource('api/user','UsersController',['middleware'=>'auth']); 
Route::get('api/user/showlocation','UsersController@showlocation',['middleware'=>'auth']); 

//Route::resource('api/clients','ClientController',['middleware'=>'auth:api']); 
Route::resource('api/users','UserController',['middleware'=>'auth:api']);
//Route::get('/oauth/clients','ClientController@index',['middleware'=>'auth']);
// Se comentar essa linha funciona na web e não no aplicatico
Route::resource('api/posts','PostController',['middleware'=>'auth']);
Route::resource('api/postsshow','ExibeController',['middleware'=>'auth:api']);
Route::resource('api/tasks','TasksController',['middleware'=>'auth']);
// Se comentar essa linha funciona no aplicativo e não na web
//Route::resource('api/posts','PostController',['middleware'=>'auth']);
//Route::resource('api/localizations','LocalizationsController',['middleware'=>'auth:api']);
Route::resource('api/localizations','LocalizationsController',['middleware'=>'auth']);

