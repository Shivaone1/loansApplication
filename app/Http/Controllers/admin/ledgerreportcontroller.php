<?php
    namespace App\Http\Controllers\admin;

    use App\Http\controllers\controller;
    use Illuminate\Http\Request;

    class ledgerreportcontroller extends controller
    {
        public function ledgerreport(){
            return view('Admin.dashboard.ledgerreport');
        }
    }
?>