<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class lrepaymentcontroller extends Controller
{
    public function lrepayment(){
        return view('Admin/dashboard/lrepayment');
    }
}
