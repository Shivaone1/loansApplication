<?php
    namespace App\Http\Controllers\admin;

    use App\Http\controllers\controller;
    use Illuminate\Http\Request;

    class cashbookcontroller extends controller
    {
        public function cashbook(){
            return view('Admin.dashboard.cashbook');
        }
    }
?>