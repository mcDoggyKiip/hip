<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductsController extends Controller
{
    public function index(){
        $products = Products::all();
        return view('products.index', compact('products'));
    }

    public function create(){
        $products = Products::all();
        return view('products.create', compact('products'));
    }

    public function edit($id)
    {
        $products = Products::findOrFail($id);
        return view('products.edit', compact('products'));
    }

    public function store(Request $request)
    {
        $products = new products();

        $products->name = request('name');
        $products->save();

        return redirect('/products');
    }

    public function update($id, Request $request)
    {
        $products = Products::findOrFail($id);

        $products->name = request('name');
        $products->save();

        return redirect('/products');
    }

    public function destroy(Product $product)
    {
        $product->delete();
  
        return redirect()->route('products.index');
                        
    }
}
