<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Order extends Model
{
    use HasFactory;

    // protected $fillabel = [
    //     'name',
    //     'external_id',
    //     'no_transaction',
    //     'product_id',
    //     'quantity',
    //     'grand_total',
    //     'order_date',
    //     'payment_status',
    //     'payment_method',
    // ];
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function promocode()
    {
        return $this->hasOne(Promocode::class);
    }
}
