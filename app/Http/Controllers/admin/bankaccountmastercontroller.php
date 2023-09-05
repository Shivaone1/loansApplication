<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class bankaccountmastercontroller extends Controller
{
    public function bankaccountmaster(){
        return view('Admin.dashboard.bankaccountmaster');
    }
}
?>