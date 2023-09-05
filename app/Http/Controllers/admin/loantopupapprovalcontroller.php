<?php 
    namespace App\Http\Controllers\admin;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    class loantopupapprovalcontroller extends Controller{
        public function loantopupapproval(){
            return view('Admin.dashboard.loantopupapproval');
        }



        
    }
?>