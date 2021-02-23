<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Classes\Basket;
use Auth;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket()
    {
        $order = (new Basket())->getOrder();
        if(!isset($order)) {
            session()->flash('warning', __("basket.cart_is_empty"));
            return redirect()->route('index');
        }
        return view('basket', compact('order'));
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
        $order = (new Basket())->getOrder();
        return view('order', compact('order'));
    }

    public function basketAdd(Product $product)
    {
        
        (new Basket(true))->addProduct($product);

        session()->flash('success', __("basket.added") . $product->name);

        return redirect()->route('basket');
    }

    public function basketAddMain(Product $product) {
        
        (new Basket(true))->addProduct($product);

        session()->flash('success', __("basket.added") . $product->name);

        return redirect()->route('index');
    }

    public function basketRemove(Product $product)
    {
        (new Basket(true))->removeProduct($product);
        session()->flash('warning', __("basket.removed") . $product->name);

        return redirect()->route('basket', $pivotRow->count);
    }
}