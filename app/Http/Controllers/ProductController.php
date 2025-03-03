<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::query()->paginate(6);
        return view('product.index', compact('products'));
    }


    public function create()
    {
        $product = new Product();
        return view('product.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->has('image')) {
            $validatedData = $request->validated();
            $validatedData['image'] = $request->file('image')->store('product', 'public');
        }

        Product::create($validatedData);
        return to_route('products.index')->with('success','le produit est creer');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $product = new Product();
        return view('product.update', compact('product'));    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
    
        return back()->with('success', 'Le produit a été supprimé avec succès.');
    }
    

   }

