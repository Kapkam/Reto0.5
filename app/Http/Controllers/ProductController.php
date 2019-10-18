<?php

namespace App\Http\Controllers;

use App\Product;
use App\Shop;
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
      $products = Product::all();

      /*foreach ($products as $product) {
        echo $product->name . " ";
        echo $product->description . " ";
        echo $product->stock . " ";
        echo $product->shop_id;
        echo "<br><br>";
      }*/

      return view('shop',['products' => $products]);
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
    public function store(Request $request)
    {
      $product = new Product;

      $product->name = $request->name;
      $product->description = $request->description;
      $product->img = $request->img;
      $product->stock = $request->stock;
      $product->links = $request->links;
      $product->shop_id = $request->shop_id;

      $product->save();

      $products = Product::all();

      return view('shop' , ['products' => $products]);
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $product = Product::find($id);

      $product->name = $request->name;
      $product->description = $request->description;
      $product->img = $request->img;
      $product->stock = $request->stock;
      $product->links = $request->links;
      $product->shop_id = $request->shop_id;

      $product->save();

      $products = Product::all();

      return view('shop' , ['productslist' => $products]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Product::destroy($id);

      $products = Product::all();

      return view('shop' , ['products' => $products]);
    }

    public function listaProductos($shop_id)
    {
      $products = Shop::find($shop_id)->products;

      /*foreach ($products as $product) {
        echo $product->name . " ";
        echo $product->description . " ";
        echo $product->stock . " ";
        echo $product->shop_id;
        echo "<br><br>";
      }*/

      return view('shop', ['products' => $products] );
    }
}
