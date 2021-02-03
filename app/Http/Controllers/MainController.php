<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class MainController extends Controller
{
    public function index() {
        $products = Product::get();
        return view('home', ['products' => $products]);
    }

    public function categories() {
        $categories = Category::get();
        return view('categories', ['categories' => $categories]);
    }

    public function category($code) {
        $category = Category::where('code', $code)->first();
        return view('category', ['category' => $category]);
    }

    public function product($product) {
        return view('product', ['products' => $product]);
    }

    
}
