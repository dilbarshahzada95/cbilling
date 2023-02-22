@extends('layouts.master')
@section('title',
    'Tax Invoice
    ')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>
                            Tax Invoice</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Invoice</li>
                            <li class="breadcrumb-item active">Tax Invoice </li>
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
                            <div class="form theme-form">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4 myform ">
                                            <div class="form-group">
                                                <label for="department_id">Client *</label>
                                                <select class="form-control select2 w-100" name="client_id" id="client_id">
                                                    <option value="">Select Client</option>
                                                    <option value="1">Client1</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4 myform">
                                            <label class="">Transaction Date From*</label>
                                            <input type="date" class="form-control" name="transaction_date">

                                        </div>
                                        <div class="col-md-4 myform">
                                            <label class="">Transaction Date To*</label>
                                            <input type="date" class="form-control" name="transaction_date">

                                        </div>
                                        <div class="col-md-12 myform">
                                            <div class="form-group">
                                                <h4 class="headstyle">DELIVERY ORDERS LIST</h4>

                                            </div>
                                        </div>


                                        <div class="col-md-12 myform" style="padding: 20px;">

                                            <div class="d-flex align-items-center justify-content-center">

                                                <div class="table-responsive">

                                                    <table class="table align-middle mb-0">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th>Sl no</th>

                                                                <th>Deliver Order No</th>
                                                                <th>Transaction Date</th>
                                                                <th>Vehicle</th>
                                                                <th>Driver</th>
                                                                <th>Quantity</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input type="text" class="form-control"
                                                                        value="0" readonly></td>
                                                                <td><input type="text" class="form-control"
                                                                        value="0" readonly></td>
                                                                <td><input type="text" class="form-control"
                                                                        value="0" readonly></td>
                                                                <td><input type="text" class="form-control"
                                                                        value="0"></td>
                                                                <td><input type="text" class="form-control"
                                                                        value="0" readonly></td>
                                                                <td><input type="text" class="form-control"
                                                                        value="0"></td>
                                                            </tr>


                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <td colspan="5" class="text-end">Total</td>
                                                                <td><input type="text" class="form-control"
                                                                        value="0" readonly></td>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-md-4 myform">
                                            <label class="form-label">Total Quantity</label>
                                            <input type="text" class="form-control" value="0" readonly>

                                        </div>
                                        <div class="col-md-4 myform">
                                            <label class="form-label">Unit Price</label>
                                            <input type="text" class="form-control" value="0" readonly>

                                        </div>
                                        <div class="col-md-4 myform">
                                            <label class="form-label">Taxable value</label>
                                            <input type="text" class="form-control" value="0" readonly>

                                        </div>
                                        <div class="col-md-4 myform">
                                            <label class="form-label">Vat %</label>
                                            <input type="text" class="form-control" value="0" readonly>

                                        </div>
                                        <div class="col-md-4 myform">
                                            <label class="form-label">Vat Amount</label>
                                            <input type="text" class="form-control" value="0" readonly>

                                        </div>
                                        <div class="col-md-4 myform">
                                            <label class="form-label">Total</label>
                                            <input type="text" class="form-control" value="0" readonly>

                                        </div>






                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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
