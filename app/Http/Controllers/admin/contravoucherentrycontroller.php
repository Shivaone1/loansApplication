<?php 
    namespace App\Http\controllers\admin;

    use App\Http\Controllers\controller;
    use Illuminate\Http\Request;

    class contravoucherentrycontroller extends controller{
        public function contravoucherentry(){
            return view('Admin.dashboard.contravoucherentry');
        }
    }
?>