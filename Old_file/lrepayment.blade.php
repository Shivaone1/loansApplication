@extends('adminlte::page')

@section('title', 'Admin/Repayment')

@section('content_header')
<h1 class="m-0 text-dark">Repayment</h1>
@stop

@section('content')
<h3 class="bg-primary text-center rounded">Loan Re-Payment Section (EMI PAYMENT)</h3>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6"> <input type="search" id="search" Placeholder="Search by Name Customer Id Aadhar No. Pan No." class="form-control" /></div>
    <div class="col-md-3">
        <button type="button" class="btn btn-primary"><i class="fas fa-search"></i></button>
    </div>
</div>
<div class="row">
    <div class="col">
        <h4 class="bg-pink font-size:20px text-center rounded">Loan Detail Information</h4>
        <div class="container bg-white rounded">
            <div class="row">
                <div class="col">
                    <label for="loanid">Loan ID</label>
                    <input type="text" class="form-control" disabled>
                </div>
                <div class="col">
                    <label for="">Form No.</label>
                    <input type="text" class="form-control" disabled>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <label for="">Customer ID</label>
                    <input type="text" class="form-control" disabled>
                </div>
                <div class="col">
                    <label for="">Date</label>
                    <input type="date" class="form-control" disabled>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">Customer Name</label>
                    <input type="text" class="form-control" disabled>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">Loan Branch</label>
                    <input type="text" class="form-control" disabled>
                </div>
                <div class="col">
                    <label for="">Emi Last Month(cash)</label>
                    <input type="text" class="form-control" disabled>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">Holder's DOB</label>
                    <input type="date" class="form-control" disabled>
                </div>
                <div class="col">
                    <label for="age">Loan Holder's Age</label>
                    <input type="text" class="form-control" disabled>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for=""> Gurdian Name</label>
                    <input type="text" name="" value="" class="form-control" disabled>
                </div>
                <div class="col">
                    <label for="">Paydate</label>
                    <input type="date" class="form-control" disabled>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for=""> Address</label>
                    <textarea name="" id="" cols="5" rows="3" class="form-control" disabled></textarea>

                </div>
                <div class="col">
                    <label for="">Days</label>
                    <input type="text" disabled class="form-control" disabled>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">State</label>
                    <input type="text" name="" value="" class="form-control" disabled>
                </div>
                <div class="col">
                    <label for="">PIN</label>
                    <input type="text" class="form-control" disabled>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">Phone No.</label>
                    <input type="text" name="" value="" class="form-control" disabled>
                </div>
                <div class="col">
                    <label for="">Gender/Sex*</label>
                    <select name="gender" id="gender" class="form-control" disabled>
                        <option value="Pleasesele">Please Select Gender</option>
                        <option value="male" selected>Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">Member Picture</label>
                    <img src="http://127.0.0.1:8000/storage/customer/1664861039_15.jpg" alt="mempicturs"
                        class="img-thumbnail">
                </div>
                <div class="col">
                    <label for="">Ornament Image</label>
                    <img src="http://127.0.0.1:8000/storage/customer/1664343161_224.jpg" alt="ornamentimg"
                        class="img-thumbnail">
                </div>
            </div>
            <h3 class="bg-pink rounded">Loan Product Information</h3>
            <div class="row">
                <div class="col">
                    <label for="">Product Name</label>
                    <input type="text" name="" id="" class="form-control" disabled>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">Product Code</label>
                    <input type="text" class="form-control" disabled>
                </div>
                <div class="col">
                    <label for="">Term</label>
                    <input type="text" class="form-control" disabled>
                </div>
                <div class="col">
                    <label for="">Mode</label>
                    <input type="text" class="form-control" disabled>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">Loan Amount</label>
                    <input type="text" class="form-control" disabled>
                </div>
                <div class="col">
                    <label for="">Payment By</label>
                    <input type="text" class="form-control" disabled>
                </div>
                <div class="col">
                    <label for="">Cheque No.</label>
                    <input type="text" class="form-control" disabled>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">Cheque Date</label>
                    <input type="date" class="form-control" disabled>
                </div>
                <div class="col">
                    <label for="">Bank A/C</label>
                    <input type="text" class="form-control" disabled>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">Bank Name</label>
                    <input type="text" class="form-control" disabled>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>&nbsp;</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="container bg-white">
            <div class="row bg-dark" rounded>
                <div class="col">
                    <label for="">Enter Amount</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="">Discount</label>
                    <input type="text" class="form-control">
                </div>
                <p>&nbsp;</p>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">Branch</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">Payment Mode</label>
                    <select name="" id="" class="form-control">
                        <option value="">Please Select</option>
                        <option value="">Cash</option>
                        <option value="">Online</option>
                        <option value="">Credit Card</option>
                        <option value="">Debit Card</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">SB A/C No.</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col">
                    <label for="">Bal</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">Cheq. No.</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col">
                    <label for="">Cheq. Dt</label>
                    <input type="date" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">Bank Name</label>
                    <input type="text" class="form-control" Placeholder="Enter Bank name">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">Remarks</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">Loan Status</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="">Effective ROI</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button class="bg-primary rounded border 0">Save</button>
                </div>
            </div>
            </br>
        </div>
        <fieldset class="border p-2">
            <legend class="w-auto"><b>EMI Update</b></legend>
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Sr.No.</th>
                            <th>PayDate</th>
                            <th>Intrest Rs.</th>
                            <th>Processing Rs.</th>
                            <th>Balance Rs.</th>
                            <th>LoanStatus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>10-10-2022</td>
                            <td>20,000</td>
                            <td>2400</td>
                            <td>250000</td>
                            <td>Active</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>10-10-2022</td>
                            <td>20,000</td>
                            <td>2400</td>
                            <td>250000</td>
                            <td>Active</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>10-10-2022</td>
                            <td>20,000</td>
                            <td>2400</td>
                            <td>250000</td>
                            <td>Active</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </fieldset>
    </div>
</div>
@stop