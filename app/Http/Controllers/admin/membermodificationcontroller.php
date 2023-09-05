<?php
    namespace App\Http\Controllers\admin;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;

    class membermodificationcontroller  extends controller{
        public function membermodification(){
            return view("Admin/dashboard/membermodification");
        }
    }
?>