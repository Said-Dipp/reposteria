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
    return view('auth/login');
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 * middleware para los que estan autentificados
 */
Route::middleware(['auth']) ->group(function (){
    Route::resource('admin/producto', 'Admin\\ProductoController');
});

/**
 * middleware para los qu estan autentificados y que tienen el rol adminsitrador
 */
Route::middleware(['auth', 'rol:administrador']) ->group(function (){
    Route::resource('admin/categoriaproducto', 'CategoriaProductoController');
    Route::resource('admin/cliente', 'ClienteController');
    Route::resource('admin/producto', 'Admin\\ProductoController');
    Route::resource('admin/pedido', 'Admin\\PedidoController');
    Route::resource('admin/promocion', 'Admin\\PromocionController');
});

/**
 * middleware para los que estan autentificados y que tienen el rol vendedor
 */
Route::middleware(['auth', 'rol:vendedor']) ->group(function (){
    Route::resource('vendedor/promocion', 'Admin\\PromocionController');
    Route::resource('admin/venta', 'Admin\\VentaController');
    Route::resource('admin/cliente', 'ClienteController');
    
});

/**
 * middleware para los qu estan autentificados y que tienen el rol panadero
 */
Route::middleware(['auth', 'rol:panadero']) ->group(function (){
    Route::resource('admin/preparado', 'Admin\\PreparadoController');
});



