<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\customer;

class loanapprovalcontroller extends Controller
{
    public function loanapproval(Request $request){
        $data=customer::all();
        return view('Admin.dashboard.loanapproval',compact('data'));
    }
    public function loanapprovaldt(Request $request){
        $data=customer::all();        
        // $value = $request->loanapproval;
        // dd($value);
        return view('Admin.dashboard.loanapproval',compact('data'));
    }
    public function notapproved(){
        return back()->with("Not Approved This Loan");
    }
}
