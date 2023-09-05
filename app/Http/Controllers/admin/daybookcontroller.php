<?php
    namespace App\Http\Controllers\admin;

    use App\Http\controllers\controller;
    use Illuminate\Http\Request;

    class daybookcontroller extends controller
    {
        public function daybook(){
            return view('Admin.dashboard.daybook');
        }
    }
?>