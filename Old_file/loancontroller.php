<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loancontroller extends Controller
{
    public function loan(){
        return view('Admin.dashboard.loan'); 
    }
   public function loanpayment(Request $request)
   {
     return redirect('admin/loan')->with('success', 'Your Loan Payment Successfully... !!!');
   }
}
