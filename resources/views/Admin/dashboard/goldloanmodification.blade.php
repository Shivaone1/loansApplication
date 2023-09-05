@extends('adminlte::page')

@section('title', 'Admin/Gold Loan Modification')

@section('content_header')
<h1 class="m-0 text-dark">Gold Loan Modification</h1>
@stop

@section('content')
<div class="row">
    <div class="col">
        <h5 class="text-center bg-primary rounded">Customer</h5>
        <div class="container shadow p-3">
            <div class="row">
                <div class="col">
                    <label for="applicant_name">Applicant Name</label>
                    <input type="text" class="form-control" name="applicant_name">
                </div>
                <div class="col">
                    <label for="applicant_mobile">Applicant Mobile</label>
                    <input type="text" class="form-control" name="applicant_mobile">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="loan_id">Loan ID</label>
                    <input type="text" class="form-control" name="loan_id">
                </div>
                <div class="col">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" name="date">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="member_id">Member ID</label>
                    <input type="text" class="form-control" name="member_id">
                </div>
                <div class="col">
                    <label for="branch">Branch</label>
                    <select name="branch" id="branch" class="form-control">
                        <option value="" selected>Please Select Branch</option>
                        <option value="">Branch 1</option>
                        <option value="">Branch 2</option>
                        <option value="">Branch 3</option>
                        <option value="">Branch 4</option>
                        <option value="">Branch 5</option>
                    </select>
                </div>
            </div>
        </div>
        <span>&nbsp;</span>
        <h5 class="text-center bg-primary rounded">Personal Info</h5>
        <div class="container shadow p-3">
            <div class="row">
                <div class="col">
                    <label for="gurdian_name">Gurdian Name</label>
                    <input type="text" class="form-control" name="gurdian_name">
                </div>
                <div class="col">
                    <label for="address">Address</label>
                    <textarea name="address" id="address" cols="30" rows="2" class="form-control"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="holders_dob">Holder's DOB</label>
                    <input type="date" name="holders_dob" id="holders_dob" class="form-control">
                </div>
                <div class="col">
                    <label for="pincode">Pin Code</label>
                    <input type="text" class="form-control" name="pincode">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="mobile_number">Phone No.</label>
                    <input type="text" name="mobile_number" id="mobile_number" class="form-control">
                </div>
                <div class="col">
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender" class="form-control">
                        <option value="" selected>Please Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Other's</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <h5 class="text-center bg-primary rounded">Deductions</h5>
        <div class="container shadow p-3">
            <div class="row">
                <div class="col">
                    <label for="prossessing_fee">Prossesing Fee</label>
                    <input type="text" class="form-control" name="prossessing_fee">
                </div>
                <div class="col">
                    <label for="gst_amt">GST Amount</label>
                    <input type="text" class="form-control" name="gst_amt">
                </div>
                <div class="col">
                    <label for="cgst">CGST</label>
                    <input type="text" class="form-control" name="cgst">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="legal_amt">Legal Amt</label>
                    <input type="text" class="form-control" name="legal_amt">
                </div>
                <div class="col">
                    <label for="insurance_fee">Insurance Fee</label>
                    <input type="text" class="form-control" name="insurance_fee">
                </div>
                <div class="col">
                    <label for="sgst">SGST</label>
                    <input type="text" class="form-control" name="sgst">
                </div>
            </div>
        </div>
        <span>&nbsp;</span>
        <h5 class="text-center bg-primary rounded">Gold Item</h5>
        <div class="container shadow p-3">
            <div class="row">
                <div class="col"><label for="material">Material</label></div>

                <div class="col">
                    <select name="material" id="material" class="form-control">
                        <option value="" selected>Please Select Material</option>
                        <option value="gold_item">Gold Item</option>
                        <option value="silver_item">Silver Item</option>
                    </select>
                </div>
                <div class="col">
                    <input type="text" name="material" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="type_of_item">Type of Item</label>
                    <select name="item_type" id="item_type" class="form-control">
                        <option value="" selected>Please Select</option>
                        <option value="item">Item</option>
                        <option value="item">Item</option>
                        <option value="item">Item</option>
                        <option value="item">Item</option>
                        <option value="item">Item</option>
                        <option value="item">Item</option>
                    </select>
                </div>

                <div class="col">
                    <label for="gold_item">Gold Item</label>
                    <select name="gold_item" id="gold_item" class="form-control">
                        <option value="" selected>Please Select</option>
                        <option value="">Goid Item</option>
                        <option value="">Goid Item</option>
                        <option value="">Goid Item</option>
                        <option value="">Goid Item</option>
                        <option value="">Goid Item</option>
                    </select>
                </div>
                <div class="col">
                    <label for="qnt">Qnt</label>
                    <input type="text" class="form-control" name="qnt">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="gross_wt">Gross Wt</label>
                    <input type="text" class="form-control" name="gross_wt">
                </div>

                <div class="col">
                    <label for="ston_wt">Ston Wt</label>
                    <input type="text" class="form-control" name="ston_wt">
                </div>
                <div class="col">
                    <label for="net_wt">Net wt</label>
                    <input type="text" class="form-control" name="net_wt">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="purity">Purity</label>
                    <select name="purity" id="purity" class="form-control">
                        <option value="" selected>Please Select Purity</option>
                        <option value="">20 CARAT</option>
                        <option value="">22 CARAT</option>
                        <option value="">23 CARAT</option>
                        <option value="">24 CARAT</option>
                    </select>
                </div>

                <div class="col">
                    <label for="market_value">Market Wt</label>
                    <input type="text" class="form-control" name="market_value">
                </div>
                <div class="col">
                    <label for="rate">Rate</label>
                    <input type="text" class="form-control" name="rate">
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <label for="remark">Remark</label>
                    <input type="text" class="form-control" name="remark">
                </div>
            </div>
            <div class="row">
                <div class="col text-right">
                    <input type="button" name="gold_item" value="Save" class="bg-primary rounded border 0">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="container shadow-lg p-3 mb-5 bg-body rounded">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Item</th>
                    <th>Nos</th>
                    <th>Gross Wt.</th>
                    <th>Net Wt.</th>
                    <th>Rate</th>
                    <th>Market Value</th>
                    <th>Remarks</th>
                    <th>Purity</th>
                    <th>Ston Wt.</th>
                    <th>Eligible Amount</th>
                    <th>Per Gram Rate</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Bangles</td>
                    <td>2</td>
                    <td>20</td>
                    <td>18</td>
                    <td>65400</td>
                    <td>65400</td>
                    <td>NA</td>
                    <td>22 CARAT</td>
                    <td>2</td>
                    <td>65400</td>
                    <td>3500</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ring</td>
                    <td>2</td>
                    <td>20</td>
                    <td>18</td>
                    <td>64400</td>
                    <td>67400</td>
                    <td>NA</td>
                    <td>22 CARAT</td>
                    <td>2</td>
                    <td>64400</td>
                    <td>3500</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>BRASLET</td>
                    <td>2</td>
                    <td>20</td>
                    <td>18</td>
                    <td>50300</td>
                    <td>50300</td>
                    <td>NA</td>
                    <td>22 CARAT</td>
                    <td>2</td>
                    <td>50300</td>
                    <td>3500</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Bangles</td>
                    <td>2</td>
                    <td>20</td>
                    <td>18</td>
                    <td>63300</td>
                    <td>63300</td>
                    <td>NA</td>
                    <td>22 CARAT</td>
                    <td>2</td>
                    <td>63300</td>
                    <td>3500</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>BRASLET</td>
                    <td>2</td>
                    <td>20</td>
                    <td>18</td>
                    <td>63500</td>
                    <td>63500</td>
                    <td>NA</td>
                    <td>22 CARAT</td>
                    <td>2</td>
                    <td>63500</td>
                    <td>3500</td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col">&nbsp;</div>
    <div class="col">
        <div class="container">
            <h5 class="text-center bg-primary rounded">Scheme Details</h5>
            <div class="container shadow-lg p-3 mb-5 bg-body rounded">
                <form action="">
                    <div class="row">
                        <div class="col">
                            <label for="product_name">Product Name</label>
                            <input type="text" class="form-control" name="product_name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="loan_amount">Loan Amount</label>
                            <input type="text" class="form-control" name="loan_amount">
                        </div>
                        <div class="col">
                            <label for="intrest_type">Intrest Type</label>
                            <input type="text" class="form-control" name="intrest_type">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="loan_term">Loan Term</label>
                            <input type="text" class="form-control" name="loan_term">
                            <!-- <select name="loan_term" id="loan_term">
                                <option value=""selected>Please Select Loan Term</option>
                                <option value="">60</option>                                
                                <option value="">120</option>
                                <option value="">180</option>
                                <option value="">365</option>
                            </select> -->
                        </div>
                        <div class="col">
                            <label for="term">Term</label>
                            <input type="text" class="form-control" name="term">
                        </div>
                        <div class="col">
                            <label for="mode">Mode</label>
                            <input type="text" class="form-control" name="mode">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="total_qnt">Total Qnt</label>
                            <input type="text" class="form-control" name="total_qnt">
                        </div>
                        <div class="col">
                            <label for="gross_wt">Gross Wt.</label>
                            <input type="text" class="form-control" name="gross_wt">
                        </div>
                        <div class="col">
                            <label for="net_wt">Net Wt</label>
                            <input type="text" class="form-control" name="net_wt">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="market_value">Market Value</label>
                            <input type="text" class="form-control" name="market_value">
                        </div>
                        <div class="col">
                            <label for="eligibale_amount">Eligible Amount</label>
                            <input type="text" class="form-control" name="eligible_amount">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="emi_amount">EMI Amount</label>
                            <input type="text" class="form-control" name="emi_amount">
                        </div>
                        <div class="col">
                            <label for="ltv_amount">LTV Amount</label>
                            <input type="text" class="form-control" name="ltv_amount">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@stop