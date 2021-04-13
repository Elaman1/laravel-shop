<?php

namespace App\Models;

use App\Models\Traits\Translatable;
use App\Services\CurrencyConversion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use Translatable;

    protected $fillable = [
        'code',
        'name',
        'image',
        'description',
        'category_id',
        'price',
        'hit',
        'new',
        'recommend',
        'neww',
        'amulet',
        'name_en', 
        'description_en',
        'sections'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
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

    public function scopeByCode($query, $code) {
        return $query->where('code', $code);
    }

    public function scopeHit($query) {
        return $query->where('hit', 1);
    }

    public function scopeNew($query) {
        return $query->where('new', 1);
    }

    public function scopeRecommend($query) {
        return $query->where('recommend', 1);
    }


    public function setNewAttribute($value) {
        $this->attributes['new'] = $value === 'on' ? 1 : 0;
    }

    public function setHitAttribute($value) {
        $this->attributes['hit'] = $value === 'on' ? 1 : 0;
    }

    public function setRecommendAttribute($value) {
        $this->attributes['recommend'] = $value === 'on' ? 1 : 0;
    }

    public function setNewwAttribute($value) {
        $this->attributes['neww'] = $value === 'on' ? 1 : 0;
    }
    public function setAmuletAttribute($value) {
        $this->attributes['amulet'] = $value === 'on' ? 1 : 0;
    }

    public function isNeww() {
        return $this->neww === 1;
    }

    public function isamulet() {
        return $this->amulet === 1;
    }


    public function isHit() {
        return $this->hit === 1;
    }

    public function isNew() {
        return $this->new === 1;
    }

    public function isRecommend() {
        return $this->recommend === 1;
    }

    public function getPriceAttributes($value) {
        return round(CurrencyConversion::convert($value), 2);
    }

    
}
