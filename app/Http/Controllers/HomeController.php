<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\News;


///this new controller will handle the home page and will load the products and news from the database
class HomeController extends Controller
{
    public function index()
    {
        $products = Products::all();
        $news = News::all();

        return view('home', compact(
            'products',
            'news'
        ));
    }
}
