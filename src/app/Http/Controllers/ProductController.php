<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    class ProductController extends Controller {

    public function index() { return Product::all(); }

    public function store(Request $r) { return Product::create($r->all()); }

    public function show(Product $product) { return $product; }

    public function update(Request $r, Product $product) {
        $product->update($r->all());
        return $product;
    }

    public function destroy(Product $product) {
        $product->delete();
        return response()->json(['message'=>'Deleted']);
    }
}

}
