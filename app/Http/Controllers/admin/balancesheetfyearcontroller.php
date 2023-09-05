<?php
    namespace App\Http\Controllers\admin;

    use App\Http\Controllers\controller;
    use Illuminate\Http\Request;

    class balancesheetfyearcontroller extends controller{
        public function balancesheetfyear(){
            return view('Admin.dashboard.balancesheetfyear');
        }
        
    }
?>