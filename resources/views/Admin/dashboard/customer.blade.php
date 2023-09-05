@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
<h1 class="m-0 text-dark"><a href="{{ url('admin/addcustomer')}}"><i class="fa fa-plus-square"></i></a>&nbsp;&nbsp;<a href="{{ url('admin/customerold') }}">
        <i class="fa fa-file-alt"></i></a>&nbsp;&nbsp; <a href="{{ url('admin/deletedcustomer') }}"><i class="fa fa-trash-alt text-danger"></i></a> <a class="mb-2 btn btn-lg btn-success" href="{{ url('admin/loan-master') }}"><i class="fa fa-plus">&nbsp;Create Loan</i></a>
</h1>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form action="" method="post">
            @csrf
            <div class="row">
                <div class="col">
                    <input type="search" placeholder="Search By Customer ID, Name, Pan No., AADHAR No., Mobile No etc." name="search" value="{{ old('search') }}" class="form-control rounded">
                </div>
                <div class="col-auto">
                    <button class="btn btn-primary rounded d-flex"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
        <div class="col-md-4"></div>
    </div>

    @stop

    @section('content')
    <div class="row">
        <div class="text-center bg-success col-md-4 rounded-pill">{!! \Session::get('success') !!}</div>
        <div class="col-12">
            <h1>Customer Details</h1>
            <table class="table table-striped" Method="POST">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Customer ID</th>
                        <th>Customer Name</th>
                        <th>Mobile</th>
                        <th>Email Id</th>
                        <th>KYC</th>
                        <th>Create Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
                $s = 1;
                ?>
                @foreach($data as $c)
                <tbody class="bg-white">
                    <tr>
                        <td>{{ $s++ }}</td>
                        <td>{{ $c->cust_id }}</td>
                        <td>{{ $c->cust_fname }} &nbsp;{{ $c->cust_mname }}&nbsp;{{ $c->cust_lname }}</td>
                        <td>{{ $c->cust_mobile }}</td>
                        <td>{{ $c->cust_email_address }}</td>
                        <td><b>Aadhar : </b>{{ $c->cust_aadharno }}<br><b>Pan : </b> {{ $c->cust_panno }}</td>
                        <td>{{ date('d,M-Y',strtotime($c->created_at)) }}</td>
                        <td><a href="{{ url('admin/customer/'.$c->id)}}"><i class="fas fa-fw fa-eye"></i></a><a href="{{ url('admin/customer/edit/'.$c->id)}}"><i class="fas fa-fw fa-pen-alt text-green"></i></a><a href="{{ url('admin/customer/delete/'.$c->id) }}" onclick="return confirm('Are you sure you want to delete this Record ?')" ;><i class="fas fa-fw fa-trash-alt text-red"></i></a></td>
                    </tr>
                </tbody>
                @endforeach
                <div class="col-md-12">
                    {{ $data->appends(Request::all()) }}
                    <!-- {{ $data->links(); }} -->
                </div>
            </table>
        </div>
    </div>
</div>
@stop