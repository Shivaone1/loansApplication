@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
<h1 class="m-0 text-dark"><a href="{{ url('admin/customer')}}"><i class="fas fa-fw fa-eye"></i></a></h1>
@stop

@section('content')
<div class="text-center bg-danger rounded-pill">{!! \Session::get('success') !!}</div>
<div class="container bg-white rounded">
    <div class="row">
        <div class="col-12">
            <form action="{{ url('admin/customercreate')}}" class="was-validated" Method="POST"
                enctype="multipart/form-data">
                @csrf
                <fieldset class="border p-2">
                    <legend class="w-auto">
                        Personal Details
                    </legend>
                    <div class="row">
                        <div class="col-md-2"><label for="title">Title</label>
                            <select name="cust_title" id="cust_title" class="form-control"
                                value="{{ old('cust_title')}}" required>
                                <option value="">Please Select</option>
                                <option value="Mr" @if (old('cust_title')=="Mr" ) {{ 'selected' }} @endif>Mr.</option>
                                <option value="Ms" @if (old('cust_title')=="Ms" ) {{ 'selected' }} @endif>Ms.</option>
                                <option value="Prof" @if (old('cust_title')=="Prof" ) {{ 'selected' }} @endif>Prof
                                </option>

                            </select>
                        </div>
                        <div class="col form-group">
                            <label for="cust_cust_fname">First Name:</label>
                            <input type="text" class="form-control" id="cust_fname" placeholder="Enter Customer First Name"
                                name="cust_fname" value="{{ old('cust_fname')}}" required>

                        </div>
                        <div class="col">
                            <label for="cust_mname">Middle Name:</label>
                            <input type="text" class="form-control" id="cust_mname" placeholder="Enter Customer Middle Name"
                                name="cust_mname" value="{{ old('cust_mname')}}">

                        </div>
                        <div class="col">
                            <label for="cust_lname">Last Name:</label>
                            <input type="text" class="form-control" id="cust_lname" placeholder="Enter Customer Last Name"
                                name="cust_lname" value="{{ old('cust_lname')}}" required>
                        </div>
                    </div>
                    <h5><b>Gardian Details</b></h5>
                    <div class="row">
                        <div class="col-md-2"><label for="title">Title</label>
                            <select name="gardian_title" id="gardian_title" value="{{ old('gardian_title')}}"
                                class="form-control" required>
                                <option value="">Please Select</option>
                                <option value="Father" @if (old('gardian_title')=="Father" ) {{ 'selected' }} @endif>
                                    Father</option>
                                <option value="Mather" @if (old('gardian_title')=="Mather" ) {{ 'selected' }} @endif>
                                    Mather</option>
                                <option value="Husband" @if (old('gardian_title')=="Husband" ) {{ 'selected' }} @endif>
                                    Husband</option>
                                <option value="Brother" @if (old('gardian_title')=="Brother" ) {{ 'selected' }} @endif>
                                    Brother</option>
                                <option value="wife" @if (old('gardian_title')=="wife" ) {{ 'selected' }} @endif>wife
                                </option>
                                <option value="Sister" @if (old('gardian_title')=="Sister" ) {{ 'selected' }} @endif>
                                    Sister</option>

                            </select>
                        </div>
                        <div class="col">
                            <label for="gardian_fname">First Name:</label>
                            <input type="text" class="form-control" id="gardian_fname" placeholder="Enter Gardian First Name"
                                name="gardian_fname" value="{{ old('gardian_fname')}}" required>

                        </div>
                        <div class="col">
                            <label for="gardian_mname">Middle Name:</label>
                            <input type="text" class="form-control" id="gardian_mname" placeholder="Enter Gardian Middle Name"
                                name="gardian_mname" value="{{ old('gardian_mname')}}">

                        </div>
                        <div class="col">
                            <label for="gardian_lname">Last Name:</label>
                            <input type="text" class="form-control" id="gardian_lname" placeholder="Enter Gardian Last Name"
                                name="gardian_lname" value="{{ old('gardian_lname')}}" required>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="email">Email ID:</label>
                            <input type="text" class="form-control" id="cust_email_address"
                                placeholder="Enter Customer email" name="cust_email_address"
                                value="{{ old('cust_email_address')}}" required>

                        </div>
                        <div class="col form-group">
                            <label for="gender">Gender:</label>
                            <br>
                            <select id="cust_gender" name="cust_gender" class="form-control"
                                value="{{ old('cust_gender')}}" required>
                                <option value="">Please Select</option>
                                <option value="male" @if (old('cust_gender')=="male" ) {{ 'selected' }} @endif>Male
                                </option>
                                <option value="female" @if (old('cust_gender')=="female" ) {{ 'selected' }} @endif>
                                    Female</option>
                                <option value="other" @if (old('cust_gender')=="Other" ) {{ 'selected' }} @endif>Other
                                </option>
                            </select>
                        </div>
                        <div class="col form-group">
                            <label for="cust_date_of_birth">Date Of Birth :</label>
                            <input type="date" class="form-control" id="cust_date_of_birth" name="cust_date_of_birth"
                                min="1960-01-01" max="2035-12-31" value="{{ old('cust_date_of_birth')}}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label for="cust_mobile">Mobile No.: +91 XXXXXXXXXX</label>
                            <input type="tel" class="form-control" pattern="[0-9]{10}" placeholder="Enter Mobile Number" title="Indian Number Only"
                                name="cust_mobile" maxlength="10" value="{{ old('cust_mobile')}}" required>                                
                            <span class="text-danger">{{ $errors->first("cust_mobile")}}</span>
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="cust_profile_pic">Customer Photo:</label>
                            <input type="file" class="form-control" id="cust_profile_pic" name="cust_profile_pic"
                                value="{{ Request::old('cust_profile_pic')}}" required />
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="cust_profile_pic">Signatures Photo:</label>
                            <input type="file" class="form-control" id="cust_signature_pic" name="cust_signature_pic"
                                value="{{ Request::old('cust_signature_pic')}}" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="cust_aadharno">Aadhar No.:</label>
                            <input type="text" class="form-control" id="cust_aadharno"
                                placeholder="Enter Aadharno Format [0000 0000 0000]" value="{{ old('cust_aadharno')}}"
                                name="cust_aadharno" maxlength="12"pattern="[0-9]{12}" title="12 Digit AADHAR CARD No" required>
                                <!-- <span><a href="{{ url('admin/api-aadharverify')}}"class="bg-success text-white border 0 rounded 3">Verify</a></span>                                 -->
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="cust_panno">Pan No.:</label>
                            <input type="pan" class="form-control" id="cust_panno" pattern="([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}"
                                placeholder="Enter Pan Card As ABCDE1111A." name="cust_panno" maxlength="10"
                                value="{{ old('cust_panno')}}" title="Five Letter four Number Last Letter "required>
                                <!-- <span><a href="#"class="bg-success text-white border 0 rounded 3">Verify</a></span> -->
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="current_address_detail">Current Address:</label>
                            <textarea class="form-control" id="current_address_detail" rows="3"
                                placeholder="Enter Current Address " name="current_address_detail"
                                value="{{ old('current_address_detail')}}"
                                required>{{ old('current_address_detail')}}</textarea>
                            <input type="text" class="form-control" id="current_address_city"
                                placeholder="Enter Current city" name="current_address_city"
                                value="{{ old('current_address_city')}}" required>
                            <input type="text" class="form-control" id="current_address_pincode"
                                placeholder="Enter Current City Pincode" name="current_address_pincode"
                                value="{{ old('current_address_pincode')}}" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="permanent_address_detail">Permanent Address :</label>
                            <textarea class="form-control" id="permanent_address_detail" rows="3"
                                placeholder="Enter Permanent Address " name="permanent_address_detail"
                                value="{{ old('permanent_address_detail')}}"
                                required>{{ old('permanent_address_detail')}}</textarea>
                            <input type="text" class="form-control" id="permanent_address_city"
                                placeholder="Enter Permanent city" name="permanent_address_city"
                                value="{{ old('permanent_address_city')}}" required>
                            <input type="text" class="form-control" id="permanent_address_pincode"
                                placeholder="Enter Permanent City Pincode" name="permanent_address_pincode"
                                value="{{ old('permanent_address_pincode')}}" required>
                        </div>
                    </div>
                </fieldset>
                <div class="container bg-white rounded">
                    <fieldset class="border p-2">
                        <legend class="w-auto">Bank Details</legend>
                        <div class="row">
                            <div class="col">
                                <label for="">A/c No.</label>
                                <input type="text" class="form-control" name="cust_account_number" pattern="[0-9]{11}" title="11 Digit Account Number"
                                    value="{{ old('cust_account_number')}}" placeholder="Enter 11 Digit Your Account No.">
                            </div>
                            <div class="col">
                                <label for="">
                                    A/c Holder Name
                                </label>
                                <input type="text" class="form-control" name="cust_bank_holder_name"
                                    value="{{ old('cust_bank_holder_name')}}" placeholder="A/c Holder Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="">IFSC Code</label>
                                <input type="text" class="form-control" name="cust_bank_ifsc_code" pattern="([A-Za-z]{4})([0-9]{7})" title="4 Latter 7 Number"
                                    value="{{ old('cust_bank_ifsc_code')}}"
                                    placeholder="Enter IFSC Code as ABCD1234567">
                            </div>
                            <div class="col">
                                <label for="">Branch Code</label>
                                <input type="text" class="form-control" pattern="[0-9]{6}" title="6 Digit Branch Code"name="cust_bank_branch_code"
                                    value="{{ old('cust_bank_branch_code')}}"
                                    placeholder="Enter 6 Digit Your Branch Code" maxlength="6">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="">Bank Name</label>
                                <input type="text" class="form-control" name="cust_bank_branche_name"
                                    value="{{ old('cust_bank_branche_name')}}" placeholder="Enter Bank Name">
                            </div>
                            <div class="col">
                                <label for="">Bank Address</label>
                                <textarea name="cust_bank_address" id="" cols="30" rows="3"
                                    value="{{ old('cust_bank_address')}}"
                                    class="form-control">{{ old('cust_bank_address') }}</textarea>
                            </div>
                        </div>
                </div>
                <div class="container bg-white rounded">
                    <fieldset class="border p-2">
                        <legend class="w-auto">Document Upload</legend>
                        <div class="row">
                            <div class="col">
                                <label for="">AADHAR CARD</label>
                                <input type="file" class="form-control" id="cust_document_aadhar"
                                    name="cust_document_aadhar" value="{{ old('cust_document_aadhar')}}" required />
                            </div>
                            <div class="col">
                                <label for="">PAN CARD</label>
                                <input type="file" class="form-control" id="cust_document_pan" name="cust_document_pan"
                                    value="{{ old('cust_document_pan')}}" required />
                            </div>
                            <div class="col">
                                <label for="">Bank Details</label>
                                <input type="file" class="form-control" id="cust_document_bankdt"
                                    name="cust_document_bankdt" value="{{ old('cust_document_bankdt')}}" required />
                            </div>
                        </div>
                        <!-- <div class="row">
                             <div class="col">
                                <label for="">Voter Id CARD</label>
                                <input type="file" class="form-control" id="cust_document_voterid" name="cust_document_voterid" />
                            </div>
                            <div class="col">
                                <label for="">Driving Licence</label>
                                <input type="file" class="form-control" id="cust_document_drivinglicence" name="cust_document_drivinglicence" />
                            </div>
                            <div class="col">
                                <label for="">Cancel Cheque</label>
                                <input type="file" class="form-control" id="cust_document_cancelcheque" name="cust_document_cancelcheque" required />
                            </div>
                            <div class="col">
                                <label for="">Passport</label>
                                <input type="file" class="form-control" id="cust_document_pasport" name="cust_document_pasport" />
                            </div>
                        </div> -->
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember" required> I agree on
                        Details.
                        <div class="invalid-feedback">Check this checkbox to continue.</div>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <!-- <script>
                    function customer(inputtxt) {
                        var cust_mobile = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
                        if((inputtxt.value.match(cust_mobile))
                                {
                                    return true;
                                }
                            else
                                {
                                    alert("message");
                                    return false;
                                }
                    }
            </script> -->
        </div>
    </div>
</div>
</br>

@stop