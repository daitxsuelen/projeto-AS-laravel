<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('categoria')->get();
        return view('products.index', compact('products'));
    }
    
    public function create()
    {
        $categorias = Categoria::all();
        return view('products.create', compact('categorias'));
    }
    
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'preco' => 'required',
        ]);
        Product::create($request->all());
        return redirect('/products')->with('success', 'Product created successfully.');
    }
    
    public function edit(Product $id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product','categorias'));
    }
    
    public function update(Request $request, Product $product)
    {
        $product = Product::findOrFail($product);
        $product->update($request->all());
        return redirect()->route('products');
    }
    
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/products');
    }
}