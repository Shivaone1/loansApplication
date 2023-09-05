@extends('adminlte::page')

@section('title', 'Admin/Loan Master')

@section('content_header')
<h1 class="m-0 text-dark">Loan List</h1>
@stop

@section('content')
<!-- Main Content -->
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <button class="mb-2 btn btn-lg btn-success" href="#" data-toggle="modal" data-target="#addModal"><span
                class="fa fa-plus"></span> Create new Loan</button> 
        <a class="mb-2 btn btn-lg btn-primary" href="{{ url('admin/customer') }}"><span
                class="fa fa-plus"></span> Add Customer</a>               
        <!-- Show Customer Details DataTales Example -->
        <div class="shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Customer</th>
                                <th>Loan Detail</th>
                                <th>Payment Detail</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php											
							$i=1;									
						?>
                        @foreach($loan as $c)
                        <tbody>
                            <tr>
                                <td><?php echo $i++;?></td>
                                <td>
                                    <p><small>Name:<strong>{{ $c->cust_fname }}</strong></small>
                                    </p>
                                    <p><small>Contact: <strong>{{ $c->cust_mobile }}</strong></small></p>
                                    <p><small>Address: <strong>{{ $c->current_address_detail }}
                                                {{ $c->current_address_city }}
                                                {{ $c-> current_address_pincode }}</strong></small></p>
                                </td>

                                <td>
                                    <p><small>Reference no: <strong>{{ $c->cust_id }}</strong></small></p>
                                    <p><small>Loan Type : <strong>{{ $c->loan_type}}</strong></small></p>
                                    <p><small>Loan Plan : <strong>{{ $c->loan_scheme}}
                                                <?php echo 'lplan_month'." months".'lplan_interest'."%, ".'lplan_penalty'."%"?></strong>
                                            interest, penalty</small></p>
                                    <p><small>Amount: <strong>{{ $c->loan_amount }}</strong></small></p>
                                    <p><small>Total Payable Amount:
                                            <strong>{{ $c->loan_amount }} {{ $c->loan_scheme }}</strong></small>
                                    </p>
                                    <p><small>Term Payable Amount:
                                            <strong>{{ ($c->loan_amount)-($c->loan_amount*15/100) }}</strong></small></p>
                                    <p><small>Overdue Payable Amount:
                                            <strong>{{ ($c->loan_amount)-(($c->loan_amount)-($c->loan_amount*15/100)) }}</strong></small></p>
                                </td>
                                <td>
                                    <?php 
                                        $pay=rand(1,2);
                                        $res=($pay)-1;                                   
                                        if($res==1){
                                            echo'<span class="btn bg-success">Confirm</span>';                                                                               
                                        }elseif($res==0){
                                            echo'<h3 class="bg-warning btn">Pending</h3>';
                                        }                                   
                                    ?>
                                </td>                                
                                <td>
                                    <?php 
                                        $status="$c->status";
                                        if($status==0){
                                            echo'<span class="btn bg-primary">Request</span>';                                                                               
                                        }elseif($status==1){
                                            echo'<h3 class="bg-success btn">Confirm</h3>';
                                        }elseif($status==2){
                                            echo'<span class="btn bg-pink">Released</span>';
                                        }elseif($status==3){
                                            echo'<span class="btn bg-purple">Completed</span>';
                                        }elseif($status==4){
                                            echo'<span class="btn bg-danger">Denied</span>';
                                        }                                    
                                    ?>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-primary" href="#" data-toggle="modal"
                                        data-target="#viewSchedule{{ $c->loan_id }}">View Payment
                                        Schedule</button>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item bg-warning text-white" href="#" data-toggle="modal"
                                                data-target="#updateloan{{ $c->id }}">Edit</a>
                                            <a class="dropdown-item bg-danger text-white" href="#" data-toggle="modal"
                                                data-target="#deletecustomer{{ $c->id }}">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!-- Update User Modal -->
                            <div class="modal fade" id="updateloan{{ $c->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <form method="POST" action="updateLoan.php">
                                        <div class="modal-content">
                                            <div class="modal-header bg-warning">
                                                <h5 class="modal-title text-white">Edit Loan</h5>
                                                <button class="close" type="button" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">X</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-row">
                                                    <div class="form-group col-xl-6 col-md-6">
                                                        <label>Customer</label>
                                                        <br />
                                                        <input type="hidden" class="form-control"
                                                            value="{{ $c->loan_id }}" name="{{ $c->loan_id }}" />
                                                        <select name="customer" class="form-control" required="required"
                                                            style="width:100%;">
                                                            <option selected>Please Select Customer </option>
                                                            <option value="<?php echo 'customer_id'?>"></option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-xl-6 col-md-6">
                                                        <label>Loan type</label>
                                                        <br />
                                                        <select name="ltype" class="form-control" required="required"
                                                            style="width:100%;">
                                                            <option selected>Please Select Loan Type </option>
                                                            <option value="<?php echo 'ltype_id'?>"></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-xl-6 col-md-6">
                                                        <label>Loan Plan</label>
                                                        <select name="lplan" class="form-control" required="required"
                                                            id="ulplan">
                                                            <option selected>Please Select Loan Plan</option>
                                                            <option value="<?php echo 'lplan_id'?>"></option>
                                                        </select>
                                                        <label>Months[Interest%, Penalty%]</label>
                                                    </div>
                                                    <div class="form-group col-xl-6 col-md-6">
                                                        <label>Loan Amount</label>
                                                        <input type="number" name="loan_amount" class="form-control"
                                                            id="uamount" value="<?php echo 'amount'?>"
                                                            required="required" placeholder="Please Enter Loan Amount" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-9"></div>
                                                    <div class="col-md-3">
                                                        <a id="updateCalculate"
                                                            class="btn btn btn-block form-control bg-primary">EMI
                                                            Calculate</a>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label>Purpose</label>
                                                        <textarea name="purpose" class="form-control"
                                                            style="resize:none; height:100px;"
                                                            required="required"><?php echo 'Please Enter Purpose'?></textarea>
                                                    </div>

                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-xl-4 col-md-4">
                                                        <center><span>Total Payable Amount</span></center>
                                                        <center><span id="utpa"></span></center>
                                                    </div>
                                                    <div class="col-xl-4 col-md-4">
                                                        <center><span>Monthly Payable Amount</span></center>
                                                        <center><span id="umpa"></span></center>
                                                    </div>
                                                    <div class="col-xl-4 col-md-4">
                                                        <center><span>Penalty Amount</span></center>
                                                        <center><span id="upa"></span></center>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="form-row">
                                                    <div class="form-group col-xl-6 col-md-6">
                                                        <label>Status</label>
                                                        <select class="form-control" name="status">

                                                            <option value="0"
                                                                <?php echo (['status']==0)?'selected':''?>>For
                                                                Approval</option>
                                                            <option value="1"
                                                                <?php echo (['status']==1)?'selected':''?>>Approved
                                                            </option>
                                                            <option value="4"
                                                                <?php echo (['status']==4)?'selected':''?>>Denied
                                                            </option>

                                                            <option value="2" readonly="readonly">Released</option>

                                                            <option value="0"
                                                                <?php echo (['status']==0)?'selected':''?>>For
                                                                Approval</option>
                                                            <option value="1"
                                                                <?php echo (['status']==1)?'selected':''?>>Approved
                                                            </option>
                                                            <option value="2"
                                                                <?php echo (['status']==2)?'selected':''?>>Released
                                                            </option>
                                                            <option value="4"
                                                                <?php echo (['status']==4)?'selected':''?>>Denied
                                                            </option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button"
                                                    data-dismiss="modal">Cancel</button>
                                                <button type="submit" name="update" class="btn btn-warning">Update</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Delete Loan Modal -->

                            <div class="modal fade" id="deletecustomer{{ $c->id }}" tabindex="-1"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger">
                                            <h5 class="modal-title text-white">System Information</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">X</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">Are you sure you want to delete this record?</div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button"
                                                data-dismiss="modal">Cancel</button>
                                            <a class="btn btn-danger" href="{{ url('admin/loan-delete/'.$c->id)}}">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- View Payment Schedule -->
                            <div class="modal fade" id="viewSchedule{{ $c->loan_id }}" tabindex="-1"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-info">
                                            <h5 class="modal-title text-white">Payment Schedule</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            
                                            <div class="row">
                                                <div class="col-md-5 col-xl-5">
                                                    <p>Reference No:</p>
                                                    <p><strong>{{ $c->cust_id }}</strong></p>
                                                </div>
                                                <div class="col-md-7 col-xl-7">
                                                    <p>Customer Name:</p>
                                                    <p><strong>XXXXXX</strong></p>
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <center>Days</center>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <center>Days Payment</center>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row">
                                                    <div class="col-sm-6 p-2 pl-5"
                                                        style="border-right: 1px solid black;">
                                                        <strong>0 - 30</strong>
                                                    </div>
                                                    <div class="col-sm-6 p-2 pl-5"><strong>4,50,000</strong>
                                                    </div>
                                                </div>
                                            </div>                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>

        </div>
    </div>
    <!-- End of Main Content -->
</div>
<!-- Add Loan Modal-->
<div class="modal fade" id="addModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form method="POST" action="{{ url('admin/loan-create') }}">
            @csrf
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white">Loan Application</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-xl-6 col-md-6">
                            <label>customer</label>
                            <br />
                            <select name="cust_id" id="cust_id" class="form-control" required="required"
                                style="width:100%;">
                                <option value="" selected>Please Select Customer</option>
                                @foreach($customer as $c)
                                <option value="{{ $c->cust_id }}">{{ $c->cust_id }} : {{ $c->cust_fname }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-xl-6 col-md-6">
                            <label>Loan type</label>
                            <br />
                            <select name="loan_type" id="loan_type" class="form-control" required="required"
                                style="width:100%;">
                                <option value=""selected>Select Your Loan</option>
                                @foreach($loantype as $c)
                                <option value="{{ $c->loan_type_name}}"selected>{{ $c->loan_type_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- <div class="form-row">
                        <div class="form-group">
                            <a class="mb-2 btn btn-lg btn-success" onclick="golditem()"><span class="fa fa-plus">&nbsp;Gold Item</span></a>
                        </div>
                    </div> -->
                    <label for="golddetails">Gold Details</label>
                    <div class="form-row">
                        <div class="input-group col">
                        <span class="input-group-text">1</span>
                            <input type="text" name="gold_type" class="form-control"  title="Please Fill Gold Type" placeholder="Enter Gold Type" required>
                        </div>
                        <div class="input-group col">
                        <span class="input-group-text">2</span>
                        <input type="text" name="gold_name"class="form-control" title="Please Fill Gold Name" placeholder="Enter Gold Name" required>
                        </div>
                        <div class="input-group col">
                        <span class="input-group-text">3</span>
                        <input type="text" name="gold_qnt"class="form-control" title="Please Fill Gold Qnt" placeholder="Enter Gold Qnt" required>
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                    <div class="input-group col" onchange="netwt()">
                        <span class="input-group-text">4</span>
                            <input type="text" name="gold_gross_wt" id="gold_gross_wt" class="form-control" title="Please Fill Gross Wt" placeholder="Gross Wt" required>
                        <span class="input-group-text">gram</span>    
                        </div>
                        <div class="input-group col"onchange="netwt()">
                        <span class="input-group-text">5</span>
                        <input type="text" name="gold_ston_wt" id="gold_ston_wt" class="form-control" title="Please Fill Gold Ston Wt" placeholder="Gold Ston Wt" required>
                        <span class="input-group-text">gram</span>
                        </div>
                        <div class="input-group col">
                        <span class="input-group-text">6</span>
                        <input type="text" name="gold_net_wt" id="gold_net_wt"class="form-control" title="Please Fill Gold Net Wt" placeholder="Gold Net Wt" required>
                        <span class="input-group-text">gram</span>
                        </div>
                    </div>   
                    <hr>
                    <div class="form-row">
                    <div class="input-group col">
                        <span class="input-group-text">></span>
                        <select name="gold_purity" id="gold_purity" class="form-control">
                            <option value=""selected>Select Gold Purity</option>
                            <option value="18">18 Carat</option>
                            <option value="20">20 Carat</option>
                            <option value="22">22 Carat</option>
                            <option value="23">23 Carat</option>
                            <option value="24">24 Carat</option>
                        </select>                          
                        </div>
                        <div class="input-group col">
                        <span class="input-group-text">7</span>
                        <input type="text" name="gold_market_wt"class="form-control" title="Please Fill Gold Market Wt" placeholder="Gold Market Wt" required>
                        <span class="input-group-text">gram</span>
                        </div>
                        <div class="input-group col">
                        <span class="input-group-text">8</span>
                        <input type="text" id="gold_rate" name="gold_rate"class="form-control" title="Please Fill Gold Rate" placeholder="Gold Rate" required>
                        <span class="input-group-text">Rs.</span>
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="remark">Remark</label>
                        <textarea name="gold_remark" id="gold_remark" cols="30" rows="2" class="form-control"></textarea>
                    </div>
                    <hr>
                                     <!-- js gold item -->
                                     <!-- <span id="golditem"></span> -->
                                <!-- <div class="form-row">
                                    <div class="col">
                                        <input type="hidden" name="goldtype" value="" class="form-group">
                                        <input type="hidden" name="goldname" class="form-group">
                                        <input type="hidden" name="qnt" class="form-group">
                                        <input type="hidden" name="grosswt" class="form-group">
                                        <input type="hidden" name="stonwt" class="form-group">
                                        <input type="hidden" name="netwt" class="form-group">
                                        <input type="hidden" name="purity" class="form-group">
                                        <input type="hidden" name="marketwt" class="form-group">
                                        <input type="hidden" name="rate" class="form-group">
                                    </div>                        
                                </div>
                                <script>
                                    function golditem() {
                                        let goldtype = prompt("Please enter Gold Type");
                                        let goldname = prompt("Please enter Gold Name");
                                        let qnt = prompt("Please enter Gold qnt");
                                        let grosswt = prompt("Please enter Gold grosswt");
                                        let stonwt = prompt("Please enter Gold stonwt");
                                        let netwt = prompt("Please enter Gold netwt");
                                        let purity = prompt("Please enter Gold purity");
                                        let marketwt = prompt("Please enter Gold marketwt");
                                        let rate =prompt("Please enter Gold rate");
                                    // document.getElementById("golditem").innerHTML = goldtype.value;                        
                                    }
                                </script>   -->
                                     <!-- end js gold item -->
                    <div class="form-row">
                        <div class="form-group col-xl-6 col-md-6">
                            <label>Loan Scheme</label>
                            <select name="loan_scheme" onchange="scheme()" class="form-control" required="required"
                                id="loan_scheme">
                                <option value="" selected>Please select an option</option>
                                @foreach($loanscheme as $c)
                                <option value="{{ $c->scheme_code }}">{{ $c->scheme_name }}</option>
                                @endforeach                                
                            </select>
                            <!-- <label>Months[Interest%, Penalty%]</label> -->
                        </div>
                        <div class="form-group col-xl-6 col-md-6">
                            <label>Requisition Amount</label>
                            <input type="number" name="loan_amount" class="form-control" id="loan_amount"
                                required="required" placeholder="Requirement Amount" />
                        </div>
                    </div>
                    <div class="row"> 
                        <table class="table" id="#schemetable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Min Amount</th>
                                    <th>Max Amount</th>
                                    <th>Days</th>
                                    <th>Interest Applicable</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <tr>
                                    <td>#</td>
                                    <td><span id="minamount"></span></td>
                                    <td><span id="maxamount"></span></td>
                                    <td><span id="loandays"></span></td>
                                    <td><span id="applicableintrest"></span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-3">
                            <a id="calculate" class="btn btn form-control bg-primary">Calculate</a>
                        </div>
                    </div>
                    <hr>
                    <div class="row">                        
                        <div class="col">
                            <center><span>Eligible Requisition</span></center>
                            <center><span id="eligiblerequisition"></span></center>
                        </div>
                        <div class="col">
                            <center><span>Total Payable Amount</span></center>
                            <center><span id="totalpayamount"></span></center>
                        </div>
                        <div class="col">
                            <center><span>Term Payable Amount</span></center>
                            <center><span id="monthlyamount"></span></center>
                        </div>
                        <div class="col">
                            <center><span>Extra Charge Amount</span></center>
                            <center><span id="penaltyamount"></span></center>
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="form-group col-xl col-md">
                            <label>Purpose</label>
                            <textarea name="loan_purpose" class="form-control" style="resize:none; height:100px;"
                                required="required"></textarea>
                        </div>
                    </div>                    
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="apply" class="btn btn-primary">Apply</a>
                </div>
            </div>
        </form>
    </div>
</div>
 <script>
        function netwt(){
        var gross = parseFloat(document.getElementById("gold_gross_wt").value);
        var ston = parseFloat(document.getElementById("gold_ston_wt").value);
        var net = parseFloat(gross - ston);
        document.getElementById("gold_net_wt").value = net;                       
        }                        
        </script>
<script>

function scheme(){
    var loan_scheme = document.getElementById("loan_scheme").value;        
        let loandays = "0 - 30";        
    if(loan_scheme=="BUL"){   
        let minamount = parseInt('200000');
        let maxamount = parseInt('1000000');
        let loanintrest = parseInt('11');   
        document.getElementById('minamount').innerHTML=minamount;
        document.getElementById('maxamount').innerHTML=maxamount;
        document.getElementById('loandays').innerHTML=loandays;
        document.getElementById('applicableintrest').innerHTML=loanintrest+'%';
        let calculate = document.getElementById("calculate");
        calculate.addEventListener("click", function() {
        let loan_amount = parseInt(document.getElementById("loan_amount").value);
        let totalloan = loan_amount + loan_amount*loanintrest/100;
        let loan_penalty = totalloan * 18 / 100;
        let netwt= parseFloat(document.getElementById("gold_net_wt").value);
        let goldrate= parseFloat(document.getElementById("gold_rate").value);
        let totalrequision = parseFloat(netwt * goldrate);     
        document.getElementById("eligiblerequisition").innerHTML = totalrequision;   
        document.getElementById("totalpayamount").innerHTML = totalloan;
        document.getElementById("monthlyamount").innerHTML = totalloan / 6;
        document.getElementById("penaltyamount").innerHTML = loan_penalty;  
        });
        
    }else if(loan_scheme=="BPL"){
        let minamount = parseInt('100000');
        let maxamount = parseInt('1000000');
        let loanintrest = "12.50";
        document.getElementById('minamount').innerHTML=minamount;
        document.getElementById('maxamount').innerHTML=maxamount;
        document.getElementById('loandays').innerHTML=loandays;
        document.getElementById('applicableintrest').innerHTML=loanintrest+'%';
        let add = document.getElementById("calculate");
        add.addEventListener("click", function() {
        let loan_amount = parseInt(document.getElementById("loan_amount").value);
        let totalloan = loan_amount + loan_amount*loanintrest/100;
        let loan_penalty = totalloan * 18 / 100;
        document.getElementById("totalpayamount").innerHTML = totalloan;
        document.getElementById("monthlyamount").innerHTML = totalloan / 6;
        document.getElementById("penaltyamount").innerHTML = loan_penalty;  
        });          
    }else if(loan_scheme=="BAL"){
        let minamount = parseInt('3000');
        let maxamount = parseInt('1000000');
        let loanintrest = "14";
        document.getElementById('minamount').innerHTML=minamount;
        document.getElementById('maxamount').innerHTML=maxamount;
        document.getElementById('loandays').innerHTML=loandays;
        document.getElementById('applicableintrest').innerHTML=loanintrest+'%';
        let add = document.getElementById("calculate");
        add.addEventListener("click", function() {
        let loan_amount = parseInt(document.getElementById("loan_amount").value);
        let totalloan = loan_amount + loan_amount*loanintrest/100;
        let loan_penalty = totalloan * 18 / 100;
        document.getElementById("totalpayamount").innerHTML = totalloan;
        document.getElementById("monthlyamount").innerHTML = totalloan / 6;
        document.getElementById("penaltyamount").innerHTML = loan_penalty;  
        });        
    }else{
        alert(loan_scheme);  
    }
    // // Print Details
    //     let add = document.getElementById("calculate");
    //     add.addEventListener("click", function() {
    //     let minamount = parseInt(document.getElementById("loan_scheme").value);    
    //     let loan_amount = parseInt(document.getElementById("loan_amount").value);
    //     let totalloan = loan_amount + minamount;
    //     let loan_penalty = totalloan * 6 / 100;
    //     document.getElementById("totalpayamount").innerHTML = (loan_amount + minamount);
    //     document.getElementById("monthlyamount").innerHTML = loan_amount / minamount;
    //     document.getElementById("penaltyamount").innerHTML = loan_penalty;
    //     });  
}
</script>

@stop