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

Route::get('/datePicker', function () {
    return view('pruebaDatepicker');
});

Route::resource('admin/cursos', 'CursoController');
Route::resource('admin/profesores', 'ProfesorController');
Route::resource('admin/alumnos', 'AlumnoController');
Route::resource('admin/evaluaciones', 'EvaluacionController');
Route::resource('seguridad/usuario', 'UsuarioController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
