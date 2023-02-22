@extends('layouts.master')
@section('title', 'Manage Tax Invoice')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>
                            Manage Tax Invoice</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item"> Tax </li>
                            <li class="breadcrumb-item active"> Invoice </li>
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
                                            <th>Tax Invoice Number</th>
                                            <th>Customer </th>
                                            <th>Date</th>
                                            <th>Quantity</th>
                                            <th>Vat % </th>
                                            <th>Vat Amount</th>
                                            <th>Total</th>
                                            <th>Print</th>

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
