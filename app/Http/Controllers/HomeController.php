<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::paginate();
        return view('index', compact('categories'));
    }

    public function listProduct()
    {
        $products = Product::paginate(4);
        return view('products', compact('products'));
    }

    public function listBanner()
    {
        $banners = Banner::getAll();
        return view('banner', compact('banners'));
    }
}
