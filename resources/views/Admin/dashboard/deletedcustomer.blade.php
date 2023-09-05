@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1 class="m-0 text-dark"><a href="{{ url('admin/customer')}}"><i class="fas fa-arrow-alt-circle-left">Back</i></a></h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Customer Trash Details</h1>
            <table class="table table-striped" Method="POST">
                <thead>
                    <tr>
                    <th>Sr.no</th>
                        <th>Customer Name</th>
                        <th>Mobile</th>
                        <th>Email Id</th>
                        <th>KYC</th>
                        <th>Create Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @foreach($data as $c)
                <tbody>
                    <tr>
                        <td>{{ $c->id }}</td>
                        <td>{{ $c->cust_fname }}&nbsp;{{ $c->cust_mname }}&nbsp;{{ $c->cust_lname }}</td>
                        <td>{{ $c->cust_mobile }}</td>
                        <td>{{ $c->cust_email_address }}</td>
                        <td><b>Aadhar No.: </b>{{ $c->cust_aadharno }}<br><b>Pan No.: </b>{{ $c->cust_panno }}</td>
                        <td>{{ date('d,M-Y',strtotime($c->created_at)) }}</td>
                        <td><a href="{{ url('admin/deletedcustomer/pdelete/'.$c->id)}} "onclick="return confirm('Are you sure you want to Permanent deleted this Record ?')";><i class="fas fa-trash-alt text-red">&nbsp;Permanent</i></a>&nbsp;<a href="{{ url('admin/deletedcustomer/restore/'.$c->id) }}"onclick="return confirm('Are you sure you want to Restore this deleted ?')";><i class="fas fa-fw fa-trash-alt">&nbsp;Restore</i></a></td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
@stop
