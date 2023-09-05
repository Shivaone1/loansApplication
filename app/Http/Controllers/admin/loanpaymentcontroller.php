<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loanpaymentcontroller extends Controller
{
   
    public function loanpayment(){
        return view('Admin.dashboard.loanpayment');
    }
    public function loanpaymentdone(Request $request)
   {
     return redirect('admin/loan-payment')->with('success', 'Your Loan Payment Successfully... !!!');
   }
}
