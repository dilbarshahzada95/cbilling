@extends('layouts.master')
@section('title',
    'Update Sale Price
    ')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>
                            Update Sale Price</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Price</li>
                            <li class="breadcrumb-item active">Update Sale Price </li>
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
                                data-bs-target="#exampleModalmdo">ADD PRICE</button>
                            <div class="table-responsive">
                                <table class="display" id="price-table">
                                    <thead>
                                        <tr>
                                            <th>Sl no</th>
                                            <th>Customer Name</th>
                                            <th>Sale Price</th>
                                            <th>Credit Price</th>
                                            <th>Created At</th>
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
        <div class="modal fade" id="exampleModalmdo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">ADD PRICE</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="col-md-12 row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="department_id">Client *</label>
                                        <select class="form-control select2 w-100" name="client_id" id="client_id">
                                            <option value="">Select Client</option>
                                            <option value="1">Client1</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label class="form-label">Sale Price</label>
                                    <input type="text" class="form-control" name="cusomer_id">

                                </div>


                                <div class="col-md-12 ">
                                    <label class="form-label">Credit Price</label>
                                    <input type="text" class="form-control" name="cusomer_id">

                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="button">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('code/js/customer.js') }}"></script>
@endsection
