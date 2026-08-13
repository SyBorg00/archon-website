<?php

namespace App\Http\Controllers;

use App\Models\Products;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all();

        return view('home', compact('products'));
    }
}
