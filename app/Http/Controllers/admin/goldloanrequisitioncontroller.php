<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class goldloanrequisitioncontroller extends Controller
{
    public function goldloanrequisition(){
        return view('Admin.dashboard.goldloanrequisition');
    }
}
