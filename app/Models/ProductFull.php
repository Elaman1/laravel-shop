<?php

namespace App\Models;

use App\Models\Traits\Translatable;
use App\Services\CurrencyConversion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category;

class ProductFull extends Model
{
    use Translatable;

    protected $fillable = [
        'code',
        'name',
        'image',
        'image_banner',
        'description1',
        'description2', 
        'category_id',
        'price',
        'neww',
        'amulet',
        'menu',
        'name_en', 
        'description1_en', 
        'description2_en'
    ];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function scopeByCode($query, $code) {
        return $query->where('code', $code);
    }
    

    public function getPriceForCount() {
        if (!is_null($this->pivot)) {
            
            if (session('currency')  == 'USD') {
            return round($this->pivot->count * $this->price / 416.8, 2);
            }
    
            if (session('currency')  == 'RUB') {
                return round($this->pivot->count * $this->price / 5.66, 2);
            }
            
            return $this->pivot->count * $this->price;
        }
        
        if (session('currency')  == 'USD') {
            return round($this->price / 416.8, 2);
        }

        if (session('currency')  == 'RUB') {
            return round($this->price / 5.66, 2);
        }
        
        return $this->price;
        
    }
    
    public function setNewwAttribute($value) {
        $this->attributes['neww'] = $value === 'on' ? 1 : 0;
    }
    public function setAmuletAttribute($value) {
        $this->attributes['amulet'] = $value === 'on' ? 1 : 0;
    }
    public function setMenuAttribute($value) {
        $this->attributes['menu'] = $value === 'on' ? 1 : 0;
    }
    
    public function isNeww() {
        return $this->neww === 1;
    }

    public function isamulet() {
        return $this->amulet === 1;
    }
    
    public function ismenu() {
        return $this->menu === 1;
    }
    
    public function getPriceAttributes($value) {
        return round(CurrencyConversion::convert($value), 2);
    }
}
