@extends('layouts.master')
@section('title', 'Manage Transaction')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>
                            Manage Transaction</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item"> Transaction</li>
                            <li class="breadcrumb-item active">Manage Transaction </li>
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
                                <table class="display" id="transaction-table">
                                    <thead>
                                        <tr>
                                            <th>Sl no</th>
                                            <th>Payment Status</th>
                                            <th>Payment Mode</th>
                                            <th>Delivey Order No</th>
                                            <th>Transaction Date</th>
                                            <th>Client</th>
                                            <th>Vehicle</th>
                                            <th>Driver</th>
                                            <th>Odometer</th>
                                            <th>Discount</th>
                                            <th>Total</th>
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
    <script src="{{ asset('code/js/transaction.js') }}"></script>
@endsection
