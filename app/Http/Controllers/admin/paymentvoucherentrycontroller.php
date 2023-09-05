<?php
    	namespace App\Http\Controllers\admin;

        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;

        class paymentvoucherentrycontroller extends Controller
        {
            public function paymentvoucherentry(){
                return view('Admin.dashboard.paymentvoucherentry');
            }
        }
?>