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
    Route::get('', 'AdminController@index');
    /*RUTAS DE UNIVERSIDAD*/
    Route::get('universidad', 'UniversidadController@index')->name('universidad');
    Route::get('universidad/crear', 'UniversidadController@crear')->name('crear_universidad');
    Route::post('universidad', 'UniversidadController@guardar')->name('guardar_universidad');
    Route::get('universidad/{id}/editar', 'UniversidadController@editar')->name('editar_universidad');
    Route::put('universidad/{id}', 'UniversidadController@actualizar')->name('actualizar_universidad');
    Route::delete('universidad/{id}', 'UniversidadController@eliminar')->name('eliminar_universidad');
    /*RUTAS DE CARRERA*/
    Route::get('carrera', 'CarreraController@index')->name('carrera');
    Route::get('carrera/crear', 'CarreraController@crear')->name('crear_carrera');
    Route::post('carrera', 'CarreraController@guardar')->name('guardar_carrera');
    Route::get('carrera/{id}/editar', 'CarreraController@editar')->name('editar_carrera');
    Route::put('carrera/{id}', 'CarreraController@actualizar')->name('actualizar_carrera');
    Route::delete('carrera/{id}', 'CarreraController@eliminar')->name('eliminar_carrera');
    /*RUTAS DE UACJ*/                      
    Route::get('uacj', 'CampusUacjController@index')->name('campusUacj');
    Route::get('uacj/crear', 'CampusUacjController@crear')->name('crear_campusUacj');
    Route::post('uacj', 'CampusUacjController@guardar')->name('guardar_campusUacj');
    Route::get('uacj/{id}/editar', 'CampusUacjController@editar')->name('editar_campusUacj');
    Route::put('uacj/{id}', 'CampusUacjController@actualizar')->name('actualizar_campusUacj');
    Route::delete('uacj/{id}', 'CampusUacjController@eliminar')->name('eliminar_campusUacj');
    /*RUTAS DE CARRERAS UACJ*/                      
    Route::post('carreraUacj[id]', 'CarreraUacjController@index')->name('carreraUacj');
    Route::get('carreraUacj/crear', 'CarreraUacjController@crear')->name('crear_carreraUacj');
    Route::post('carreraUacj', 'CarreraUacjController@guardar')->name('guardar_carreraUacj');
    Route::get('carreraUacj/{id}/editar', 'CarreraUacjController@editar')->name('editar_carreraUacj');
    Route::put('carreraUacj/{id}', 'CarreraUacjController@actualizar')->name('actualizar_carreraUacj');
    Route::delete('carreraUacj/{id}', 'CarreraUacjController@eliminar')->name('eliminar_carreraUacj');
    /*RUTAS DE ALUMNOS*/
    Route::get('alumno', 'alumnoController@index')->name('alumno');
    Route::get('alumno/crear', 'alumnoController@crear')->name('crear_alumno');
    Route::post('alumno', 'alumnoController@guardar')->name('guardar_alumno');
    Route::get('alumno/{id}/editar', 'alumnoController@editar')->name('editar_alumno');
    Route::put('alumno/{id}', 'alumnoController@actualizar')->name('actualizar_alumno');
    Route::delete('alumno/{id}', 'alumnoController@eliminar')->name('eliminar_alumno');
    /*RUTAS DE EQUIVALENCIAS*/
    Route::get('equivalencias', 'equivalenciasController@index')->name('equivalencias');
    Route::get('equivalencias/crear', 'equivalenciasController@crear')->name('crear_equivalencias');
    Route::post('equivalencias', 'equivalenciasController@guardar')->name('guardar_equivalencias');
    Route::get('equivalencias/{id}/editar', 'equivalenciasController@editar')->name('editar_equivalencias');
    Route::put('equivalencias/{id}', 'equivalenciasController@actualizar')->name('actualizar_equivalencias');
    Route::delete('equivalencias/{id}', 'equivalenciasController@eliminar')->name('eliminar_equivalencias');
    /*RUTAS DE ADMINISTRACION*/
    Route::get('admin', 'adminController@index')->name('admin');
    Route::get('admin/crear', 'adminController@crear')->name('crear_admin');
    Route::post('admin', 'adminController@guardar')->name('guardar_admin');
    Route::get('admin/{id}/editar', 'adminController@editar')->name('editar_admin');
    Route::put('admin/{id}', 'adminController@actualizar')->name('actualizar_admin');
    Route::delete('admin/{id}', 'adminController@eliminar')->name('eliminar_admin');

    /*RUTAS DE PERMISO*/
    Route::get('permiso', 'PermisoController@index')->name('permiso');
    Route::get('permiso/crear', 'PermisoController@crear')->name('crear_permiso');
    Route::post('permiso', 'PermisoController@guardar')->name('guardar_permiso');
    Route::get('permiso/{id}/editar', 'PermisoController@editar')->name('editar_permiso');
    Route::put('permiso/{id}', 'PermisoController@actualizar')->name('actualizar_permiso');
    Route::delete('permiso/{id}', 'PermisoController@eliminar')->name('eliminar_permiso');
    /*RUTAS DEL MENU*/
    Route::get('menu', 'MenuController@index')->name('menu');
    Route::get('menu/crear', 'MenuController@crear')->name('crear_menu');
    Route::post('menu', 'MenuController@guardar')->name('guardar_menu');
    Route::get('menu/{id}/editar', 'MenuController@editar')->name('editar_menu');
    Route::put('menu/{id}', 'MenuController@actualizar')->name('actualizar_menu');
    Route::get('menu/{id}/eliminar', 'MenuController@eliminar')->name('eliminar_menu');
    Route::post('menu/guardar-orden', 'MenuController@guardarOrden')->name('guardar_orden');
    /*RUTAS ROL*/
    Route::get('rol', 'RolController@index')->name('rol');
    Route::get('rol/crear', 'RolController@crear')->name('crear_rol');
    Route::post('rol', 'RolController@guardar')->name('guardar_rol');
    Route::get('rol/{id}/editar', 'RolController@editar')->name('editar_rol');
    Route::put('rol/{id}', 'RolController@actualizar')->name('actualizar_rol');
    Route::delete('rol/{id}', 'RolController@eliminar')->name('eliminar_rol');
    /*RUTAS MENU_ROL*/
    Route::get('menu-rol', 'MenuRolController@index')->name('menu_rol');
    Route::post('menu-rol', 'MenuRolController@guardar')->name('guardar_menu_rol');
    /*RUTAS PERMISO_ROL*/
    Route::get('permiso-rol', 'PermisoRolController@index')->name('permiso_rol');
    Route::post('permiso-rol', 'PermisoRolController@guardar')->name('guardar_permiso_rol');
});
Route::get('libro', 'LibroController@index')->name('libro');
Route::get('libro/crear', 'LibroController@crear')->name('crear_libro');
Route::post('libro', 'LibroController@guardar')->name('guardar_libro');
Route::get('libro/{id}/editar', 'LibroController@editar')->name('editar_libro');
Route::put('libro/{id}', 'LibroController@actualizar')->name('actualizar_libro');
Route::delete('libro/{id}', 'LibroController@eliminar')->name('eliminar_libro');
