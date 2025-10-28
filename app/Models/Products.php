<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = ["id"];

    public function product()
    
    {
        return $this->hasMany(Product::class);
    }
}
