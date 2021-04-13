<?php

namespace App\Models;

use App\Models\Product;
use App\Models\ProductFull;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();

    }
    
    public function products_fulls()
    {
        return $this->belongsToMany(ProductFull::class)->withPivot('count')->withTimestamps();

    }

    public function scopeActive($query) {
        return $query->where('status', 1);
    }

    public function user() {
        return $this->belongsTo(User::class);
    } 

    public function getFullPrice()
    {
        $sum = 0;
        foreach($this->products()->get() as $product) {
            $sum += $product->getPriceForCount();
        }
        
        foreach($this->products_fulls()->get() as $product) {
            $sum += $product->getPriceForCount();
        }
        
        return $sum;
        
    }

    public function saveOrder($name, $phone, $user_id, $email)
    {
        if ($this->status == 0) {
            $this->name = $name;
            $this->phone = $phone;
            $this->status = 1;
            $this->user_id = $user_id;
            $this->save();
            session()->forget('orderId');
            return true;
        } else {
            return false;
        }
    }
}
