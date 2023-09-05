<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loan_type extends Model
{
    use HasFactory;
    public $fillable=[
        'loan_type_name',
        'loan_type_description'
    ];
}
