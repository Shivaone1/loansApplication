<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loanscheme extends Model
{
    use HasFactory;
    public $fillable=[
        'scheme_code',
        'scheme_name',
        'scheme_minamount',
        'scheme_maxamount',
        'scheme_applicable_intrest',
        'scheme_type'
    ];
}
