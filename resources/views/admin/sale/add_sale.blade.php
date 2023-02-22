@extends('layouts.master')
@section('title',
    'Create a Sale
    ')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>
                            Create a Sale</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Sale</li>
                            <li class="breadcrumb-item active">Create a Sale </li>
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

                                        <div class="col-md-4 myform">
                                            <label class="">Transaction Date *</label>
                                            <input type="date" class="form-control" name="transaction_date">

                                        </div>
                                        <div class="col-md-4 myform mt-2">
                                            <div class="form-group">
                                                <label for="department_id">Client *</label>
                                                <select class="form-control select2 w-100" name="client_id" id="client_id">
                                                    <option value="">Select Client</option>
                                                    <option value="1">Client1</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 myform mt-2">
                                            <div class="form-group">
                                                <label for="department_id">Vehicle *</label>
                                                <select class="form-control select2 w-100" name="vehicle_id"
                                                    id="vehicle_id">
                                                    <option value="">Select Vehicle</option>
                                                    <option value="1">Vehicle1</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 myform mt-2">
                                            <div class="form-group">
                                                <label for="department_id">Driver *</label>
                                                <select class="form-control select2 w-100" name="driver_id" id="driver_id">
                                                    <option value="">Select Driver</option>
                                                    <option value="1">Driver1</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4 myform ">
                                            <div class="form-group">
                                                <label for="department_id">Transaction Type *</label>
                                                <select class="form-control  w-100" name="transaction_type"
                                                    id="transaction_type">
                                                    <option value="">Select Type</option>
                                                    <option value="1">Gallon</option>
                                                    <option value="2">Liter</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-md-4 myform">
                                            <label class="">Quantity *</label>
                                            <input type="number" class="form-control" placeholder="Enter a Quantity  ">

                                        </div>
                                        <div id="gallon" class="col-md-12 row">
                                            <div class="col-md-6 myform">
                                                <label class="">Unit Price *</label>
                                                <input type="number" class="form-control"
                                                    placeholder="Enter a Unit Price  ">

                                            </div>
                                            <div class="col-md-6 myform">
                                                <label class="">Gallon Price *</label>
                                                <input type="text" class="form-control readonly" readonly value="0">

                                            </div>
                                        </div>

                                        <div id="liter" class="col-md-12 row">
                                            <div class="col-md-6 myform">
                                                <label class="">Quantity Liter * </label>
                                                <input type="number" class="form-control">

                                            </div>
                                            <div class="col-md-6 myform">
                                                <label class="">Liter Unit Price *</label>
                                                <input type="number" class="form-control">

                                            </div>
                                        </div>

                                        <div class="col-md-4 myform">
                                            <label class="">Tax *</label>
                                            <input type="number" class="form-control">

                                        </div>
                                        <div class="col-md-4 myform">
                                            <label class="">Discount (optional)</label>
                                            <input type="number" class="form-control" name="discount" value="0">

                                        </div>
                                        <div class="col-md-4 myform">
                                            <label class="">Total *</label>
                                            <input type="number" class="form-control">

                                        </div>
                                        <div class="col-md-6 myform">
                                            <label class="">Odometer *</label>
                                            <input type="number" class="form-control">

                                        </div>
                                        <div class="col-md-6 myform ">
                                            <div class="form-group">
                                                <label for="payment_mode">Payment Mode</label>
                                                <select class="form-control  w-100" name="payment_mode"
                                                    id="payment_mode">
                                                    <option value="">Select Mode</option>
                                                    <option value="1">Cash</option>
                                                    <option value="2">Credit</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div id="accounts" class="col-md-12 row">
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <label for="account_id">Account</label>
                                                    <select class="form-control select2" name="account_id"
                                                        id="account_id">
                                                        <option value="">Select Account</option>
                                                        <option value="1">Account One</option>
                                                        <option value="5">Account Two</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 myform">
                                                <label class="">Paid Amount *</label>
                                                <input type="number" class="form-control">

                                            </div>
                                            <div class="col-md-6 myform">
                                                <label class="">Cheque No (optional)</label>
                                                <input type="text" class="form-control">

                                            </div>

                                            <div class="col-md-6 myform">
                                                <label class="">Receipt No (optional)</label>
                                                <input type="text" class="form-control" name="reciept">

                                            </div>
                                        </div>

                                        <div class="col-md-12 myform">
                                            <label class="">Documents (optional)</label>
                                            <input type="file" class="form-control" name="documents">

                                        </div>
                                        <div class="col-md-12 myform">
                                            <label class="">Notes (optional)</label>
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
    <script>
        $(document).ready(function() {
            $('#liter').hide();
            $('#gallon').hide();
            $('#accounts').hide();
            $('#transaction_type').on('change', function() {
                // alert()
                var transaction_type = $(this).val();
                if (transaction_type == 1) {
                    $('#gallon').show();
                    $('#liter').hide();
                } else {
                    $('#liter').show();
                    $('#gallon').hide();
                }
            });
            $('#payment_mode').on('change', function() {
                var payment_mode = $(this).val();
                if (payment_mode == 1) {
                    $('#accounts').show();
                } else {
                    $('#accounts').hide();
                }
            });
        });
    </script>

@endsection
