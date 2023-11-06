<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
        'reference',
        'title',
        'status',
        'price',
        'sale_price',
        'sale_starts_on',
        'sale_ends_on',
        'stock',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'relations');
    }
}
