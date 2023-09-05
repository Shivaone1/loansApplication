<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loanrepaymentcontroller extends Controller
{
    public function loanrepayment(){
        return view('Admin.dashboard.loanrepayment');
    }
}
