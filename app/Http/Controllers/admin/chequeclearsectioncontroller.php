<?php
    namespace App\Http\Controllers\admin;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;

    class chequeclearsectioncontroller  extends controller{
        public function chequeclearsection(){
            return view("Admin/dashboard/chequeclearsection");
        }
    }
?>