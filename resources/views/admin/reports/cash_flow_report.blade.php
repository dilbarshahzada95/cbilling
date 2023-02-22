@extends('layouts.master')
@section('title', 'Reports | Cash Flow Report')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>
                            Cash Flow Report</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item"> Reports</li>
                            <li class="breadcrumb-item active">Cash Flow Report </li>
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
                            <div class="row">

                                <div class="col-md-12 row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="department_id">Account *</label>
                                            <select class="form-control select2 w-100" name="client_id" id="client_id">
                                                <option value="">Select account</option>
                                                <option value="1">account 1</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 ">
                                        <label class="">DateFrom *</label>
                                        <input type="date" class="form-control" name="transaction_date">
                                    </div>
                                    <div class="col-md-4 ">
                                        <label class="">DateTo *</label>
                                        <input type="date" class="form-control" name="transaction_date">
                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="btn-list pull-right">
                                                <button class="btn btn-primary btn-pill"><span
                                                        id="showsearchloading"></span>
                                                    SEARCH</button>
                                                <button class="btn btn-success btn-pill">PDF</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card">

                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="display" id="suppliers-table">
                                    <thead>
                                        <tr>
                                            <th style="width:15%">ID</th>
                                            <th style="width:15%">DATE</th>
                                            <th>ACCOUNT</th>
                                            <th>DESCRIPTION</th>
                                            <th>DEBIT </th>
                                            <th>CREDIT </th>
                                            <th>BALANCE</th>

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
    <script src="{{ asset('code/js/supplier.js') }}"></script>
@endsection
