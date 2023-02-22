@extends('layouts.master')
@section('title',
    'Create purchase payment
    ')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>
                            Create Purchase payment</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Customer</li>
                            <li class="breadcrumb-item active">Create Purchase payment </li>
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

                                        <div class="col-md-12 myform">
                                            <div class="form-group">
                                                <label for="cus_id">Supplier</label>
                                                <select class="form-control select2 w-100" name="cus_id" id="cus_id">
                                                    <option value="">Select Supplier</option>
                                                    <option value="1">Customer One</option>
                                                    <option value="5">Customer Two</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 myform">
                                            <label class="form-label">Purchase Total</label>
                                            <input type="text" class="form-control" value="0" readonly>

                                        </div>
                                        <div class="col-md-4 myform">
                                            <label class="form-label">Total Paid</label>
                                            <input type="text" class="form-control" value="0" readonly>

                                        </div>
                                        <div class="col-md-4 myform">
                                            <label class="form-label">Total Due</label>
                                            <input type="text" class="form-control" value="0" readonly>

                                        </div>

                                        <div class="col-md-12 myform">
                                            <div class="form-group">
                                                <h4 class="headstyle">Due Payment Bills</h4>

                                            </div>
                                        </div>


                                        <div class="col-md-12 myform">

                                            <div class="d-flex align-items-center justify-content-center">

                                                <div class="table-responsive">

                                                    <table class="table align-middle mb-0">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th>Purchase No</th>
                                                                <th>Invoice Total</th>
                                                                <th>Invoice Due</th>
                                                                <th>Paid Amount</th>

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
                                                            </tr>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-md-6 myform">
                                            <label class="form-label">Total Payment *</label>
                                            <input type="text" class="form-control" value="0" readonly required>

                                        </div>
                                        <div class="col-md-6 myform mt-2">
                                            <div class="form-group">
                                                <label for="account_id">
                                                    Account *</label>
                                                <select class="form-control select2 w-100" name="account_id"
                                                    id="account_id">
                                                    <option value="">Select Account</option>
                                                    <option value="1">Account One</option>
                                                    <option value="5">Account Two</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3 myform">
                                            <label class="form-label">Cheque No</label>
                                            <input type="text" class="form-control">

                                        </div>
                                        <div class="col-md-3 myform">
                                            <label class="form-label">Receipt No </label>
                                            <input type="text" class="form-control">

                                        </div>
                                        <div class="col-md-3 myform">
                                            <label class="form-label">Payment Date</label>
                                            <input type="date" class="form-control" value="{{ date('Y-m-d') }}" required>

                                        </div>
                                        <div class="col-md-3 myform">
                                            <label class="form-label">Status</label>
                                            <select class="form-control" name="is_active" id="is_active" required>
                                                <option value="">Select Status</option>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>

                                        </div>
                                        <div class="col-md-12 myform">
                                            <label class="form-label">Notes</label>
                                            <textarea class="form-control" name="notes" id="notes" placeholder="Enter Notes"></textarea>
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
    <script src="{{ asset('code/js/payment.js') }}"></script>
@endsection
