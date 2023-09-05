<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class approvalcontroller extends Controller
{
    public function approval(Request $request){
        return view('Admin\dashboard\approval');
    }
    public function approved(Request $request){
        return redirect('admin\approval')->with('success', 'Your Loan Approved Successfully... !!!');
    }
    public function notapproval(){
        return redirect('admin\approval')->with('failure','This Form Transfer Pre-Approved Loan Process...');
    }
}
