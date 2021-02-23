<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class OrderController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $orders = Order::active()->where('user_id', $user_id)->paginate(10);
        return view('auth.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        
        if (!Auth::user()->orders->contains($order)) {
            return back();
        }
        return view('auth.orders.show', compact('order'));
    }
}
