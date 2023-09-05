<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\loaninterestmaster;
use App\Models\customer;
use App\Models\loan_type;
use App\Models\loan;
use App\Models\loanscheme;
use App\Models\gold;
class loanmastercontroller extends Controller
{
    public function loanmaster(Request $request){
        $loan_scheme=loaninterestmaster::all();
        $loantype=loan_type::all();
        $customer=customer::all();
        $loan=loan::orderBy('id', 'DESC')->get();
        $loanscheme=loanscheme::all();
        $golditem=gold::all();
       return view('Admin.dashboard.loanmaster',compact('loan_scheme','customer','loantype','loan','loanscheme','golditem')); 
    }
    public function loancreate(Request $request){
        $data=$request->except(['_token']);
        // dd($request->all());
        $data=loan::create([
            'loan_id'=>rand(00000,99999),
            'cust_id'=>$request["cust_id"],
            'loan_type'=>$request["loan_type"],
            'loan_scheme'=>$request["loan_scheme"],
            'loan_amount'=>$request["loan_amount"],
            'loan_purpose'=>$request["loan_purpose"],
            'status'=>"1"
        ]);
        $data=gold::create([
            'gold_id'=>rand(00000,99999),
            'cust_id'=>$request["cust_id"],
            'gold_type'=>$request["gold_type"],
            'gold_name'=>$request["gold_name"],
            'gold_qnt'=>$request["gold_qnt"],
            'gold_gross_wt'=>$request["gold_gross_wt"],
            'gold_ston_wt'=>$request["gold_ston_wt"],
            'gold_net_wt'=>$request["gold_net_wt"],
            'gold_purity'=>$request["gold_purity"],
            'gold_market_wt'=>$request["gold_market_wt"],
            'gold_rate'=>$request["gold_rate"],
            'gold_remark'=>$request["gold_remark"],
        ]);
        return back();
    }
    public function loandelete(Request $request,$id){
        $data=loan::find($id);
        $data->delete();
        return back()->with('msg', 'Your Required Loan Delete Successfully...');
    }
}
