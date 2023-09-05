<?php
    namespace App\Http\Controllers\admin;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;

    class loanaccountstatuscontroller extends Controller{
        public function loanaccountstatus(){
            return view('Admin.dashboard.loanaccountstatus');
        }
    }
?>