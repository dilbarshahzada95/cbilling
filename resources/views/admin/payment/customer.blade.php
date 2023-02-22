@extends('layouts.master')
@section('title', 'Invoice Payments')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>
                            Invoice Payments</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Invoice Payments</li>
                            <li class="breadcrumb-item active">Customers </li>
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
                        <div class="card-header">
                            <a class="btn btn-primary btn-pill" href="{{ url('/admin/payment/customer/payment') }}"
                                target="_blank">Create Invoice Payment
                            </a>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="display" id="customer-payment-table">
                                    <thead>
                                        <tr>
                                            <th>Sl no</th>
                                            <th>Invoice No</th>
                                            <th>Customer</th>
                                            <th>Paid Amount</th>
                                            <th>Account </th>
                                            <th>Transaction Date</th>
                                            <th>Status</th>
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
    <script src="{{ asset('code/js/payment.js') }}"></script>
@endsection
