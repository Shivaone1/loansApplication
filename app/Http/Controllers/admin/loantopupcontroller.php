<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loantopupcontroller extends Controller
{
    public function loantopup(){
        return view('Admin.dashboard.loantopup');
    }
    
}
