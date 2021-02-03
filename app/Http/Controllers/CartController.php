<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;

class CartController extends Controller
{
    public function index() {
        $orderId = session('orderId');
        if(!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
        }
        return view('cart', compact('order'));
    }

    public function order() {
        return view('order');
    }

    public function addToCart($product_id) {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            $order = Order::create()->id;
            session(['orderId' => $order->id]);
        } else {
            $order = Order::find($orderId);
        }

        if ($order->products->contains($product_id)) {
            $pivotRow = $order->products()->where('product_id', $product_id)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();
        } else {
            $order->products()->attach($product_id);
        }


        return redirect()->route('cart');

    }

    public function removeToCart($product_id) {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return view('basket', compact('order'));
        }

        $order = Order::find($orderId);

        if ($order->products->contains($product_id)) {
            $pivotRow = $order->products()->where('product_id', $product_id)->first()->pivot;
            if ($pivotRow->count < 2) {
                $order->products()->detach($product_id);
            } else {
                $pivotRow->count--;
                $pivotRow->update();
            }
        }

        return redirect()->route('cart');
    }
}
