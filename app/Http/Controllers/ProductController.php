<?php

namespace App\Http\Controllers;

use App\Shop;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('addprod');
    }

    /*action='insertarProducto'*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $shop_id)
    {
      $product = new Product;

      if ($request->hasFile('img')) {
        if(substr($request->file('img')->getMimeType(), 0, 5) == 'image') {
          if ($request->file('img')->isValid()){
            $img = $request->file('img')->getClientOriginalName();
            $request->file('img')->move('img',$img);
            $product->img = $img;
          }
        }
      }

      $product->name = $request->input('nombre');
      $product->description = $request->input('descripcion');
      $product->stock = $request->input('stock');
      $product->links = $request->input('links');
      $product->shop_id = $shop_id;

      $product->save();

      $products = Product::all()->where ("shop_id","=",$shop_id);

      $shop = Shop::find($shop_id);

      return view('shop', ['products' => $products,'shop' => $shop] );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$shop_id,$product_id)
    {
      $product = Product::find($product_id);

      return view('modprod',['shop_id' => $shop_id,'product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$shop_id,$product_id)
    {
      $product = Product::find($product_id);

      $product->stock = $request->stock;

      $product->save();

      $products = Product::all()->where("shop_id","=",$shop_id);

      $shop = Shop::find($shop_id);

      return view('shop' , ['products' => $products,'shop' => $shop]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$shop_id,$product_id)
    {
      $shop = Shop::find($shop_id);

      $product = Product::find($product_id);

      $img = $product->img;
      if (!is_null($img)){
        unlink("/home/ubuntu/ProyectosLaravel/Reto0.5/public/img/" . $img);
      }

      Product::find($product_id)->delete();

      $products = Product::all()->where("shop_id","=",$shop_id);

      return view('shop' , ['products' => $products,'shop' => $shop]);
    }

    public function listaProductos($shop_id)
    {
      $shops = Shop::all();
      $products = Product::all()->where ("shop_id","=",$shop_id);

      $shop = Shop::find($shop_id);

      return view('shop', ['products' => $products,'shop' => $shop,'shops' => $shops]);
    }

    public function formularioConsulta(){
      return view("query");
    }

    public function consulta(Request $request){
      $product_id = $request->input('id_producto');

      $product = Product::find($product_id);

      $stock = $product->stock;

      return view('result',['result' => $stock]);
    }
}
