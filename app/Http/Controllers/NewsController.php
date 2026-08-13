<?php

namespace App\Http\Controllers;

use App\Models\Products;

class ProductsController extends Controller
{
    public function index()
    {
        //not used
        $products = Products::all();

        return view('home', compact('products'));
    }
}
