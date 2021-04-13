<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductFull;
use App\Models\Currency;
use Illuminate\Http\Request;
use App\Http\Requests\ProductsFilterRequest;
use App;

class MainController extends Controller
{
    public function index() {
        return view('index');
    }

    public function contact() {
        return view('contact');
    }

    public function store() {
        $categories = Category::query()->orderBy('id', 'desc')->get();
        
        return view('store', compact('categories'));
    }

    public function amulet() {
        $amulets = Product::query()->where('amulet', '1')->orderBy('id', 'desc')->get();
        return view('amulet', compact('amulets'));
    }

    public function newProduct() {
        $newProducts = Product::query()->where('neww', '1')->orderBy('id', 'desc')->get();
        return view('newProduct', compact('newProducts'));
    }

    public function free() {
        return view('free');
    }

    public function changeLocale($locale) {
        session(['locale' => $locale]);
        App::setLocale($locale);
        $currentLocale = App::getLocale();
        return redirect()->back();
    }

    public function categories() {
        $categories = Category::query()->orderBy('id', 'desc')->get();
        return view('categories', compact('categories'));
    }

    public function category($code) {
        $category = Category::where('code', $code)->first();
        return view('category', compact('category'));
    }

    public function product($category, $productCode ) {
        $product = Product::byCode($productCode)->firstOrFail();
        return view('product', compact('product'));
    }
    
    public function productFull($category, $productCode ) {
        $product = ProductFull::byCode($productCode)->firstOrFail();
        return view('productFull', compact('product'));
    }
    
    public function transportation() {
        return view('transportation');
    }
    
    public function reviews() {
        return view('reviews');
    }

    public function changeCurrency($currencyCode) {
        
        $currency = Currency::byCode($currencyCode)->firstOrFail();
        session(['currency' => $currencyCode]);
        return redirect()->back();
    }

    
}
