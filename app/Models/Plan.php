<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'sub_name',
        'name',
        'single_price',
        'single_discount',
        'couple_price',
        'couple_discount',
        'family_price',
        'family_discount'
    ];
}
