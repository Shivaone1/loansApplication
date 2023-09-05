<?php
    namespace App\Http\Controllers\admin;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    class loandocumentprintcontroller extends Controller{

        public function loandocumentprint(){
            return view('Admin.dashboard.loandocumentprint');
        }
    }

?>