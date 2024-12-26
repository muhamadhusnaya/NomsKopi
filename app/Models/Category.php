<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'is_active',
        'jenis_makanan'
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
