@extends('layouts.master')
@section('title', 'Manage Tag')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>
                            Manage Tag</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Tag</li>
                            <li class="breadcrumb-item active">Manage Tag </li>
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
                            <a href="{{ url('/admin/customer/wise/tag/form') }}" target="_blank" class="btn btn-primary"
                                type="button">ADD
                                TAG</a>
                            <div class="table-responsive">
                                <table class="display" id="tag-table">
                                    <thead>
                                        <tr>
                                            <th>Sl no</th>
                                            <th>Customer Name</th>
                                            <th>Vehicle Name</th>
                                            <th>Vehicle Number</th>
                                            <th>Vehicle PlateNumber</th>
                                            <th>Identification Code</th>
                                            <th>Sync Tag</th>
                                            <th>Is Stock Transfer</th>
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
    <script src="{{ asset('code/js/customer.js') }}"></script>
@endsection
