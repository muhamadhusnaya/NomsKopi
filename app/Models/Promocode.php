<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocode extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'codepromo',
        'discounts',
        'expired'
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function items(){
        return $this->belongsTo(OrderItem::class);
    }

    public function user(){
        return $this->hasMany(User::class);
    }
}
