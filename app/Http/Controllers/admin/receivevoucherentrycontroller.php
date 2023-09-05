<?php
    namespace App\Http\Controllers\admin;

    use App\Http\controllers\controller;
    use Illuminate\Http\Request;

    class receivevoucherentrycontroller extends controller
    {
        public function receivevoucherentry(){
            return view('Admin.dashboard.receivevoucherentry');
        }
    }
?>