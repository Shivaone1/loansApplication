<?php
    namespace App\Http\Controllers\api;
    
    use App\Http\Controllers\Controller;
    use App\Http\Resources\PostResource;////copy of another place
    use Illuminate\Http\Request;
    use App\models\customer;
    use Validator;

    class aadharauthcontroller extends Controller{
        // public function aadharverify(Request $request){   
        //     $input=$request->except(['_token']);     
        //     $data=$request->all();
        //     dd($data);
        //     return back()->with('success','Aadhar Verify Successfully...')->withInput();
        // }

        public function aadharverify(Request $request){
           $data=$request->all();
            $customer = new customer();
            $customer->cust_fname=$request->cust_fname;
            $customer->cust_lname=$request->cust_lname;
            $customer->cust_aadharno=$request->cust_aadharno;
            $data=$customer->save();
            if($data){
                return response()->json([
                    'status'=>400,
                    'error'=>'some thing went wrong'
                ]);
            }else{
                return response()->json([
                    'status'=>200,
                    'message'=>'Successfully...'
                ]);
            }
        }
        public function aadharverifyview(Request $request) {

            $customer = customer::all();;
            return response()->json([
                'status'=>'success',
                'customer' => $customer->toArray()
            ]);
            
        }
        // public function aadharverify(Request $request)
        // {            
                                  
        //         $cust_aadharno = $request->input('cust_aadharno');
        //         dd($cust_aadharno);
                
        //         $client = new Client([ 'headers' => [ 'Content-Type' => 'application/json' ]]);
        //         $res = $client->post('127.0.0.1/8000',
        //             ['body' => json_encode(
        //                 ['aadhaar-id'=>$cust_aadharno ]
        //             )]
        //         );
            
        //         if($res->getStatusCode()==200){
        //         if($reply->success){
        //             $reply=json_decode($res->getBody()->getContents());
        //         return response()->json(['message'=>'Aadhaar Verification Successful'],200);
        //         } else{
        //             return response()->json(['errmessage'=>'Aadhaar Verification Not Successful'],400); 
        //         }
        //         } else{
        //         return response()->json(['errmessage'=>'Aadhaar Verification Not Successful'],400); 
        //         }
        // }
    }
    
?>