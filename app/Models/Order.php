<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Order extends Model
{
    use HasFactory;

    protected $fillabel = [
        'user_id',
        'no_order',
        'desccription',
        'order_date',
        'payment_status',
        'payment_method',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->belongsTo(OrderItem::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}
