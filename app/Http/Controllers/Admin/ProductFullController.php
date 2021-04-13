<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductFullRequest;
use App\Models\Category;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\ProductFull;

class ProductFullController extends Controller
{
    public function index()
    {
        $products = ProductFull::query()->orderBy('id', 'desc')->paginate(10);
        return view('auth.products_full.index', compact('products'));
    }
    
    
    
   public function searchFull(Request $request) {
       
        $text_input = $_POST['text_input'];
        $products = ProductFull::query()->orderBy('id', 'desc')->where('name', 'LIKE', '%' . $text_input . '%')->paginate(10);
        
        return view('auth.products_full.index', compact('products'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('auth.products_full.form', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductFullRequest $request)
    {
        $params = $request->all();
        unset($params['image']);
        if ($request->has('image')) {
            $params['image'] = $request->file('image')->store('products_fulls');
        }
        
        unset($params['image_banner']);
        if ($request->has('image_banner')) {
            $params['image_banner'] = $request->file('image_banner')->store('products_fulls');
        }
        

        ProductFull::create($params);
        return redirect()->route('products_fulls.index');
    }
    
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($product)
    {
        $product = ProductFull::where('id', $product)->first();
        return view('auth.products_full.show', compact('product'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($product)
    {
        $product = ProductFull::where('id', $product)->first();
        $categories = Category::get();
        return view('auth.products_full.form', ['product' => $product, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductFullRequest $request, $product)
    {
        $product = ProductFull::where('id', $product)->first();
        $params = $request->all();
        unset($params['image']);
        if ($request->has('image')) {
            Storage::delete($product->image);
            $params['image'] = $request->file('image')->store('products');
        }

        foreach(['neww', 'amulet'] as $fieldName) {
            if (!isset($params[$fieldName])) {
                $params[$fieldName] = 0;
            }
        }

        $product->update($params);
        return redirect()->route('products_fulls.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {
        $product = ProductFull::where('id', $product)->first();
        $product->delete();
        return redirect()->route('products_fulls.index');
    }
}

