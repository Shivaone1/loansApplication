<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aadharverify extends Model
{
    use HasFactory;
    protected $fillable = [
        'aadharno',
        'name'
      ];
}
