@extends('adminlte::page')

@section('title', 'Admin/Loan Interest Master')

@section('content_header')
<h1 class="m-0 text-dark">Loan Interest Master</h1>
@stop

@section('content')


<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Loan Plan</h1>
                    </div>
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <form method="POST" action="{{ url('admin/loan-interest-master-create')}}"
                                        enctype='multipart/form-data'>
                                        @csrf
                                        <div class="form-group">
                                            <label>Plan(months)</label>
                                            <input type="number" class="form-control" name="month_plan"
                                                required="required" />
                                        </div>
                                        <div class="i-group">
                                            <label>Interest</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" name="month_intrest" min="0"
                                                    required="required" />
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Monthly Overdue Penalty</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control"
                                                    name="month_overdue_penalty_intrest" min="0" required="required" />
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block"
                                            name="save">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9  mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Plan(months)</th>
                                                    <th>Interest(%)</th>
                                                    <th>Monthly Overdue Penalty(%)</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $c)
                                                <tr>
                                                    <td>{{ $c->month_plan }}</td>
                                                    <td>{{ $c->month_intrest }}</td>
                                                    <td>{{ $c->month_overdue_penalty_intrest }}</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-secondary dropdown-toggle"
                                                                type="button" id="dropdownMenuButton"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <div class="dropdown-menu"
                                                                aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item bg-warning text-white"
                                                                    href="{{ url('edit/'.$c->id)}}"
                                                                    data-toggle="modal"
                                                                    data-target="#updatelplan">Edit</a>
                                                                <a class="dropdown-item bg-danger text-white"
                                                                    href="{{ url('delete/'.$c->id) }}"
                                                                    data-toggle="modal"
                                                                    data-target="#deletelplan">Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach

                                                <!-- Delete Loan Plan Modal -->
                                                @foreach($data as $c)
                                                <div class="modal fade" id="deletelplan"
                                                    tabindex="-1" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-danger">
                                                                <h5 class="modal-title text-white">System Information
                                                                </h5>
                                                                <button class="close" type="button" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">Are you sure you want to delete this
                                                                record?</div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-secondary" type="button"
                                                                    data-dismiss="modal">Cancel</button>
                                                                <a class="btn btn-danger"
                                                                    href="{{ url('admin/loan-interest-master-delete/'.$c->id) }}">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                <!-- Update Loan Type Modal -->
                                                @foreach($data as $c)
                                                <div class="modal fade" id="updatelplan" tabindex="-1"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog">                                                        
                                                        <form method="POST"
                                                            action="{{ url('admin/loan-interest-master-edit/'.$c->id) }}">
                                                            @csrf
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-warning">
                                                                    <h5 class="modal-title text-white">Edit Loan Plan
                                                                    </h5>
                                                                    <button class="close" type="button"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">x</span>
                                                                    </button>
                                                                </div>

                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <label>Plan(months)</label>
                                                                        <input type="text" class="form-control"
                                                                            value="{{ $c->month_plan }}"
                                                                            name="month_plan" required="required" />
                                                                        <!-- <input type="hidden" value="{{ $c->id }}" name="id"/> -->
                                                                    </div>
                                                                    <div class="i-group">
                                                                        <label>Interest</label>
                                                                        <div class="input-group">
                                                                            <input type="number" class="form-control"
                                                                                value="{{ $c->month_intrest }}"
                                                                                name="month_intrest" min="0"
                                                                                required="required" />
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text">%</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Monthly Overdue Penalty</label>
                                                                        <div class="input-group">
                                                                            <input type="number" class="form-control"
                                                                                value="{{ $c->month_overdue_penalty_intrest }}"
                                                                                name="month_overdue_penalty_intrest"
                                                                                min="0" required="required" />
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text">%</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-secondary" type="button"
                                                                        data-dismiss="modal">Cancel</button>
                                                                    <button type="submit" name="update"
                                                                        class="btn btn-warning">Update</a>
                                                                </div>
                                                            </div>
                                                        </form>                                                        
                                                    </div>
                                                </div>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Main Content -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->



            <script>
            $(document).ready(function() {
                $('#dataTable').DataTable({
                    "order": [
                        [1, "asc"]
                    ]
                });
            });
            </script>

</body>


@stop