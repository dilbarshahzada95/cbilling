@extends('layouts.master')
@section('title',
    'Purchase
    ')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>
                            Purchase</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Create</li>
                            <li class="breadcrumb-item active">Purchase </li>
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
                                        <div class="col-md-6 myform ">
                                            <div class="form-group">
                                                <label for="department_id">Supplier *</label>
                                                <select class="form-control select2 w-100" name="client_id" id="client_id">
                                                    <option value="">Select Supplier </option>
                                                    <option value="1">Supplier </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 myform">
                                            <label class="">Purchase Date*</label>
                                            <input type="date" class="form-control" name="transaction_date">

                                        </div>

                                        <div class="col-md-12 myform">
                                            <div class="form-group">
                                                <h4 class="headstyle">PURCHASE ORDERS LIST</h4>

                                            </div>
                                        </div>


                                        <div class="col-md-12 myform" style="padding: 20px;">

                                            <div class="d-flex align-items-center justify-content-center">

                                                <div class="table-responsive">

                                                    <table class="table align-middle mb-0">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th>Product Name</th>
                                                                <th>Quantity</th>
                                                                <th>Purchse Price</th>
                                                                <th>Unit Cost</th>
                                                                <th>Tax Amount</th>
                                                                <th>Sub Total</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input type="text" class="form-control"></td>
                                                                <td><input type="text" class="form-control"
                                                                        value="0"></td>
                                                                <td><input type="text" class="form-control"
                                                                        value="0"></td>
                                                                <td><input type="text" class="form-control"
                                                                        value="0"></td>
                                                                <td><input type="text" class="form-control"
                                                                        value="0"></td>
                                                                <td><input type="text" class="form-control"
                                                                        value="0"></td>
                                                            </tr>


                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <td colspan="4" class="text-end">Total</td>
                                                                <td><input type="text" class="form-control"
                                                                        value="0" readonly></td>
                                                                <td><input type="text" class="form-control"
                                                                        value="0" readonly></td>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-md-4 myform">
                                            <label class="form-label">PO Reference</label>
                                            <input type="text" class="form-control">

                                        </div>
                                        <div class="col-md-4 myform">
                                            <label class="form-label">Discount</label>
                                            <input type="text" class="form-control" value="0">

                                        </div>
                                        <div class="col-md-4 myform">
                                            <label class="form-label">Net Total</label>
                                            <input type="text" class="form-control">

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
