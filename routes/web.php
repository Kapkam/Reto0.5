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

/*Route::get('/products/{shop}/{product}','ProductController@modificar')->name('modificarProducto');*/

Route::/*put*/patch('/products/{shop}/{product}', 'ProductController@update');

Route::get('/products/{shop}/{product}', 'ProductController@destroy')->name('eliminarProducto');

Route::get('/consulta', 'ProductController@formularioConsulta')->name('consulta');

Route::post('/resultados', 'ProductController@consulta')->name('resultados');

?>
