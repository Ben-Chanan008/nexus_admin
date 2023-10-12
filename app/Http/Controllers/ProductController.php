<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::all();

        return view('products', ['categories' => Categories::all(), 'products' => $products]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $product = $request->validate([
            'category_id' => 'required',
            'product_name' => 'required',
            'about' => 'required',
            'body' => 'required',
            'review' => 'required',
            'rating' => 'required',
            'images' => ['required', Rule::imageFile()],
            'price' => ['required', 'numeric'],
        ]);

        if($request->hasFile('images')){
            $product['images'] = $request->file('images')->store('product_images', 'public');
        }

        Product::create($product);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return Product::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $product = Product::find($id);
        $product->update($request->all());

        return $product;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        return Product::destroy($id);
    }
}
