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
Route::get('/tbl', function () //Hari 3 – Memasangkan Template dengan Laravel Blade
{
	return view('adminlte.table.table');
});

Route::get('/data-tables', function ()
{
	return view('adminlte.table.data-tables');
});

////Hari 5 – Berlatih CRUD di Laravel
Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/pertanyaan/create', 'PertanyaanController@create');
Route::post('/pertanyaan', 'PertanyaanController@store');
Route::get('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@show');
Route::get('/pertanyaan/{pertanyaan_id}/edit', 'PertanyaanController@edit');
Route::put('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@update');
Route::delete('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@destroy');

