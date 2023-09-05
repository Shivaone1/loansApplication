<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gold extends Model
{
    use HasFactory;
    public $fillable=[
        'gold_id',
        'cust_id',
        'gold_type',
        'gold_name',
        'gold_qnt',
        'gold_gross_wt',
        'gold_ston_wt',
        'gold_net_wt',
        'gold_purity',
        'gold_market_wt',
        'gold_rate',
        'gold_remark'
    ];
}
