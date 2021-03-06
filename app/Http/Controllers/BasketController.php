<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductFull;
use App\Models\Category;
use App\Models\User;
use App\Classes\Basket;
use Illuminate\Http\Request;
use Omnipay\Omnipay;
use Omnipay\Common\CreditCard;
use Omnipay\Common\Gateway;


class BasketController extends Controller
{
    public function basket()
    {
        $categories_menu = Category::get();
        
        $order = (new Basket())->getOrder();
        
        
        if(!isset($order)) {
            session()->flash('warning', __("basket.cart_is_empty"));
            return redirect()->route('index');
        }
        
        
        return view('basket', compact('order', 'categories_menu'));
    }

    public function basketConfirm(Request $request)
    {
        if (Auth::check()) {
            $user_id = Auth::user()->id;
        } else {
            $user_id = null;
        }

        $email = Auth::check() ? Auth::user()->email : $request->email;

        
        $success = (new Basket())->saveOrder($request->name, $request->phone, $user_id, $email);

        

        if ($success) {
            session()->flash('success', __("basket.you_order_confirmed"));
        } else {
            session()->flash('warning', __("basket.error"));
        }

        return redirect()->route('index');

    }

    public function basketPlace()
    {
        $categories_menu = Category::get();
        $order = (new Basket())->getOrder();
        return view('order', compact('order', 'categories_menu'));
    }

    public function basketAdd(Product $product)
    {
        
        (new Basket(true))->addProduct($product);

        session()->flash('success', __("basket.added") . $product->name);

        return redirect()->route('basket');
    }
    
    public function basketAddFull(ProductFull $product)
    {
        (new Basket(true))->addProductFull($product);

        session()->flash('success', __("basket.added") . $product->name);

        return redirect()->route('basket');
    }

    public function basketAddMain(Product $product) {
        
        (new Basket(true))->addProduct($product);

        session()->flash('success', __("basket.added") . $product->name);

        return redirect()->back();
    }
    
    public function basketAddFullMain(ProductFull $product) {
        
        (new Basket(true))->addProductFull($product);

        session()->flash('success', __("basket.added") . $product->name);

        return redirect()->back();
    }

    public function basketRemove(Product $product)
    {
        (new Basket(true))->removeProduct($product);
        session()->flash('warning', __("basket.removed") . $product->name);

        return redirect()->route('basket', $pivotRow->count);
    }
    
    public function basketRemoveFull(ProductFull $product)
    {
        (new Basket(true))->removeProductFull($product);
        session()->flash('warning', __("basket.removed") . $product->name);

        return redirect()->route('basket', $pivotRow->count);
    }
}