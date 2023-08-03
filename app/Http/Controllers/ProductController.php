<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    public function edit(Product $product) {
        return view('product.edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request) {
        $data = $request->validate(
            [
                'name' => 'required',
                'description' => 'nullable',
                'price' => 'required',
                'qty' => 'required'
            ]
        );

        $product->update($data);

        return redirect(route('product.index'))->with('message', 'Product updated successfully');
    }

    public function create() {
        return view('products.create');
    }

    public function delete(Product $product) {
        $product->delete();
        return redirect(route('product.index'))->with('message', 'Product deleted successfully');
    }

    public function store(Request $request) {
        $data = $request->validate(
            [
                'name' => 'required',
                'description' => 'nullable',
                'price' => 'required',
                'qty' => 'required'
            ]
        );

        $newProduct = Product::create($data);

        return redirect(route('product.index'));
    }


}
