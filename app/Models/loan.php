<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loan extends Model
{
    use HasFactory;
    public $fillable=[
        'loan_id',
        'cust_id',
        'loan_type',
        'loan_scheme',
        'loan_amount',
        'loan_purpose',
        'status'
    ];
}
