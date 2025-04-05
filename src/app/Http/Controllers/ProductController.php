<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Season;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index' ,compact('products'));
    }

    public function create(Request $request)
    {
        return view('product.create');
    }

    public function store(ProductRequest $request)
    {
        $product=Product::create([
            "name"=>$request->name,
            "price"=>$request->price,
            "image"=>"dammy",
            "description"=>$request->description,
        ]);
        $product->seasons()->attach($request->seasons);
        return redirect('/products');
    }
 
    public function edit(Request $request)
    {
        $product = Product::find($request->productId);
        
        return view('product.edit', ['product' => $product]);
    }

    public function update(ProductRequest $request)
    {
        $data = $request->all();
        unset($data['_token']);

        $product = Product::find($request->productId);
        $product->update($data);
        $product->seasons()->attach($request->seasons);
        return redirect('/products');
    }

    public function delete(Request $request)
    {
        Product::find($request->productId)->delete();
        return redirect('/products');
    }

    public function search(Request $request)
{
    $products = Product::all();


    if (!empty($request->keyword)) {
        $products = Product::where('name', 'like', '%' . $request->keyword . '%')->get();
  }
 
    return view('product.index', compact('products'));
}

}
