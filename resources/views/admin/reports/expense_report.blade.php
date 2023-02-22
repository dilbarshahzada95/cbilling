@extends('layouts.master')
@section('title', 'Reports | Expense Report')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>
                            Expense Report</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item"> Reports</li>
                            <li class="breadcrumb-item active">Expense Report </li>
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
                                            <label for="department_id">Category *</label>
                                            <select class="form-control select2 w-100" name="client_id" id="client_id">
                                                <option value="">Select category</option>
                                                <option value="1">cat 1</option>
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
                                            <th>#</th>
                                            <th>Date</th>
                                            <th>Expense Reason</th>
                                            <th>Category</th>
                                            <th>Sub Category</th>
                                            <th>Amount</th>
                                            <th>Account</th>
                                            <th>Status</th>
                                            <th class="text-right">Created By</th>
                                        </tr>
                                    </thead>
                                    <tbody>



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="invoice p-3 mb-3">
                                        <div class="row invoice-info">
                                            <div class="col-sm-4 invoice-col">
                                                <div class="company-logo"><img src="{{ asset('creation_billing.png') }}"
                                                        alt="Acculance" class="lg-logo">
                                                    <address class="mt-2"> <strong>Phone:
                                                        </strong>
                                                        0170000000<br> <strong>Email: </strong>
                                                        support@creationfms.com<br> <strong>Address: </strong>
                                                        Mohammed Salem Bu Khamis street Star Tower 1 , Floor 11 - Office
                                                        1107 -
                                                        Ajman
                                                    </address>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 offset-sm-2 invoice-col float-right text-md-right">
                                                <h5>Expense Report</h5> <strong>Date:</strong>
                                                21st Feb, 2023<br> <strong>Category:</strong>
                                                Rent<br> <span><strong>Sub Category:</strong>
                                                    Office Rent<br></span> <strong>Date Range:</strong>
                                                14th Feb, 2023 -
                                                21st Feb, 2023 <br>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row mt-5 position-relative">
                                            <div class="position-absolute w-100 h-100 opacity-50 z-10 tbl-loading"
                                                style="display: none;">
                                                <div class="loader07"></div>
                                            </div>
                                            <div class="table-responsive table-custom">
                                                <table class="table table-sm">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Date</th>
                                                            <th>Expense Reason</th>
                                                            <th>Category</th>
                                                            <th>Sub Category</th>
                                                            <th>Amount</th>
                                                            <th>Account</th>
                                                            <th>Status</th>
                                                            <th class="text-right">Created By</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td><span>21st Feb, 2023</span></td>
                                                            <td>April Office Rent</td>
                                                            <td><span>
                                                                    AEC-1
                                                                </span></td>
                                                            <td><span>
                                                                    AES-1
                                                                </span></td>
                                                            <td><span>$20000.00</span></td>
                                                            <td><span>
                                                                    IBBL-0002
                                                                </span></td>
                                                            <td><span class="badge bg-success">Active</span></td>
                                                            <td class="text-right">Super Admin</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="5" class="text-right"><strong>Total</strong>
                                                            </td>
                                                            <td colspan="4"><strong>$20000.00</strong></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
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
