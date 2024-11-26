<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
    {
        public function index()
    {
        $products = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);
        Categoria::create($request->all());
        return redirect('categorias');
    }

    public function edit($id)
    {
        $product = Categoria::findOrFail($id);
        return view('categorias.edit', compact('categorias'));
    }

    public function update(Request $request, $id)
    {
        $product = Categoria::findOrFail($id);
        $product->update($request->all());
        return redirect('categorias.index')->with('success', 'Categoria updated successfully.');
    }

    public function destroy($id)
    {
        $product = Categoria::findOrFail($id);
        $product->delete();
        return redirect('categoria')->with('success', 'Categoria deleted successfully.');
    }
}