<?php
    namespace App\Http\Controllers\admin;

    use App\Http\Controllers\controller;
    use Illuminate\Http\Request;

    class trialbalancefyearcontroller extends controller{
        public function trialbalancefyear(){
            return view('Admin.dashboard.trialbalancefyear');
        }
    }
?>