<?php
    namespace App\Http\Controllers\admin;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    class loansearchcontroller extends Controller{
        public function loansearch(){
            return view('Admin.dashboard.loansearch');
        }
    }

?>