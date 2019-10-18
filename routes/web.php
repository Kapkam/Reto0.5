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

Route::get('/products/{shop}', 'ProductController@listaProductos');

Route::get('/products/{shop}/create', 'ProductController@create')->name('añadirProducto');
/*action='insertarProducto'*/
Route::post('/products/{shop}', 'ProductController@store')->name('insertarProducto');

Route::/*put*/patch('/products/{shop}/{product}', 'ProductController@update');

Route::delete('/products/{shop}/{product}', 'ProductController@destroy')->name('eliminarProducto');

/*Route::get('/products/{shop}/{product}',function(){
   return view('modproduct');
})->name('modificarProducto');*/

?>
