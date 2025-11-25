<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    protected $fillable = [
        'price',
        'product_id',
        'variant_name',
        'variant_code',
        'stock',
        'category_product_id'
    ];
    public function category()
    {
        return $this->belongsTo(CategoryProduct::class, 'category_product_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
