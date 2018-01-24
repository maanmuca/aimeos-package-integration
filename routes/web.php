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
    /*$params = app( '\Aimeos\Shop\Base\Page' )->getSections( 'catalog-list' );
    var_dump($params);
    return \View::make('welcome', $params);*/
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
