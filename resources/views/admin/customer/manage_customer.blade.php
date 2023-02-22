@extends('layouts.master')
@section('title', 'Manage Customer')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>
                            Manage Customer</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Customer</li>
                            <li class="breadcrumb-item active">Manage Customer </li>
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
                                <table class="display" id="customer-table">
                                    <thead>
                                        <tr>
                                            <th>Sl no</th>
                                            <th>Customer ID</th>
                                            <th>Customer Name</th>
                                            <th>Contact Number</th>
                                            <th>Sale Price</th>
                                            <th>Credit Price</th>
                                            <th>Credit Limit</th>
                                            <th>Price Type</th>
                                            <th>Email</th>
                                            <th>Tax Applicaple</th>
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
    <script src="{{ asset('code/js/customer.js') }}"></script>
@endsection
