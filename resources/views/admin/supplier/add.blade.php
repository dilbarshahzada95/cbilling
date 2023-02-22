@extends('layouts.master')
@section('title',
    'Create a Supplier
    ')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>
                            Supplier</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Create</li>
                            <li class="breadcrumb-item active">Supplier </li>
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
                                            <label class="">Supplier ID (optional)</label>
                                            <input type="text" class="form-control" name="cusomer_id">

                                        </div>
                                        <div class="col-md-4 myform">
                                            <label class="">Supplier Name</label>
                                            <input type="text" class="form-control" name="customer_name">

                                        </div>

                                        <div class="col-md-4 myform">
                                            <label class="">Contact Number one </label>
                                            <input type="text" class="form-control" name="contact_number">

                                        </div>
                                        <div class="col-md-4 myform">
                                            <label class="">Contact Number Two (optional)</label>
                                            <input type="text" class="form-control" name="contact_number">

                                        </div>

                                        <div class="col-md-4 myform">
                                            <label class="">Email </label>
                                            <input type="text" class="form-control" name="contact_number">

                                        </div>

                                        <div class="col-md-4 myform">
                                            <label class="">Webisite (optional)</label>
                                            <input type="text" class="form-control" name="contact_number">

                                        </div>
                                        <div class="col-md-4 myform">
                                            <label class="">Logo (optional)</label>
                                            <input type="file" class="form-control" name="logo">

                                        </div>


                                        <div class="col-md-12 myform">
                                            <label class="">Address (optional)</label>
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
