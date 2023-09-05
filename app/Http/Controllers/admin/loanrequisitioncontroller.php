<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loanrequisitioncontroller extends Controller
{
    public function loanrequisition(){
        return view('Admin.dashboard.loanrequisition');
    }
}
