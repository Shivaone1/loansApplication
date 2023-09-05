<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    use HasFactory;
    public $fillable=[
        'product_name',
        'product_type',
        'product_purity',
        'product_current_value',
        'product_offer_rs',
        'product_img',

    ];
}
