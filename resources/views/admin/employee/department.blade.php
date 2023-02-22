@extends('layouts.master')
@section('title',
    'Create a department
    ')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>
                            Create a department</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">department</li>
                            <li class="breadcrumb-item active">Create a department </li>
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
                                data-bs-target=".bd-example-modal-lg">ADD DEPARTMENT </button>

                            <div class="table-responsive">
                                <table class="display" id="department-table">
                                    <thead>
                                        <tr>
                                            <th>Sl no</th>
                                            <th>Department Name</th>
                                            <th>Status</th>
                                            <th>Notes</th>
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
                        <h4 class="modal-title" id="myLargeModalLabel">ADD DEPARTMENT</h4>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="form-parameters">
                            <div class="row col-md-12">
                                <div class="col-md-6">
                                    <label>Department Name</label>
                                    <input type="text" class="form-control" name="account_name" id="account_name"
                                        placeholder="Enter a department name" required>
                                    <span id="account_name-error"></span>
                                </div>


                                <div class="col-md-6">
                                    <label>Status</label>
                                    <select class="form-control" name="is_active" id="is_active" required>
                                        <option value="">Select Status</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                    <span id="is_active-error"></span>
                                </div>

                                <div class="col-md-12">
                                    <label>Notes</label>
                                    <textarea class="form-control" name="notes" id="notes" placeholder="Enter Notes" required></textarea>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button class="btn ripple btn-success" type="button" id="insert-parameters">Save</button>
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
    <script src="{{ asset('code/js/employee.js') }}"></script>
@endsection
