@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
<h1 class="m-0 text-dark"><a href="{{ url('admin/customer')}}"><i class='fas fa-arrow-alt-circle-left'> Back</i></a>
</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12 p-1">
        <div class="d-flex justify-content-end">
            <a href="#" class="btn btn-sm btn-warning mr-2">Send SMS</a>
            <a href="#" class="btn btn-sm btn-success mr-2" data-toggle="modal" data-target="#send-whatsapp">Send
                Whatsapp</a>
            <button onclick="makeCall('9839201133')" id="call-button" class="btn btn-sm btn-danger mr-2"><i
                    class="fas fa-solid fa-phone-volume"></i> Call</button>
            <a href="#" class="btn btn-sm btn-primary">Send
                New Update</a>
        </div>
    </div>
</div>
<h1 class="bg-pink rounded">Customer Details</h1>
<div class="container bg-white rounded">
    <div class="row">
        <div class="col">

            <h1>Profile &nbsp;<i class='fas fa-sync-alt fa-spin text-green'></i></h1>
            @foreach($data as $c)
            <div class="row">
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Date Of Joining </th>
                                <td scope="col">{{ date('d,M-Y h:s',strtotime($c->created_at)) }} </td>
                            </tr>
                            <tr>
                                <th scope="col">Customer Name : </th>
                                <td scope="col">{{ $c->cust_fname }}&nbsp;{{ $c->cust_mname }}&nbsp;{{ $c->cust_lname }} <img src="{{ asset($c->cust_profile_pic)}}" class="img-circle"
                                        style="max-height: 52px;min-height: 16px;min-width: 16px;flex-wrap;nowrap !important;">
                                </td>
                            </tr>
                            <tr>
                                <th scope="col">Gardian's : {{ $c->gardian_title }}</th>
                                <td scope="col">{{ $c->gardian_fname }}&nbsp;{{ $c->gardian_mname }}&nbsp;{{ $c->gardian_lname }} </td>
                            </tr>
                            <tr>
                                <th scope="col">Address : </th>
                                <td scope="col">{{ $c->current_address_detail }}&nbsp;{{ $c->current_address_city }}&nbsp;{{ $c->current_address_pincode }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Pin Code : </th>
                                <td scope="col">110001</td>
                            </tr>
                            <tr>
                                <th scope="col">EMail Address : </th>
                                <td scope="col">{{ $c->cust_email_address }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Date Of Birth: </th>
                                <td scope="col">{{ date('d,M-Y',strtotime($c->cust_date_of_birth)) }} <i class='fas fa-arrow-alt-circle-right'>&nbsp;{{ (date('Y') - date('Y',strtotime($c->cust_date_of_birth))) }} Years</i></td>
                            </tr>
                            <tr>
                                <th scope="col">Nominee Name : </th>
                                <td scope="col">Shivasi </td>
                            </tr>
                            <tr>
                                <th scope="col">Nominee Relation : </th>
                                <td scope="col">Sister </td>
                            </tr>
                            <tr>
                                <th scope="col">Nominee Age : </th>
                                <td scope="col">15 </td>
                            </tr>
                            <tr>
                                <th scope="col">Blood Group : </th>
                                <td scope="col">O+</td>
                            </tr>
                            <tr>
                                <th scope="col">Gender : </th>
                                <td scope="col">Male </td>
                            </tr>
                            <tr>
                                <th scope="col">Phone No.: </th>
                                <td scope="col">+91 9839201133</td>
                            </tr>
                            <tr>
                                <th scope="col">Alter Phone No.: </th>
                                <td scope="col">+91 9839201133</td>
                            </tr>
                            <tr>
                                <th scope="col">Education : </th>
                                <td scope="col">MCA </td>
                            </tr>
                            <tr>
                                <th scope="col">Occupation : </th>
                                <td scope="col">Software Developer </td>
                            </tr>
                            <tr>
                                <th scope="col">Branch Name/Code: </th>
                                <td scope="col">Basant03232 </td>
                            </tr>
                        </thead>

                    </table>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col">
            <h1>Bank Details <i class='fas fa-edit1' style='font-size:30px;color:green'></i></h1>
            @foreach($data as $c)
            <div class="row">
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">A/C No. : </th>
                                <td scope="col">{{ $c->cust_account_number }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Account Holder Name : </th>
                                <td scope="col">{{ $c->cust_bank_holder_name }}</td>
                            </tr>
                            <tr>
                                <th scope="col">IFSC Code : </th>
                                <td scope="col">{{ $c->cust_bank_ifsc_code }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Branch Code : </th>
                                <td scope="col">{{ $c->cust_bank_branch_code  }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Branch Name : </th>
                                <td scope="col">{{ $c->cust_bank_branche_name }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Branch Address : </th>
                                <td scope="col">{{ $c->cust_bank_address }}</td>
                            </tr>
                        </thead>

                    </table>
                </div>
            </div>
            @endforeach
            <h1>ID Details <i class='fas fa-edit1' style='font-size:30px;color:green'></i></h1>
            @foreach($data as $c)
            <div class="row">
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">AADHAR Card No.: </th>
                                <td scope="col">{{ $c->cust_aadharno}}</td>
                            </tr>
                            <tr>
                                <th scope="col">Pan No. : </th>
                                <td scope="col">{{ $c->cust_panno}}</td>
                            </tr>
                            <!-- <tr>
                                <th scope="col">Passport No.: </th>
                                <td scope="col">SJSD52121</td>
                            </tr>
                            <tr>
                                <th scope="col">RationCard No.: </th>
                                <td scope="col">SJSD5875454</td>
                            </tr> -->
                            
                        </thead>

                    </table>
                </div>
            </div>
            @endforeach
            <div class="row">
                <div class="col">
                    <table class="table">
                    <h1 style='font-size:25px;'>Customer Photo<i class='fas fa-edit1' style='font-size:30px;color:green'></i></h1>
                        <thead>
                            <td scope="col"><img src="{{ asset($c->cust_profile_pic)}}" class="img-circle"alt="customerimage"></td>
                           </thead>
                    </table>
                </div>
                <div class="col">
                    <table>
                    <h1 style='font-size:25px;'>Signatures <i class='fas fa-edit1' style='font-size:30px;color:green'></i></h1>
                    <thead>
                        <td scope="col"><img src="{{ asset($c->cust_signature_pic)}}" class="img-circle" alt="signature">
                        </td>
                    </thead>
                </table>
                </div>

            </div>
        </div>

    </div>
</div>
<p>&nbsp;</p>
<div class="container rounded bg-white">
    <h1>Documents Images &nbsp;<i class='fas fa-paperclip' style='font-size:30px;color:dark'></i></h1>
    @foreach($data as $c)
    <div class="row">
        <img src="{{ asset($c->cust_document_aadhar)}}" alt="aasdharcard" width="100%">
        <img src="{{ asset($c->cust_document_pan)}}" alt="pancardno" width="50%">
        <img src="{{ asset($c->cust_document_bankdt)}}" width="50%">
        <img src="" width="50%">
        <!-- <img src="{{asset('/storage/customer/rationcard.png')}}" alt="rationcard" width="50%">
        <img src="{{asset('/storage/customer/signature.png')}}" alt="signature" width="50%"> -->
    </div>
    @endforeach
</div>
<p>&nbsp;</p>
<div class="container rounded bg-white">
    <h1>Services &nbsp;<i class='fas fa-universal-access' style='font-size:30px;color:dark'></i></h1>
    <div class="container">
        <h1>Product Details</h1>
        <div class="row">

            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Rs.</th>
                            <th>Due Rs.</th>
                            <th>Images</th>
                            <th>Login Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Gold</td>
                            <td>Ring</td>
                            <td>5000</td>
                            <td>2000</td>
                            <td>Na</td>
                            <td>03-10-2022</td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

@stop