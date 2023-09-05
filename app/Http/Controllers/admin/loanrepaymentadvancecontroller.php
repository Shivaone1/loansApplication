<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loanrepaymentadvancecontroller extends Controller
{
    public function loanrepaymentadvance(){
        return view('Admin.dashboard.loanrepaymentadvance');
    }
}
