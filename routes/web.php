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

Route::get('/', 'ShopController@index');

Route::get('/products/{shop}', 'ProductController@listaProductos')->name('productos');

Route::get('/create', 'ProductController@create')->name('añadirProducto');

Route::post('/products/{shop}', 'ProductController@store')->name('insertarProducto');

Route::post('/products/{shop_id}/{product_id}','ProductController@edit')->name('formularioModificar');

Route::post('/productsmod/{shop_id}/{product_id}', 'ProductController@update')->name('modificar');

Route::post('/productsdel/{shop_id}/{product_id}', 'ProductController@destroy')->name('eliminarProducto');

Route::get('/consulta', 'ProductController@formularioConsulta')->name('formularioConsulta');

Route::post('/resultados', 'ProductController@consulta')->name('resultados');

?>
