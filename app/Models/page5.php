<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class page5 extends Model
{
    use HasFactory;
    public $fillable=[
        'name',
        'email',
        'mobile',
        'city',
    ];
}
