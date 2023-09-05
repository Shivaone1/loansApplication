<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\loaninterestmaster;

class loaninterestmastercontroller extends Controller
{
    public function loaninterestmaster(request $request){

            $data=$request->all();
            $data=loaninterestmaster::get();
            return view('Admin.dashboard.loaninterestmaster',compact('data'));
    }
    public function loaninterestmastercreate(Request $request){
            $data=$request->except(['_token']);
            $data=$request->all();
            $data=loaninterestmaster::create($data);            
            return back();                
    }
    public function loaninterestmastereditview(Request $request,$id){
        $data=loaninterestmaster::where('id',$id)->get();
        // dd($data);
        return view('Admin.dashboard.loaninterestmaster');
        }   
    public function loaninterestmasteredit(Request $request,$id){
            $request->except(['_token']);
            loaninterestmaster::where('id',$id)->first()->update($request->all());             
            return back();
    }
    public function loaninterestmasterdelete(Request $request,$id){
        $data=loaninterestmaster::find($id);
        $data->delete();
        return back();

    }
}
