<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardcontroller extends Controller
{
    public function index(){
        return view('Admin/dashboard/dashboard');
    } 
    // public function customer(){
    //     $data=customer::Orderby("id","desc")->paginate('10');
    //     return view('Admin.dashboard.customer',compact('data'));
    // }
   
    // public function addcustomer(){
    //     return view('Admin.dashboard.addcustomer');
    // }
    // public function customercreate(Request $request){
    //     $input=$request->except(['_token']);
    //     $data=$request->all();
    //     $filename = time(). '_' .$request->file('custimg')->getClientOriginalName();
    //     $path = $request->file('custimg')->storeAs('customer',$filename,'public');
    //     $data["custimg"]='/storage/'.$path;
    //     $data=customer::create([
    //         'custname'=>request('custname'),
    //         'custemail'=>request('custemail'),
    //         'custgender'=>request('custgender'),
    //         'custdob'=>request('custdob'),
    //         'custmobile'=>request('custmobile'),
    //         'custimg'=>$data["custimg"],
    //         'custaadharno'=>request('custaadharno'),
    //         'custpanno'=>request('custpanno'),
    //         'address1'=>request('address1'),
    //         'address1city'=>request('address1city'),
    //         'address1pincode'=>request('address1pincode'),
    //         'address2'=>request('address2'),
    //         'address2city'=>request('address2city'),
    //         'address2pincode'=>request('address2pincode'),
    //         'cust_id'=>"CUST".time().date('Y')*2,
    //         'status' => "Active",
    //     ]);
    //     return redirect("admin/customer");
    // }
    // public function createdata(Request $request){
    //     $savedata=$request->except(['_token']);
    //     $data=page5::create($savedata);
    //     return redirect("admin/page5view");
    // }
    
    public function profile(){
        return view('Admin.dashboard.profile');
    }
    public function settings(){
        return view('Admin.dashboard.settings');
    }
}