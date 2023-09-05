<?php
    namespace App\Http\Controllers\admin;

    use App\Http\controllers\controller;
    use Illuminate\Http\Request;

    class fundreceivecontroller extends controller
    {
        public function fundreceive(){
            return view('Admin.dashboard.fundreceive');
        }
    }
?>