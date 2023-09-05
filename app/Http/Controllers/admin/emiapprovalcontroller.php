<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class emiapprovalcontroller extends Controller
{
    public function emiapproval(){
        return view('Admin.dashboard.emiapproval');
    }
}
