<?php

namespace App\Classes;

use Mail;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductFull;
use App\Mail\OrderCreated;
use Illuminate\Support\Facades\Auth;

class Basket
{
    protected $order;

    /**
     * Basket constructor.
     * @param  bool  $createOrder
     */
    public function __construct($createOrder = false)
    {
        $orderId = session('orderId');
        
        if (is_null($orderId) && $createOrder) {
            $this->order = Order::create();
            session(['orderId' => $this->order->id]);
        } else {
            $this->order = Order::findOrFail($orderId);
        }
        
        

    }

    public function getOrder() {

        return $this->order;
    }

    public function saveOrder($name, $phone, $user_id, $email) {
        Mail::to($email)->send(new OrderCreated($name, $this->getOrder()));
        return $this->order->saveOrder($name, $phone, $user_id, $email);
    }

    
    public function removeProduct(Product $product) {
        if ($this->order->products->contains($product->id)) {
            $pivotRow = $this->order->products()->where('product_id', $product->id)->first()->pivot;
            if ($pivotRow->count < 2) {
                $this->order->products()->detach($product->id);
            } else {
                $pivotRow->count--;
                $pivotRow->update();
            }
        }
    }
    
    public function removeProductFull(ProductFull $product) {
        if ($this->order->products_fulls->contains($product->id)) {
            $pivotRow = $this->order->products_fulls()->where('product_full_id', $product->id)->first()->pivot;
            if ($pivotRow->count < 2) {
                $this->order->products_fulls()->detach($product->id);
            } else {
                $pivotRow->count--;
                $pivotRow->update();
            }
        }
    }

    public function addProduct(Product $product) {
        
        if ($this->order->products->contains($product->id)) {
            $pivotRow = $this->order->products()->where('product_id', $product->id)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();
        } else {
            $this->order->products()->attach($product->id);
        }

        if (Auth::check()) {
            $this->order->user_id = Auth::id();
            $this->order->save();
        }
    }
    
    public function addProductFull(ProductFull $product) {
        
        if ($this->order->products_fulls->contains($product->id)) {
            $pivotRow = $this->order->products_fulls()->where('product_full_id', $product->id)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();
        } else {
            $this->order->products_fulls()->attach($product->id);
        }
        
       

        if (Auth::check()) {
            $this->order->user_id = Auth::id();
            $this->order->save();
        }
        
        $this->order->save();
        
        
    }


}
