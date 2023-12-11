<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function create()
    {
        $categories = Category::orderBy('name')
            ->get();

        $brands = Brand::orderBy('name')
            ->get();


        return view('products.create')
            ->with([
                'categories' => $categories,
                'brands' => $brands,
            ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|integer|min:1',
            'brand' => 'required|integer|min:1',
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:2550',
            'price' => 'required|numeric|min:1',
        ]);

        $product = new Product();
        $product->category_id = $request->category;
        $product->brand_id = $request->brand;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = round($request->price, 1);
        $product->save();

        return to_route('products.show', $product->id)
            ->with([
                'success' => 'Product "' . $product->name . '" created!',
            ]);
    }


    public function show($id)
    {

        $product = Product::find($id);

        return view('product.show', ['product' => $product]);
    }


    public function edit(Product $product)
    {
        $categories = Category::orderBy('name')
            ->get();

        $brands = Brand::orderBy('name')
            ->get();


        return view('products.edit')
            ->with([
                'obj' => $product,
                'categories' => $categories,
                'brands' => $brands,
            ]);
    }


    public function update(Request $request, Product $product)
    {
        $request->validate([
            'category' => 'required|integer|min:1',
            'brand' => 'required|integer|min:1',
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:2550',
            'price' => 'required|numeric|min:1',
        ]);

        $product->category_id = $request->category;
        $product->brand_id = $request->brand;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = round($request->price, 1);
        $product->update();

        return to_route('products.show', $product->id)
            ->with([
                'success' => 'Product "' . $product->name . '" updated!',
            ]);
    }


    public function destroy(Product $product)
    {
        $productName = $product->name;
        $product->delete();

        return to_route('home')
            ->with([
                'success' => 'Product "' . $productName . '" deleted!',
            ]);
    }
}

