<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(){
        $products = Product::query()->paginate(4);
        return view('store.index',compact('products'));

    }
}
