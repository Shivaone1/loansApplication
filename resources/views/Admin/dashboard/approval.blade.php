@extends('adminlte::page')

@section('title', 'Admin/Approval')

@section('content_header')
<h1 class="m-0 text-dark">Approval</h1>
@stop

@section('content')

@if (\Session::has('success'))
<div class="alert alert-success">{!! \Session::get('success') !!}</div>
@endif
<div class="row">
    <div class="col">
        <div class="container">
            <h1 class="bg-orange rounded text-center" style="font-size:25px">Search Details</h1>
            <div class="container shadow-lg p-3 mb-5 bg-body rounded">
                <form>
                    <div class="row">
                        &nbsp;&nbsp;
                        <div class="col">
                            <label for="apname">Applicant Name</label>
                            <select class="form-control form-select-lg mb-3 rounded"
                                aria-label=".form-select-lg example">
                                <option selected>Please Select Applicant Name </option>
                                <option value="1">Shiva Singh_Basant021212121_gold_ring_24carat_06/10/2022</option>
                                <option value="2">Priti Singh_Basant021212121_gold_ring_24carat_06/10/2022</option>
                                <option value="3">Shivani Singh_Basant021212121_gold_ring_24carat_06/10/2022</option>
                                <option value="3">Ravi Rao Singh_Basant021212121_gold_ring_24carat_06/10/2022</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="apname">Loan ID</label>
                            <input type="text" class="form-control" placeholder="Enter Applicant Name" name="apname">
                        </div>
                        <div class="col">
                            <label for="loanid">Form No.</label>
                            <input type="text" class="form-control" placeholder="Enter Loan ID" name="loanid">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="apname">Member ID</label>
                            <input type="text" class="form-control" placeholder="Enter Member ID" name="apname">
                        </div>
                        <div class="col">
                            <label for="loanid">Date</label>
                            <input type="date" class="form-control" placeholder="Enter Form No." name="loanid">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="apname">Branch</label>
                            <input type="text" class="form-control" placeholder="Enter Branch" name="apname">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="apname">Previous Loan</label>
                            <input type="text" class="form-control" placeholder="Enter Loan Amount that already taken*"
                                name="apname">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="container">
            <h1 class="bg-pink rounded text-center" style="font-size:25px">Personal Info</h1>
            <div class="container shadow-lg p-3 mb-5 bg-body rounded">
                <div class="row">
                    <div class="col">
                        <label for="apname">Holder's DOB</label>
                        <input type="date" class="form-control" placeholder="Enter Applicant Name" name="apname">
                    </div>
                    <div class="col">
                        <label for="loanid">Loan Holder's Age</label>
                        <input type="text" class="form-control disable" placeholder="35" name="loanid">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="apname">Gurdian Name</label>
                        <input type="text" class="form-control" placeholder="Enter Applicant Gurdian Name"
                            name="apname">
                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <label for="apname">Address</label>
                        <textarea class="form-control" rows="4" cols="">Plase Enter Applicant Full Address</textarea>

                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <label for="apname">Pin Code</label>
                        <input type="text" class="form-control" rows="4" cols=""
                            placeholder="Plase Enter Address Pin Code"></input>

                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <label for="apname">Phone No.</label>
                        <input type="text" class="form-control" placeholder="Enter Applicant Name" name="apname">
                    </div>
                    <div class="col">
                        <label for="loanid">Gender</label><br>
                        <input type="radio" name="gender" value="Male"> Male
                        <input type="radio" name="gender" value="Female"> Female
                        <input type="radio" name="gender" value="transmale"> Others
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h1 class="bg-green rounded text-center" style="font-size:25px">Scheme Details</h1>
            <div class="container shadow-lg p-3 mb-5 bg-body rounded">
                <div class="row">
                    <div class="col">
                        <label for="apname">Product Name</label>
                        <!-- <input type="text" class="form-control" placeholder="Enter Product Name" name="apname"> -->
                        <select name="" id="" class="form-control">
                            <option value="" selected>Please Select Product</option>
                            <option value="">Gold Ring</option>
                            <option value="">Gold NEC</option>
                            <option value="">Gold BRASLET</option>
                        </select>
                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <label for="apname">Loan Term</label>
                        <input type="text" class="form-control" placeholder="Enter Loan Term" name="apname">
                    </div>
                    <div class="col">
                        <label for="apname">Term</label>
                        <input type="text" class="form-control" placeholder="Enter Term Name" name="apname">
                    </div>
                    <div class="col">
                        <label for="apname">Mode</label>
                        <input type="text" class="form-control" placeholder="Enter Mode" name="apname">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="apname">Loan Amount</label>
                        <input type="text" class="form-control" placeholder="Enter Loan Term" name="apname">
                    </div>
                    <div class="col">
                        <label for="apname">ROI</label>
                        <input type="text" class="form-control" placeholder="Enter Term Name" name="apname">
                    </div>
                    <div class="col">
                        <label for="apname">*EMI</label>
                        <input type="text" class="form-control" placeholder="Enter Mode" name="apname">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="apname">Intrest Type</label>
                        <!-- <input type="text" class="form-control" placeholder="Enter Loan Term" name="apname"> -->
                    </div>
                    <div class="col">
                        <!-- <label for="apname">ROI</label> -->
                        <input type="text" class="form-control" placeholder="REDUCING" name="apname">
                    </div>
                    <div class="col">
                        <label for="apname">Loan *EMI Breakup</label>
                        <!-- <input type="text" class="form-control" placeholder="Enter Mode" name="apname"> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="container">
            <h1 class="bg-secondary rounded text-center" style="font-size:25px">Deductions</h1>
            <div class="container shadow-lg p-3 mb-5 bg-body rounded">
                <div class="row">
                    <div class="col">
                        <label for="fee">Processing Fee</label>
                        <input type="text" class="form-control" name="fee" value="">
                    </div>
                    <div class="col">
                        <label for="fee">GST Amount</label>
                        <input type="text" class="form-control" name="fee" value="">
                    </div>
                    <div class="col">
                        <label for="fee">CGST</label>
                        <input type="text" class="form-control" name="fee" value="">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="fee">Legal Amt.</label>
                        <input type="text" class="form-control" name="fee" value="">
                    </div>
                    <div class="col">
                        <label for="fee">Insurance Amt.</label>
                        <input type="text" class="form-control" name="fee" value="">
                    </div>
                    <div class="col">
                        <label for="fee">SGST</label>
                        <input type="text" class="form-control" name="fee" value="">
                    </div>
                </div>
            </div>
            <div class="container">

                <style>
                body {
                    font-family: Arial;
                }

                /* Style the tab */
                .tab {
                    overflow: hidden;
                    border: 1px solid #ccc;
                    background-color: #f1f1f1;
                }

                /* Style the buttons inside the tab */
                .tab button {
                    background-color: inherit;
                    float: left;
                    border: none;
                    outline: none;
                    cursor: pointer;
                    padding: 14px 16px;
                    transition: 0.3s;
                    font-size: 17px;
                }

                /* Change background color of buttons on hover */
                .tab button:hover {
                    background-color: #ddd;
                }

                /* Create an active/current tablink class */
                .tab button.active {
                    background-color: #ccc;
                }

                /* Style the tab content */
                .tabcontent {
                    display: none;
                    padding: 6px 12px;
                    border: 1px solid #ccc;
                    border-top: none;
                }
                </style>

                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, '1stguarantor')">1st Guarantor</button>
                    <button class="tablinks" onclick="openCity(event, '2ndguarantor')">2nd Guarantor</button>
                    <button class="tablinks" onclick="openCity(event, '3rdguarantor')">3rd Guarantor</button>
                </div>

                <div id="1stguarantor" class="tabcontent">
                    <div class="col">
                        <label for="1stguarantor">Guarantor Name</label>
                        <input class="form-control" type="text" name="1stguarantor" placeholder="1st Guarantor Name">
                    </div>
                    <div class="col">
                        <label for="1stguarantor">Mobile No.</label>
                        <input class="form-control" type="text" name="1stguarantor" placeholder="Enter Mobile Number">
                    </div>
                    <div class="col">
                        <label for="1stguarantor">Address</label>
                        <textarea class="form-control" rows="4" cols="">Please Enter 1st Guarantor Address</textarea>
                    </div>
                </div>

                <div id="2ndguarantor" class="tabcontent">
                    <div class="col">
                        <label for="2ndguarantor">Guarantor Name</label>
                        <input class="form-control" type="text" name="2ndguarantor" placeholder="2nd Guarantor Name">
                    </div>
                    <div class="col">
                        <label for="2ndguarantor">Mobile No.</label>
                        <input class="form-control" type="text" name="2ndguarantor" placeholder="Enter Mobile Number">
                    </div>
                    <div class="col">
                        <label for="2ndguarantor">Address</label>
                        <textarea class="form-control" rows="4" cols="">Please Enter 2nd Guarantor Address</textarea>
                    </div>
                </div>
                <div id="3rdguarantor" class="tabcontent">
                    <div class="col">
                        <label for="3rdguarantor">Guarantor Name</label>
                        <input class="form-control" type="text" name="3rdguarantor" placeholder="3rd Guarantor Name">
                    </div>
                    <div class="col">
                        <label for="3rdguarantor">Mobile No.</label>
                        <input class="form-control" type="text" name="3rdguarantor" placeholder="Enter Mobile Number">
                    </div>
                    <div class="col">
                        <label for="3rdguarantor">Address</label>
                        <textarea class="form-control" rows="4" cols="">Please Enter 3rd Guarantor Address</textarea>
                    </div>
                </div>

            </div>
        </div>
        <p>&nbsp;</p>
        <div class="col">
            <div class="row">
                <div class="col">
                    <form action="{{ url('admin/approval/approved') }}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        <button name="Approved" class="form-control bg-success"
                            onclick="return confirm('Are You Want To Approved This One... ?')">Approved </button>
                    </form>
                </div>
                <div class="col">
                    <form action="{{ url('admin/approval/notapproval') }}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        <button name="Approved" class="form-control bg-danger"
                            onclick="return confirm('Are You Want To Disapproval This One... ?')">Don't
                            Approved</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
@stop