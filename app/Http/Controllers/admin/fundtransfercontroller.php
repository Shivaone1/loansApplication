<?php
    namespace App\Http\Controllers\admin;

    use App\Http\controllers\controller;
    use Illuminate\Http\Request;

    class fundtransfercontroller extends controller
    {
        public function fundtransfer(){
            return view('Admin.dashboard.fundtransfer');
        }
    }
?>