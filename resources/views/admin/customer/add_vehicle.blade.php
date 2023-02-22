@extends('layouts.master')
@section('title',
    ' Vehicles
    ')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>
                            Vehicles</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Customer</li>
                            <li class="breadcrumb-item active">Vehicles </li>
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

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Vehicle Name</label>
                                                <input type="text" class="form-control" name="vehicle_name"
                                                    placeholder="Vehicle Name *">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Vehicle Number</label>
                                                <input type="text" class="form-control" name="cusomer_name"
                                                    placeholder="Vehicle Number *">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Vehicle Plate Number</label>
                                                <input type="text" class="form-control" name="trn_no"
                                                    placeholder="Vehicle Plate Number *">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Vehicle Vin</label>
                                                <input type="text" class="form-control" name="contact_no_one"
                                                    placeholder="Vehicle Vin">
                                            </div>
                                        </div>

                                        <div class="col-md-4 ">
                                            <div class="form-group">
                                                <label for="">Vehicle Type</label>
                                                <select class="form-control select2" name="" id="">
                                                    <option value="">Select Type</option>
                                                    <option value="1">Type One</option>
                                                    <option value="5">Type Two</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 ">
                                            <div class="form-group">
                                                <label for="">Vehicle Brand</label>
                                                <select class="form-control select2" name="" id="">
                                                    <option value="">Select Brand</option>
                                                    <option value="1">Brand One</option>
                                                    <option value="5">Brand Two</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 ">
                                            <div class="form-group">
                                                <label for="">Vehicle Model</label>
                                                <select class="form-control select2" name="" id="">
                                                    <option value="">Select Model</option>
                                                    <option value="1">Model One</option>
                                                    <option value="5">Model Two</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 ">
                                            <div class="form-group">
                                                <label for="">Vehicle Color</label>
                                                <select class="form-control select2" name="" id="">
                                                    <option value="">Select Color</option>
                                                    <option value="1">Color One</option>
                                                    <option value="5">Color Two</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 ">
                                            <div class="form-group">
                                                <label for="">Vehicle Year</label>
                                                <select class="form-control select2" name="" id="">
                                                    <option value="">Select Year</option>
                                                    <option value="1">Year One</option>
                                                    <option value="5">Year Two</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 ">
                                            <div class="form-group">
                                                <label for="">Status</label>
                                                <select class="form-control " name="" id="">
                                                    <option value="1">Active</option>
                                                    <option value="5">Not Active</option>
                                                </select>
                                            </div>
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
