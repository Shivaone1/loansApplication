<?php
    namespace App\Http\Controllers\admin;
    
    use App\Http\Controllers\controller;
    use Illuminate\Http\Request;

    class journalvoucherentrycontroller extends controller{
        public function journalvoucherentry(){
            return view('Admin.dashboard.journalvoucherentry');
        }
    }
?>