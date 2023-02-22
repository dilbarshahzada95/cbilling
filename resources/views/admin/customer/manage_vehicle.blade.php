@extends('layouts.master')
@section('title', 'Manage Vehicles')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>
                            Manage Vehicles</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Vehicles</li>
                            <li class="breadcrumb-item active">Manage Vehicles </li>
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
                                <table class="display" id="vehicle-table">
                                    <thead>
                                        <tr>
                                            <th class="border-bottom-0">Sl.no</th>
                                            <th class="border-bottom-0">Vehicle Name</th>
                                            <th class="border-bottom-0"> Vehicle Number</th>
                                            <th class="border-bottom-0">Vehicle Plate Number</th>
                                            <th class="border-bottom-0">Identification Code</th>
                                            <th class="border-bottom-0">Vin Number</th>
                                            <th class="border-bottom-0">Vehicle Year</th>
                                            <th class="border-bottom-0">Vehicle Type</th>
                                            <th class="border-bottom-0">Vehicle Brand</th>
                                            <th class="border-bottom-0">Vehicle Model</th>
                                            <th class="border-bottom-0">Vehicle Color</th>
                                            <th class="border-bottom-0">Status</th>
                                            <th class="border-bottom-0">Action</th>
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
    <script src="{{ asset('code/js/vehicle.js') }}"></script>
@endsection
