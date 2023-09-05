<?php
    namespace App\Http\Controllers\admin;

    use App\Http\controllers\controller;
    use Illuminate\Http\Request;

    class bankdepositentrycontroller extends controller
    {
        public function bankdepositentry(){
            return view('Admin.dashboard.bankdepositentry');
        }
    }
?>