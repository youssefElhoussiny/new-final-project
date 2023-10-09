<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::get();
        return ProductResource::collection($products);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $product = Product::create($request->all());
        foreach(request('image') as $image)
        {
            $product  ->addMedia($image)
                      ->toMediaCollection('product_images');
        }  
        return response()->json(['message'=>'created']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        
        return new ProductResource($product);
    }

   
    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->all());
        return response()->json(['message'=>'updated']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
