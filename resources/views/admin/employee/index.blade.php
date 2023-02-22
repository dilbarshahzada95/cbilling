@extends('layouts.master')
@section('title',
    'Create an employee
    ')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>
                            Create an employee</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">employee</li>
                            <li class="breadcrumb-item active">Create an employee </li>
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
                                            <label class="form-label">Employee Name *</label>
                                            <input type="text" class="form-control" placeholder="Enter a employee name">

                                        </div>
                                        <div class="col-md-4 myform mt-2">
                                            <div class="form-group">
                                                <label for="department_id">Department *</label>
                                                <select class="form-control select2 w-100" name="department_id"
                                                    id="department_id">
                                                    <option value="">Select Department</option>
                                                    <option value="1">Sales</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 myform">
                                            <label class="form-label">Contact Number *</label>
                                            <input type="text" class="form-control"
                                                placeholder="Enter a Contact Number  ">

                                        </div>
                                        <div class="col-md-4 myform">
                                            <label class="form-label">Salary *</label>
                                            <input type="text" class="form-control" placeholder="Enter a Salary  ">

                                        </div>
                                        <div class="col-md-4 myform mt-2">
                                            <div class="form-group">
                                                <label for="blood_group_id">Blood Group</label>
                                                <select class="form-control select2 w-100" name="blood_group_id"
                                                    id="blood_group_id">
                                                    <option value="">Select Group</option>
                                                    <option value="1">Ab</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 myform mt-2">
                                            <div class="form-group">
                                                <label for="religion_id">Religion</label>
                                                <select class="form-control select2 w-100" name="religion_id"
                                                    id="religion_id">
                                                    <option value="">Select Religion</option>
                                                    <option value="1">islam</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 myform">
                                            <label class="form-label">Appointment Date</label>
                                            <input type="date" class="form-control" name="appointment_date">

                                        </div>

                                        <div class="col-md-4 myform">
                                            <label class="form-label">Join Date</label>
                                            <input type="date" class="form-control" name="joining_date">

                                        </div>


                                        <div class="col-md-4 myform">
                                            <label class="form-label">Status</label>
                                            <select class="form-control" name="is_active" id="is_active" required>
                                                <option value="">Select Status</option>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>

                                        </div>



                                        <div class="col-md-6 myform">
                                            <label class="form-label">Profile Picture</label>
                                            <input type="file" class="form-control" name="profile">

                                        </div>
                                        <div class="col-md-6 myform">
                                            <label class="form-label">Documents (multiple)</label>
                                            <input type="file" class="form-control" name="documents">

                                        </div>
                                        <div class="col-md-12 myform">
                                            <label class="form-label">Address</label>
                                            <textarea class="form-control" name="address" id="address" placeholder="Enter Address"></textarea>
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
