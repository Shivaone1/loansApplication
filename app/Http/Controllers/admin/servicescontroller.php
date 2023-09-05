<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\services;
class servicescontroller extends Controller
{   
    public function services(){
        $data=services::orderby('id','desc')->paginate('10');
        return view("Admin.dashboard.services",compact('data'));
    }
    public function servicesaddform(){
        return View('admin/dashboard/addservices');
    }
    public function servicescreate(Request $request){
        $data=$request->except(['_token']);
        $data=$request->all();
        $filename = time(). '_' .$request->file('product_img')->getClientOriginalName();
        $path = $request->file('product_img')->storeAs('goldimg',$filename,'public');
        $data["product_img"]='/storage/'.$path;
        $data=services::create($data);
        return redirect('admin/services');
    }
    public function deleteservices($id){
        $data=services::find($id);
        $data->delete();
        return back();
    }
    public function editservices($id){
        $data=services::where('id',$id)->get();
        return view("Admin/dashboard/editservices",compact('data'));
    }
    public function servicesupdate(Request $request,$id){
        $data = services::find($id);
        $data->product_name = $request->input('product_name');
        $data->product_type = $request->input('product_type');
        $data->product_purity = $request->input('product_purity');
        $data->product_current_value = $request->input('product_current_value');
        $data->product_offer_rs = $request->input('product_offer_rs');
        $filename = time().'_'.$request->file('product_img')->getClientOriginalName();
        $path = $request->file('product_img')->storeAs('goldimg',$filename,'public');
        $data["product_img"]='/storage/'.$path;
        // $data->product_img = $request->input('product_img');
        $data->update();
        return redirect("admin/services");
    }
}
