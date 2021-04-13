<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::active()->orderBy('id', 'desc')->paginate(10);
        return view('auth.orders.index', compact('orders'));
    }


    public function show(Order $order)
    {
        
        return view('auth.orders.show', compact('order'));
    }

    public function destroy(Order $order) {
        $order->delete();
        return redirect()->back();
    }
}
