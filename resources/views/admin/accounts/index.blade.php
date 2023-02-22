@extends('layouts.master')
@section('title', 'Accounts')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>
                            Accounts</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Accounts</li>
                            <li class="breadcrumb-item active">List </li>
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
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                data-bs-target=".bd-example-modal-lg">ADD ACCOUNT</button>

                            <div class="table-responsive">
                                <table class="display" id="accounts-table">
                                    <thead>
                                        <tr>
                                            <th>Sl no</th>
                                            <th>Bank Name</th>
                                            <th>Account Number</th>
                                            <th>Opening Balance</th>
                                            <th>Available Balance</th>
                                            <th>Opening Date</th>
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
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">ADD ACCOUNTS</h4>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="form-parameters">
                            <div class="row col-md-12">
                                <div class="col-md-4">
                                    <label>Account Name</label>
                                    <input type="text" class="form-control" name="account_name" id="account_name"
                                        placeholder="Enter Account Name" required>
                                    <span id="account_name-error"></span>
                                </div>
                                <div class="col-md-4">
                                    <label>Branch Name</label>
                                    <input type="text" class="form-control" name="branch_name" id="branch_name"
                                        placeholder="Enter Branch Name" required>
                                    <span id="branch_name-error"></span>
                                </div>

                                <div class="col-md-4">
                                    <label>Account Number</label>
                                    <input type="text" class="form-control" name="account_number" id="account_number"
                                        placeholder="Enter Account Number" required>
                                    <span id="account_number-error"></span>
                                </div>
                                <div class="col-md-4">
                                    <label>Opening Date</label>
                                    <input type="date" class="form-control" name="date" id="date" required>
                                    <span id="date-error"></span>
                                </div>
                                <div class="col-md-4">
                                    <label>Accounts Type</label>
                                    <select class="form-control" name="account_balance_type" id="account_balance_type"
                                        required>
                                        <option value="">Select Type</option>
                                        <option value="1">Debit</option>
                                        <option value="2">Credit</option>
                                    </select>
                                    <span id="account_balance_type-error"></span>
                                </div>
                                <div class="col-md-4">
                                    <label>Status</label>
                                    <select class="form-control" name="is_active" id="is_active" required>
                                        <option value="">Select Status</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                    <span id="is_active-error"></span>
                                </div>
                                <div class="col-md-4">
                                    <label>Primary Accounts </label>
                                    <select class="form-control" name="primary_account" id="primary_account" required>
                                        <option value="">Select Type</option>
                                        <option value="1">Asset</option>
                                        <option value="2">Liablity</option>
                                        <option value="3">Income</option>
                                        <option value="4">Expense</option>
                                    </select>
                                    <span id="primary_account-error"></span>
                                </div>
                                <div class="col-md-8">
                                    <label>Notes</label>
                                    <textarea class="form-control" name="notes" id="notes" placeholder="Enter Notes" required></textarea>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button class="btn ripple btn-success" type="button"
                                    id="insert-parameters">Save</button>
                                <button class="btn ripple btn-danger" data-bs-dismiss="modal" type="button"
                                    id="close-add-modal">Close</button>
                            </div>



                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('code/js/accounts.js') }}"></script>
@endsection
