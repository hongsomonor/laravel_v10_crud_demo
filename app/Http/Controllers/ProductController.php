<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show_product()
    {

        $products = Product::all();

        return view('crud_operator.read',["products" => $products]);
    }

    public function create_product () {
        return view('crud_operator.create');
    }

    public function store_product (Request $request) {
        $products = new Product();

        $products->product_name = $request->product_name;
        $products->quantity = $request->product_quantity;
        $products->price = $request->product_price;

        $products->save();

        //redirect to route Table
        return redirect()->route('product.read');
    }

    public function destroy_product ($id) {
        $products = Product::find($id);
        $products->delete();

        return redirect()->route('product.read');
    }

    public function update_product ($id) {
        $products = Product::find($id);
        // return $products;
        return view('crud_operator.edit' , ["products" => $products]);
    }

    public function update_store_product ( $id,Request $request) {
        $products = Product::find($id);
        // re-asign value after update
        $products->product_name = $request->product_name;
        $products->quantity = $request->product_quantity;
        $products->price = $request->product_price;
        $products->save();

        return redirect()->route('product.read');
    }
}
