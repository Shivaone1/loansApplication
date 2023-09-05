<?php
    namespace App\Http\Controllers\admin;

    use App\Http\Controllers\controller;
    use Illuminate\Http\Request;

    class useractivityreportcontroller extends controller{
        public function useractivityreport(){
            return view('Admin.dashboard.useractivityreport');
        }
    }
?>