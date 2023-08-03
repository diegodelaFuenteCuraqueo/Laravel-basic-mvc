<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return view('products.index');
    }

    public function create() {
        return view('products.create');
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
