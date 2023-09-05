<?php
    namespace App\Http\Controllers\admin;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\customer;

    class loanentrymodificationcontroller  extends controller{
        public function loanentrymodification(){
            $loanentry=customer::all();
            return view("Admin/dashboard/loanentrymodification",compact('loanentry'));
        }
        public function loanentry(Request $request){
            $loanentry=$request->except(['_token']);
            $cust_id = $loanentry;
            dd($cust_id);
            $loanentry=customer::where($cust_id=$cust_id)->get();
            if($loanentry=true){
                $data=customer::find($loanentry);
                // dd($data);
            }else{
                return back()->WithInput();
            }
        }
    }
?>