@extends('adminlte::page')

@section('title', 'Admin/Test')

@section('content_header')
    <h1 class="m-0 text-dark">Check</h1>
@stop

@section('content')
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                <label for="name">Name</label>
            <input type="text" class="form-control" placeholder="Enter Name">
                </div>
                <div class="col">
                <label for="Mobile">Mobile</label>
            <input type="text" class="form-control" placeholder="Enter Mobile No.">
                </div>
            </div>
            <div class="row">
                <div class="col">
                <label for="email">Email ID</label>
            <input type="text" class="form-control" placeholder="Enter Email ID">
                </div>
                <div class="col">
                <label for="aadharno">Aadhar No.</label>
            <input type="text" class="form-control" placeholder="Enter Aadhar No.">
                </div>
            </div>
            
           <div class="row">
            <div class="col">
            <label for="panno">Pan No.</label>
            <input type="text" class="form-control" placeholder="Enter Pan No.">
            </div>
            <div class="col">
            <label for="photo">photo</label>
            <input type="file" class="form-control">
            </div>
           </div>
            <input type="submit" value="Submit" class="form-control bg-primary">
        </form>    
    </div>
    <fieldset>
        <legend>Test Data</legend>
        <table class="table">
        <thead>
            <tr>
                <th>Sr.No.</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Eamil Id</th>
                <th>Aadhar No.</th>
                <th>Pan no.</th>
                <th>Photo</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Shiva</td>
                <td>9839201122 </td>
                <td>shiva@gmail.com</td>
                <td>125496587458</td>
                <td>ELPS0012K</td>
                <td>Photo</td>
                <td><i class="fa fa-eye"></i>&nbsp;<i class="fa fa-pen-alt"></i>&nbsp;<i class="fa fa-trash-alt"></i></td>
            </tr>
        </tbody>
        </table>
    </fieldset>
@stop
