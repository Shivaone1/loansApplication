<?php
    namespace App\Http\Controllers\admin;

    use App\Http\controllers\controller;
    use Illuminate\Http\Request;

    class journalentryreportcontroller extends controller
    {
        public function journalentryreport(){
            return view('Admin.dashboard.journalentryreport');
        }
    }
?>