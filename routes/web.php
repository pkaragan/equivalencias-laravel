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
    /*RUTAS DE UNIVERSIDAD*/
    Route::resource('universidad', 'UniversidadController');
    /*RUTAS DE CAMPUS*/
    Route::resource('campus', 'CampusController');    
    /*RUTAS DE CARRERA*/
    Route::resource('carrera', 'CarreraController');    
    /*RUTAS DE MATERIA*/
    Route::resource('materia', 'MateriaController');    
    /*RUTAS DE UACJ*/                      
    Route::resource('uacj', 'CampusUacjController');    
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
/*    
Route::get('libro', 'LibroController@index')->name('libro');
Route::get('libro/crear', 'LibroController@crear')->name('crear_libro');
Route::post('libro', 'LibroController@guardar')->name('guardar_libro');
Route::get('libro/{id}/editar', 'LibroController@editar')->name('editar_libro');
Route::put('libro/{id}', 'LibroController@actualizar')->name('actualizar_libro');
Route::delete('libro/{id}', 'LibroController@eliminar')->name('eliminar_libro');
*/