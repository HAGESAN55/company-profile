<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name',
        'description',
        'price',
        'image_url',
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
