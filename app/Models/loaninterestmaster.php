<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loaninterestmaster extends Model
{
    use HasFactory;
    public $fillable=[
        'month_plan',
        'month_intrest',
        'month_overdue_penalty_intrest'
    ];
}
