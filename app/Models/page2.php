<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class page2 extends Model
{
    // public $timestamps = false;
    public $fillable=[
        'name',
        'mobile',
        'email',
        'city',
        'status',
        'customer_id'
    ];
}
