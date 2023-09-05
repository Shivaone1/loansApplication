<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loanreportcontroller extends Controller
{
    public function loanreport(){
        return view('Admin.dashboard.loanreport');
    }
}
