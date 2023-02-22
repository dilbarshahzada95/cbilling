@extends('layouts.master')
@section('title', 'Manage Employee')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>
                            Manage Employee</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item"> Employee</li>
                            <li class="breadcrumb-item active">Manage Employee </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid project-create">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">

                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="display" id="employee-table">
                                    <thead>
                                        <tr>
                                            <th>Sl no</th>
                                            <th>Employee Name</th>
                                            <th>Employee ID</th>
                                            <th>Employee Image</th>
                                            <th>Department</th>
                                            <th>Designation</th>
                                            <th>Contact Number</th>
                                            <th>Salary</th>
                                            <th>Blood Group</th>
                                            <th>Joining Date</th>
                                            <th>Documents</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('scripts')
    <script src="{{ asset('code/js/employee.js') }}"></script>
@endsection
