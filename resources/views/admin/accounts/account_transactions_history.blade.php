@extends('layouts.master')
@section('title', 'Account Transaction History')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>
                            Account Transaction History</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Vehicles</li>
                            <li class="breadcrumb-item active">Account Transaction History </li>
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
                                <table class="display" id="account-transaction-history-table">
                                    <thead>
                                        <tr>
                                            <th>Sl no</th>
                                            <th>Reason</th>
                                            <th>Date</th>
                                            <th>Type</th>
                                            <th> Account</th>
                                            <th>Amount</th>

                                            <th>Status</th>
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
    <script src="{{ asset('code/js/accounts.js') }}"></script>
@endsection
