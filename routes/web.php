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

Route::get('/shops', 'ShopController@index');

Route::get('/productslist/{shop}', 'ProductController@listaProductos');

Route::get('/products', 'ProductController@index');

Route::get('/products/create', 'ProductController@create');
/*action='insertarProducto'*/
Route::post('/products', 'ProductController@store')->name('insertarProducto');

Route::/*put*/patch('/products/{product}', 'ProductController@update');

Route::delete('/products/{product}', 'ProductController@destroy')->name('eliminarProducto');

Route::get('products/{product}',function(){
   return view('modificarProducto');
});

?>
