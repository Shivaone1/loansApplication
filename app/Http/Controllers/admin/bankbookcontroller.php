<?php
    namespace App\Http\Controllers\admin;

    use App\Http\controllers\controller;
    use Illuminate\Http\Request;

    class bankbookcontroller extends controller
    {
        public function bankbook(){
            return view('Admin.dashboard.bankbook');
        }
    }
?>