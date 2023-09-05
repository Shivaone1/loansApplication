<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class accountgroupmastercontroller extends Controller
{
    public function accountgroupmaster(){
        return view('Admin.dashboard.accountgroupmaster');
    }
}
