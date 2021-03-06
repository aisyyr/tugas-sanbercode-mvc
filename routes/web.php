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

Route::get('/Home', 'HomeController@Home');

Route::get('/Register', 'AuthController@Register');
Route::post('/Welcome', 'AuthController@Welcome');

Route::get('/test', 'TestController@test');
Route::get('/sapa', 'TestController@sapa');
Route::post('/sapa', 'TestController@sapa_post');


//BAGIAN TEMPLATE BLADE
Route::get('/master', function()
{
    return view('master');
});

Route::get('/', function()
{
    return view('items.index');
});

Route::get('/data-tables', function(){
    return view('items.datatables');
});