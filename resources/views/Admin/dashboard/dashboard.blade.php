@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 class="m-0 text-dark"><b>Dashboard</b></h1>
@stop

@section('content')
<!-- <div class="row">
    <div class="col-12">
        <form action="#" method="get">
            <div class="bg-light text-right rounded">
                <input type="button" class="bg-primary border-0 rounded-pill" name="customer_history_details"
                    value="Current(0-30)days">
                <input type="button" class="bg-secondary border-0 rounded-pill" name="customer_history_details"
                    value="Current(30-60)days">
                <input type="button" class="bg-pink border-0 rounded-pill" name="customer_history_details"
                    value="Current(60-90)days">
                <input type="button" class="bg-danger border-0 rounded-pill" name="customer_history_details"
                    value="Current(90-120)days">
            </div>
        </form>
    </div>
</div> -->
<p>&nbsp;</p>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <a href="{{ url('admin/customer')}}" class="anchor-card">
                    <div class="card tooltip-sec" data-title="Total customers">
                        <div class="card-body">
                            <div class="row">
                                @php
                                $data = DB::table('customers')->select("id")->get()->count();
                                @endphp
                                <div class="col">
                                    <h5 class="card-title">{{ $data }}</h5>
                                    <p class="card-text">
                                        Total customers
                                    </p>
                                </div>

                                <div class="col-auto">
                                    <div class="dashboard-icon">
                                        <i class="far fa-address-book"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="" class="anchor-card">
                    <div class="card tooltip-sec" data-title="Total Appointments">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">20</h5>
                                    <p class="card-text">
                                        Total Approval
                                    </p>
                                </div>
                                <div class="col-auto">
                                    <div class="dashboard-icon">
                                        <i class="far fa-calendar-check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="" class="anchor-card">
                    <div class="card tooltip-sec" data-title="Total Booking">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">30</h5>
                                    <p class="card-text">
                                        Pending Approval
                                    </p>
                                </div>
                                <div class="col-auto">
                                    <div class="dashboard-icon">
                                        <i class="far fa-user"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="" class="anchor-card">
                    <div class="card tooltip-sec" data-title="Total Loans">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">10</h5>
                                    <p class="card-text">
                                        Loan Disbursal
                                    </p>
                                </div>
                                <div class="col-auto">
                                    <div class="dashboard-icon">
                                        <i class="fas fa-Loan-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="" class="anchor-card">
                    <div class="card tooltip-sec" data-title="Total Enquiry">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">1000</h5>
                                    <p class="card-text">
                                        Accounts
                                    </p>
                                </div>
                                <div class="col-auto">
                                    <div class="dashboard-icon">
                                        <i class="far fa-comment-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-100"></div>
            <div class="col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-hding">Customer</h5>
                        <div class="row">
                            <div class="col-6">
                                <p class="dashboard-number">0</p>
                                <p class="present-team">Today's customer</p>
                            </div>
                            <div class="col-6">
                                <p class="dashboard-number">0</p>
                                <p class="present-team">Today's customers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-hding">Customer Loan</h5>
                        <div class="row">
                            <div class="col-6">
                                <p class="dashboard-number">0</p>
                                <p class="present-team">Today's Customer</p>
                            </div>
                            <div class="col-6">
                                <p class="dashboard-number">0</p>
                                <p class="present-team">Today's Customer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-hding">Loan Summary</h5>
                        <div class="row">
                            <div class="col-6">
                                <p class="dashboard-number">0</p>
                                <p class="present-team">Open Loan</p>
                            </div>
                            <div class="col-6">
                                <p class="dashboard-number">0</p>
                                <p class="present-team">Close Loan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-hding">Pending Loans</h5>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="table-responsive">
                                    <table class="table table-design">
                                        <thead>
                                            <tr>
                                                <th>Booking ID</th>
                                                <th>Booking Date</th>
                                                <th>Customer Name</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>BASANT00012</td>
                                                <td>5/10/2022</td>
                                                <td>Shiva singh</td>
                                                <td>
                                                    <a href="#" class="cr-btn">Soft Copy</a>
                                                    <a href="#">Received</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>BASANT00013</td>
                                                <td>5/10/2022</td>
                                                <td>Shiva singh</td>
                                                <td>
                                                    <a href="#" class="cr-btn">Soft Copy</a>
                                                    <a href="#">Received</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>BASANT00013</td>
                                                <td>5/10/2022</td>
                                                <td>Shiva singh</td>
                                                <td>
                                                    <a href="#" class="cr-btn">Soft Copy</a>
                                                    <a href="#">Received</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <a href="#" class="breadcrump-addbtn">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-hding">Loans Disbursed</h5>
                        <div class="row">
                            <div class="col">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Loan ID</th>
                                                <th>Loan Date</th>
                                                <th>Customer Name</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>BASANT00012</td>
                                                <td>5/10/2022</td>
                                                <td>shiva Singh</td>
                                                <td>
                                                    <a href="#" class="cr-btn">Soft Copy</a>
                                                    <a href="#">Received</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>BASANT00013</td>
                                                <td>5/10/2022</td>
                                                <td>shiva Singh</td>
                                                <td>
                                                    <a href="#" class="cr-btn">Soft Copy</a>
                                                    <a href="#">Received</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>BASANT00014</td>
                                                <td>5/10/2022</td>
                                                <td>shiva Singh</td>
                                                <td>
                                                    <a href="#" class="cr-btn">Soft Copy</a>
                                                    <a href="#">Received</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <a href="#" class="breadcrump-addbtn">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @stop