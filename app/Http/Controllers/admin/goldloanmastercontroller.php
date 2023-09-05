<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class goldloanmastercontroller extends Controller
{
    public function goldloanmaster(){
        return view('Admin.dashboard.goldloanmaster');
    }
}
