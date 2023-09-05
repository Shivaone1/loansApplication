<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class paymentvoucherapprovalcontroller extends Controller
{
    public function paymentvoucherapproval(){
        return view('Admin.dashboard.paymentvoucherapproval');
    }
}
