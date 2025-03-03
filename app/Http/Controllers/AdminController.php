<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $products = Product::query()->paginate(6);
        return view('admin.dashboard', compact('products'));
    }
}
