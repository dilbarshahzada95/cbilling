@extends('layouts.master')
@section('title', 'Manage Purchase')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>
                            Manage Purchase</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item"> Purchase</li>
                            <li class="breadcrumb-item active">Manage Purchase </li>
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
                                <table class="display" id="suppliers-table">
                                    <thead>
                                        <tr>
                                            <th>Sl no</th>
                                            <th>Supplier</th>
                                            <th>Purchase Date</th>
                                            <th>Quantity</th>
                                            <th>Net Total</th>
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
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('code/js/supplier.js') }}"></script>
@endsection
