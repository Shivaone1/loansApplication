<?php
    namespace App\Http\Controllers\admin;

    use App\Http\controllers\controller;
    use Illuminate\Http\Request;

    class bankwithdrawalentrycontroller extends controller
    {
        public function bankwithdrawalentry(){
            return view('Admin.dashboard.bankwithdrawalentry');
        }
    }
?>