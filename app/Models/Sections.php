<?php

namespace App\Models;

use App\Models\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Sections extends Model
{
    use Translatable;

    protected $fillable = ['code', 'name', 'description'];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
