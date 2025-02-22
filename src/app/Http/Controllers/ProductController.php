<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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

    public function store(Request $request)
    {
        return redirect('/products');
    }

    public function edit(Request $request)
    {
        return view('product.edit');
    }

    public function update(Request $request)
    {
        return redirect('/products');
    }

    public function delate(Request $request)
    {
        return redirect('/products');
    }
}
