<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'price',
        'stock',
        'category_id'
    ];

    protected $casts = [
        'image' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function OrderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
