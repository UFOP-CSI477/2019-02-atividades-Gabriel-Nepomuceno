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
})->name('guest');

Auth::routes();

Route::get('/home', 'AlunoController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('/relatorio/professores', 'ProfessorController@index')->name('table');
    Route::post('projeto/novo','ProjetoController@store');
	Route::get('/projeto/novo', 'ProjetoController@index')->name('typography');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
});

Route::get('/area-geral', 'AreaGeralController@mostrarProjetos')->name('general');
Route::post('/area-geral/professores', 'AreaGeralController@listarProfessores');



