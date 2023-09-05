<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class customerjoiningapprovalcontroller extends Controller
{
    public function custjoinapproal(){
        return view('Admin.dashboard.customerjoiningapproval');
    }
}
