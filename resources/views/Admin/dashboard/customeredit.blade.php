@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
<h1 class="m-0 text-dark"><a href="{{ url('admin/customer')}}"><i class='fas fa-arrow-alt-circle-left'> Back</i></a>
</h1>
@stop

@section('content')
<div class="text-center bg-success rounded-pill">{!! \Session::get('success') !!}</div>
<div class="row">
    <div class="col-12">
        @foreach($data as $c)
        <form action="{{ url('admin/customerupdate/'.$c->id)}}" class="was-validated" Method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="cust_fname">Customer Name:</label>

                    <input type="text" class="form-control" id="cust_fname" placeholder="Enter Customer Name"
                        name="cust_fname" value="{{ $c->cust_fname }} {{ $c->cust_mname }} {{ $c->cust_lname }}"
                        disabled>
                    <input type="hidden" class="form-control" id="cust_id" placeholder="Enter Customer Name"
                        name="cust_id" value="">

                </div>
                <div class="col-md-6 form-group">
                    <label for="email">Email ID:</label>
                    <input type="text" class="form-control" id="cust_email_address" placeholder="Enter Customer email"
                        name="cust_email_address" value="{{ $c->cust_email_address }}" disabled>

                </div>
            </div>
            <div class="row">

                <div class="col-md-6 form-group">
                    <label for="gender">Gender:</label>
                    <br>
                    <select name="cust_gender" id="cust_gender" class="form-control Rounded">
                        <option value="{{ $c->cust_gender}}" @if (old('cust_gender')=="cust_gender" ) {{ 'selected' }}
                            @endif>{{ $c->cust_gender}}</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="col-md-6 form-group">
                    <label for="dob">Date Of Birth :</label>
                    <input type="text" class="form-control" id="cust_date_of_birth" name="cust_date_of_birth"
                        value="{{ $c->cust_date_of_birth }} : {{ (date('Y') - date('Y',strtotime($c->cust_date_of_birth))) }}"
                        disabled>

                </div>
            </div>
            <div class="row">
                <div class="col-md-4 form-group">
                    <label for="cust_mobile">Mobile No.:</label>
                    <input type="tel" class="form-control" id="cust_mobile" pattern="[0-9]{10}"
                        title="Please Enter Valid Number 0 to 9" placeholder="Enter Mobile Number" maxlength="10"
                        name="cust_mobile" value="{{ $c->cust_mobile }}" required>
                </div>
                <div class="col-md-4 form-group">
                    <label for="cust_profile_pic">Customer Photo:</label>
                    <input type="file" class="form-control" id="cust_profile_pic" accept=".jpg" name="cust_profile_pic"
                        value="{{ $c->cust_profile_pic }}" />
                    <div class="col-md-3 text-right"><img src="{{asset($c->cust_profile_pic)}}" width="65px"></div>
                </div>
                <div class="col-md-4 form-group">
                    <label for="cust_signature_pic">Signatures Photo:</label>
                    <input type="file" class="form-control" id="cust_signature_pic" name="cust_signature_pic"
                        value="{{ $c->cust_signature_pic}}" />
                    <div class="col-md-3 text-right"><img src="{{asset($c->cust_signature_pic)}}" width="65px">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="cust_aadharno">Aadhar No.:</label>
                    <input type="text" class="form-control" id="cust_aadharno" placeholder="Enter Aadharno Number"
                        name="cust_aadharno" value="{{ $c->cust_aadharno }}" disabled>
                </div>
                <div class="col-md-6 form-group">
                    <label for="cust_panno">Pan No.:</label>
                    <input type="text" class="form-control" id="cust_panno" placeholder="Enter Customer Pan No."
                        name="cust_panno" value="{{ $c->cust_panno }}" disabled>

                </div>

            </div>
            <div class="row">

                <div class="col-md-6 form-group">
                    <label for="current_address_detail">Present Address:</label>
                    <textarea class="form-control" id="current_address_detail" rows="3"
                        placeholder="Enter Present Address "
                        name="current_address_detail">{{ $c->current_address_detail }}</textarea>
                    <input type="text" class="form-control" id="current_address_city" placeholder="Enter Present city"
                        name="current_address_city" value="{{ $c->current_address_city }}" required>
                    <input type="text" class="form-control" id="current_address_pincode"
                        placeholder="Enter Present City Pincode" name="current_address_pincode"
                        value="{{ $c->current_address_pincode }}" required>

                </div>
                <div class="col-md-6 form-group">
                    <label for="permanent_address_detail">Permanent :</label>
                    <textarea class="form-control" id="permanent_address_detail" rows="3"
                        placeholder="Enter Permanent Address " name="permanent_address_detail"
                        disabled>{{ $c->permanent_address_detail }}</textarea>
                    <input type="text" class="form-control" id="permanent_address_city"
                        placeholder="Enter Permanent city" name="permanent_address_city"
                        value="{{ $c->permanent_address_city }}" disabled>
                    <input type="text" class="form-control" id="permanent_address_pincode"
                        placeholder="Enter Permanent City Pincode" name="permanent_address_pincode"
                        value="{{ $c->permanent_address_pincode }}" disabled>

                </div>

            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Check this checkbox to continue.</div>
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        @endforeach
    </div>
</div>
<br>
@stop