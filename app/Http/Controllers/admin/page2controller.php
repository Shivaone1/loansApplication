<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use App\Models\page2;
use Validator;

class page2controller extends Controller
{
    public function page2(){
        $data=page2::orderby('id','desc')->paginate('10');
        return view("Admin.dashboard.page2",compact('data'));
    }
    public function page2add(){
        return view("Admin/dashboard/page2add");
    }
    public function page2delete($id){
        $data=page2::find($id);
        $data->delete();
        return back();
    }
    public function page2store(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required|min:4',
            'mobile' => 'required|min:10|max:12',
            'email' => 'required|email|max:35',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data = page2::create([
            'name' => request('name'),
            'mobile' => request('mobile'),
            'city' => request('city'),
            'email' => request('email'),
            'status' => "Active",
            'customer_id' => "CUST".time().date('Y')*2,
        ]);
        return redirect('admin/page2');
    }
}
