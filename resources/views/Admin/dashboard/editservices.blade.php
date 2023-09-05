@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
<h1 class="m-0 text-dark"><a href="{{ url('admin/services')}}"><i class="fas fa-arrow-alt-circle-left">&nbsp;Back</i></a></h1>
@stop

@section('content')

<div class="row">
    <div class="col-12">
        @foreach($data as $c)
        <form action="{{ url('admin/services/update/'.$c->id)}}" class="was-validated" enctype="multipart/form-data" Method="post">
            @csrf
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="product_name">Product Name</label>
                    
                    <input type="text" class="form-control" id="product_name" placeholder="Enter Product Name"
                        name="product_name" value="{{ $c->product_name }}" required>
                        
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="col-md-6 form-group">
                    <label for="product_type">Product Type</label>
                    <input type="text" class="form-control" id="product_type" value="{{ $c->product_type }}" placeholder="Enter Product type" name="product_type" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="product_purity">Product Purity</label>
                    <input type="text" class="form-control" id="product_purity" value="{{ $c->product_purity }}" placeholder="Enter Product Purity" name="product_purity"
                        required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="col-md-6 form-group">
                    <label for="product_current_value">Product Current Rs.</label>
                    
                    <input type="text" class="form-control" id="product_current_value" value="{{ $c->product_current_value }}" placeholder="Enter Product Current Value Rs./gram" name="product_current_value" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="product_offer_rs">Product Offers Rs.</label>
                    <input type="text" class="form-control" id="product_offer_rs"value="{{ $c->product_offer_rs }}" placeholder="Enter Product Offer Rs./gram"
                        name="product_offer_rs" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="col-md-6 form-group">
                    <label for="product_img">Product Photo</label>
                    <input type="file" class="form-control" id="product_img" name="product_img" required />
                    <div class="col-md-3 text-right"><img src="{{ asset($c->product_img )}}" width="65px">
                    </div>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>
            
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Check this checkbox to continue.</div>
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
           
        </form>
        @endforeach
    </div>
</div>
@stop