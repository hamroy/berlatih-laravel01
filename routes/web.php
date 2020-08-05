<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'HomeController@index'); //tugas Hari 2 – Membuat Web Statis dengan Laravel
Route::get('/register', 'AuthController@register');
Route::post('/welcome', 'AuthController@welcome');

// lanjutan 
Route::get('/master', function ()
{
	return view('adminlte/master');
});

// 
Route::get('/', function () //Hari 3 – Memasangkan Template dengan Laravel Blade
{
	return view('adminlte.table.table');
});

Route::get('/data-tables', function ()
{
	return view('adminlte.table.data-tables');
});