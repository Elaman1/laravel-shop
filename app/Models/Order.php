<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();

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
        foreach ($this->products as $product) {
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
