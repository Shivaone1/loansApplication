<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\customer;
use App\models\customers_logs;
use DB;
use validator;
class customercontroller extends Controller
{
    public function customer(request $request){

       $data=customer::query();
       if($request->search){
        $data->where("cust_fname","like","%".$request->search."%")->orwhere("cust_mobile","like","%".$request->search."%")->orwhere("cust_id","like","%".$request->search."%");
       }
        $data=$data->orderBy("id","desc")->paginate(10);
        return view('Admin.dashboard.customer',compact('data'));
    }
    public function addcustomer(){
        return view('Admin.dashboard.addcustomer');
    }
    public function oldcustomer(){
        $data=customer::where("cust_status",'DeActivate')->paginate('5');
        return view('Admin/dashboard/customerold',compact('data'));
    }
    public function customercreate(Request $request){
        $input=$request->except(['_token']);
        $data=$request->all();
          if (!preg_match("/^[0-9]{10}$/", $data['cust_mobile'])) {
            return back()->with('success','Please Enter Valid Mobile No.')->withInput();
          } 
          if (!preg_match("/^[0-9]{4}[-]?[0-9]{4}[-]?[0-9]{4}$/", $data['cust_aadharno'])) {
             return back()->with('success','Please Enter Valid Aadhar No.')->withInput();           
          }
          if (!preg_match("/^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/", $data['cust_panno'])) {
            return back()->with('success','Please Enter Valid Pan No.')->withInput();
          }
                           
        $data = customer::where('cust_aadharno', '=', $data['cust_aadharno'])->orWhere('cust_panno', '=', $data['cust_panno'])->orWhere('cust_mobile', '=', $data['cust_mobile'])->get()->first();
        if ($data === null) {
            $data=$request->all();
            $filename = time(). '_' .$request->file('cust_profile_pic')->getClientOriginalName();
            $path = $request->file('cust_profile_pic')->storeAs('customer',$filename,'public');
            $data["cust_profile_pic"]='/storage/'.$path;

            $filename1 = time(). '_' .$request->file('cust_signature_pic')->getClientOriginalName();
            $path1 = $request->file('cust_signature_pic')->storeAs('customer',$filename1,'public');
            $data["cust_signature_pic"]='/storage/'.$path1;

            $aadharpic = time(). '_' .$request->file('cust_document_aadhar')->getClientOriginalName();
            $aadharpath = $request->file('cust_document_aadhar')->storeAs('customer',$aadharpic,'public');
            $data["cust_document_aadhar"]='/storage/'.$aadharpath;

            $panpic = time(). '_' .$request->file('cust_document_pan')->getClientOriginalName();
            $panpath = $request->file('cust_document_pan')->storeAs('customer',$panpic,'public');
            $data["cust_document_pan"]='/storage/'.$panpath;

            $bankdtpic = time(). '_' .$request->file('cust_document_bankdt')->getClientOriginalName();
            $bankdtpath = $request->file('cust_document_bankdt')->storeAs('customer',$bankdtpic,'public');
            $data["cust_document_bankdt"]='/storage/'.$bankdtpath;
            
            $data=customer::create([
                'cust_title'=>request('cust_title'),
                "cust_fname"=>request('cust_fname'),
                "cust_mname"=>request('cust_mname'),
                "cust_lname"=>request('cust_lname'),
                'gardian_title'=>request('gardian_title'),
                'gardian_fname'=>request('gardian_fname'),
                'gardian_mname'=>request('gardian_mname'),
                'gardian_lname'=>request('gardian_lname'),                
                'cust_email_address'=>request('cust_email_address'),
                'cust_gender'=>request('cust_gender'),
                'cust_date_of_birth'=>request('cust_date_of_birth'),
                'cust_mobile'=>request('cust_mobile'),
                'cust_profile_pic'=>$data["cust_profile_pic"],
                'cust_signature_pic'=>$data["cust_signature_pic"],
                'cust_aadharno'=>request('cust_aadharno'),
                'cust_document_aadhar'=>$data["cust_document_aadhar"],
                'cust_document_pan'=>$data["cust_document_pan"],
                'cust_document_bankdt'=>$data["cust_document_bankdt"],
                'cust_panno'=>request('cust_panno'),                    
                'current_address_detail'=>request('current_address_detail'),
                'current_address_city'=>request('current_address_city'),
                'current_address_pincode'=>request('current_address_pincode'),
                'permanent_address_detail'=>request('permanent_address_detail'),
                'permanent_address_city'=>request('permanent_address_city'),
                'permanent_address_pincode'=>request('permanent_address_pincode'),
                'cust_account_number'=>request('cust_account_number'),
                'cust_bank_holder_name'=>request('cust_bank_holder_name'),
                'cust_bank_ifsc_code'=>request('cust_bank_ifsc_code'),
                'cust_bank_branch_code'=>request('cust_bank_branch_code'),
                'cust_bank_branche_name'=>request('cust_bank_branche_name'),
                'cust_bank_address' =>request('cust_bank_address'),
                'cust_id'=>date('Y').rand(00000,99999),
                // 'cust_id'=>"CUST".date('Y').rand(00000,99999),
                'cust_status' =>"Active",
            ]);
            
            return redirect("admin/customer")->with('success', 'Customer Add Successfully... !!!');
           
        }else{
            $data = customer::where('cust_aadharno', '=', $data['cust_aadharno'])->orWhere('cust_panno', '=', $data['cust_panno'])->orWhere('cust_mobile', '=', $data['cust_mobile'])->get()->first();
            if($data==true){
                // $id=$data['id'];
                $id=$data['cust_mobile'];
                return redirect("admin/addcustomer")->with('success',"Customer With $id Mobile Already Exit...")->withinput();
                // return redirect("admin/customer/edit/".$id);
            }
            
        }
       
    }
    public function custaddbankdetail(){
        return view('admin/custaddbankdetail');
    }
    public function customerdelete($id){
        $data=customer::find($id);
        $data->delete();
        return back();
    }
    public function customeredit($id){
        $data = customer::where('id', $id)->get();
        return view("admin/dashboard/customeredit",compact('data'));
    }
    public function customerupdate(Request $request, $id){
        $data = customer::find($id);
        $data->cust_gender = $request->input('cust_gender');
        $data->cust_mobile = $request->input('cust_mobile');
        $data->current_address_detail = $request->input('current_address_detail');
        $data->current_address_city = $request->input('current_address_city');
        $data->current_address_pincode = $request->input('current_address_pincode');
        
        $filename = '';
        if($request->hasFile('cust_profile_pic')){
            $filename = time(). '_' .$request->file('cust_profile_pic')->getClientOriginalName();
            $path = $request->file('cust_profile_pic')->storeAs('customer',$filename,'public');
            $data["cust_profile_pic"]='/storage/'.$path;
        }  
        $filename1 = '';
          if($request->hasFile('cust_signature_pic')){
            $filename1 = time(). '_' .$request->file('cust_signature_pic')->getClientOriginalName();
            $path1 = $request->file('cust_signature_pic')->storeAs('customer',$filename1,'public');
            $data["cust_signature_pic"]='/storage/'.$path1;
          }
        
        $data->update();
        $data = customers_logs::create([
            'cust_id'=>$data["cust_id"],
            'cust_status'=>$data["cust_status"],            
            'cust_title'=>$data["cust_title"],
            'cust_fname'=>$data["cust_fname"],
            'cust_mname'=>$data["cust_mname"],
            'cust_lname'=>$data["cust_lname"],
            'gardian_title'=>$data["gardian_title"],
            'gardian_title'=>$data["gardian_title"],
            'gardian_fname'=>$data["gardian_fname"],
            'gardian_mname'=>$data["gardian_mname"],
            'gardian_lname'=>$data["gardian_lname"],
            'cust_email_address'=>$data["cust_email_address"],
            'cust_mobile'=>$data["cust_mobile"],
            'cust_profile_pic'=>$data["cust_profile_pic"],
            'cust_signature_pic'=>$data["cust_signature_pic"],
            'cust_gender'=>$data["cust_gender"],
            'cust_date_of_birth'=>$data["cust_date_of_birth"],
            'cust_aadharno'=>$data["cust_aadharno"],
            'cust_document_aadhar'=>$data["cust_document_aadhar"],
            'cust_document_pan'=>$data["cust_document_pan"],
            'cust_document_bankdt'=>$data["cust_document_bankdt"],
            'cust_panno'=>$data["cust_panno"],
            'current_address_detail'=>$data["current_address_detail"],
            'current_address_city'=>$data["current_address_city"],
            'current_address_pincode'=>$data["current_address_pincode"],
            'permanent_address_detail'=>$data["permanent_address_detail"],
            'permanent_address_city'=>$data["permanent_address_city"],
            'permanent_address_pincode'=>$data["permanent_address_pincode"],
            'cust_account_number'=>$data["cust_account_number"],
            'cust_bank_holder_name'=>$data["cust_bank_holder_name"],
            'cust_bank_ifsc_code'=>$data["cust_bank_ifsc_code"],
            'cust_bank_branch_code'=>$data["cust_bank_branch_code"],
            'cust_bank_branche_name'=>$data["cust_bank_branche_name"],
            'cust_bank_address'=>$data["cust_bank_address"],
        ]);
        
        return back()->with('success','Update Successfully...');
    }
    public function customerview($id){
        $data = customer::where('id', $id)->get();
        return view("Admin.dashboard.customerview",compact('data'));
    }
    public function customerupdatepage($id){
        $data = customer::where('id', $id)->get();
        return view("Admin.dashboard.customerupdate",compact('data'));
    }
    public function deletedcustomer(){
        $data=customer::onlyTrashed()->get();
        return view("Admin/dashboard/deletedcustomer",compact('data'));
    }
    public function restorecustomer($id){
        $data=customer::onlyTrashed()->where('id', $id);
        $data->restore();
        return back();
    }
    public function pdeletecustomer($id){
        $data=customer::onlyTrashed()->where('id',$id);
        $data->forceDelete();
        return back();
    }
}