<?php
    namespace App\Http\Controllers\admin;

    use App\Http\Controllers\controller;
    use Illuminate\Http\Request;

    class profitandlosscontroller extends controller{
        public function profitandloss(){
            return view('Admin.dashboard.profitandloss');
        }
    }
?>