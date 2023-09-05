<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schemedetails extends Model
{
    use HasFactory;
    public $fillable=([
        'product_name',
        'product_long_term',
        'product_term',
        'product_mode',
        'product_loan_amount',
        'product_roi',
        'product_emi',
        'product_intrest_type'     

    ]);
}
