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

Route::get('/', 'InicioController@index')->name('inicio');
Route::get('seguridad/login', 'Seguridad\LoginController@index')->name('login');
Route::post('seguridad/login', 'Seguridad\LoginController@login')->name('login-post');
Route::get('seguridad/logout', 'Seguridad\LoginController@logout')->name('logout');
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'superadmin']], function () {
    Route::get('/', 'HomeController@index')->name('admin-index');
    /*RUTAS DE CAMPUS*/
    Route::resource('universidad', 'UniversidadController');    
    /*RUTAS DE CAMPUS*/
    Route::resource('campus', 'CampusController');    
    /*RUTAS DE CARRERA*/
    Route::resource('carrera', 'CarreraController');    
    /*RUTAS DE MATERIA*/
    Route::resource('materia', 'MateriaController');    
    /*RUTAS DE UACJ*/                      
    Route::resource('uacj', 'CampusUacjController');    
    Route::get('uacj/index', 'CampusUacjController@index')->name('uacj-index');
    /*RUTAS DE CARRERAS UACJ*/                      
    Route::resource('carreraUacj', 'CarreraUacjController');
    /*RUTAS DE MATERIAS UACJ*/                      
    Route::resource('materiaUacj', 'MateriaUacjController');
    /*RUTAS DE ALUMNOS*/
    Route::resource('alumno', 'AlumnoController');
    /*RUTAS DE EQUIVALENCIAS*/
    Route::resource('equivalencias', 'EquivalenciasController');
    /*RUTAS DE ADMINISTRACION*/
    Route::resource('admin', 'AdminController');
});
