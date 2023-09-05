@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1 class="m-0 text-dark"><a href="{{ url('admin/addservices')}}"><i class="fa fa-plus-square"></i></a></h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            
            <h1>Product Details</h1>
            <table class="table table-striped" Method="POST">
                   
                <thead>
                    <tr>
                        <th>Sr.no</th>
                        <th>Product Name</th>
                        <th>Product Type </th>
                        <th>Product Purity</th>
                        <th>Product Current Rs.</th>
                        <th>Product Offers Rs.</th>
                        <th>Product Photo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @foreach($data as $c)
                <tbody>
                    <tr>
                        <td>{{ $c->id }}</td>
                        <td>{{ $c->product_name }}</td>
                        <td>{{ $c->product_type }}</td>
                        <td>{{ $c->product_purity }}</td>
                        <td>{{ $c->product_current_value }}/gram</td>
                        <td>{{ $c->product_offer_rs }}/gram</td>
                        <td><img src="{{ asset($c->product_img)}}" class="img-circle" width="65px"></td>
                        <td><a href="{{ url('admin/services/edit/'.$c->id)}}"><i class="fas fa-fw fa-pen-alt text-green"></i></a> <a href="{{ url('admin/services/delete/'.$c->id) }}"onclick="return confirm('Are you sure you want to delete this Record ?')";><i class="fas fa-fw fa-trash-alt text-red"></i></a></td>
                    </tr>
                </tbody>
                @endforeach
                {{ $data->links(); }}
            </table>
        </div>
    </div>
@stop
