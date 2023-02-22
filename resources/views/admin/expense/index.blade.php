@extends('layouts.master')
@section('title',
    'Create an Expense
    ')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>
                            Create an Expense</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Expense</li>
                            <li class="breadcrumb-item active">Create an Expense </li>
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

                                        <div class="col-md-6 myform">
                                            <label class="form-label">Expense Reason *</label>
                                            <input type="text" class="form-control" placeholder="Enter Expense Reason *">

                                        </div>
                                        <div class="col-md-6 myform mt-1">
                                            <div class="form-group">
                                                <label for="category_id">Category Name *</label>
                                                <select class="form-control select2 w-100" name="category_id"
                                                    id="category_id">
                                                    <option value="">Select Category</option>
                                                    <option value="1">Sale</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 myform mt-2">
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
                                        <div class="col-md-4 myform">
                                            <label class="form-label">Available Balance</label>
                                            <input type="text" class="form-control" value="0.00" readonly>

                                        </div>
                                        <div class="col-md-4 myform">
                                            <label class="form-label">Amount</label>
                                            <input type="text" class="form-control" value="0" required>

                                        </div>
                                        <div class="col-md-4 myform">
                                            <label class="form-label">Cheque No</label>
                                            <input type="text" class="form-control">

                                        </div>
                                        <div class="col-md-4 myform">
                                            <label class="form-label">Voucher No </label>
                                            <input type="text" class="form-control">

                                        </div>




                                        <div class="col-md-4 myform">
                                            <label class="form-label"> Date</label>
                                            <input type="date" class="form-control" name="date">

                                        </div>


                                        <div class="col-md-6 myform">
                                            <label class="form-label">Status</label>
                                            <select class="form-control" name="is_active" id="is_active" required>
                                                <option value="">Select Status</option>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>

                                        </div>



                                        <div class="col-md-6 myform">
                                            <label class="form-label"> Image</label>
                                            <input type="file" class="form-control" name="profile">

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
