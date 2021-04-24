<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'product_name',
        'product_price',
        'user_id',
        'quantity',
        'paid',
        'status',
        'total'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
