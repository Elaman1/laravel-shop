<?php

namespace App\Http\Middleware;

use App\Models\Order;
use Closure;

class BasketIsNotEmpty
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
        if (is_null(session('orderId'))) {
            session()->flash('warning', __("basket.cart_is_empty") );
                dd('gg3');
                return redirect()->route('index');
        } 
        $orderId = session('orderId');
        
        
        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
            
            
            if ($order->products->count() == 0 && $order->products_fulls->count() == 0) {
                session()->flash('warning', __("basket.cart_is_empty"));
                return redirect()->route('index');
            }
        }

        // $order = session('order');

        // if (!is_null($order) && $order->getFullSum() > 0) {
        //     return $next($request);
        // }

        // session()->forget('order');
        // session()->flash('warning', __('basket.cart_is_empty'));
        // return redirect()->route('index');
        
        return $next($request);
    }
}
