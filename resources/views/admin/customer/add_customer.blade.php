@extends('layouts.master')
@section('title',
    'Create a Customer
    ')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>
                            Create a Customer</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Customer</li>
                            <li class="breadcrumb-item active">Create a Customer </li>
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
                                                <label>Customer ID (optional)</label>
                                                <input type="text" class="form-control" name="cusomer_id"
                                                    placeholder="Customer ID *">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Customer Name</label>
                                                <input type="text" class="form-control" name="cusomer_name"
                                                    placeholder="Customer Name *">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>VAT/TRN NO (Tax Number)</label>
                                                <input type="text" class="form-control" name="trn_no"
                                                    placeholder="TRN NO (Tax Number) *">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Contact Number one</label>
                                                <input type="text" class="form-control" name="contact_no_one"
                                                    placeholder="Contact Number one ">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Contact Number Two (optional)</label>
                                                <input type="text" class="form-control" name="contact_no_two"
                                                    placeholder="Contact Number Two (optional)">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Email</label>
                                                <input type="text" class="form-control" name="email_id"
                                                    placeholder="Email *">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Sale Amount</label>
                                                <input type="number" class="form-control" name="sale_transaction_price"
                                                    placeholder="Sale Amount *">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Credit Price</label>
                                                <input type="number" class="form-control" name="credit_transaction_price"
                                                    placeholder="Credit Price *">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Credit Limit</label>
                                                <input type="number" class="form-control" name="credit_transaction_limit"
                                                    placeholder="Credit Limit *">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Tax Applicaple</label>
                                                <select class="form-control  w-100" name="is_tax_applicable"
                                                    id="transaction_type">
                                                    <option value="1">Yes</option>
                                                    <option value="2">No</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Webisite (optional)</label>
                                                <input type="text" class="form-control" name="website"
                                                    placeholder="Webisite (optional) *">
                                            </div>
                                        </div>
                                        <div class="col-md-4">

                                            <div class="mb-3 ">
                                                <label>Logo (optional)</label>
                                                <input class="form-control" type="file" name="logo">
                                            </div>

                                        </div>


                                        <div class="col-md-4 ">
                                            <label>Address (optional)</label>
                                            <textarea class="form-control" name="address" id="address" placeholder="Enter Address"></textarea>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-header pb-0">
                                                    <label>Price Type</label>
                                                </div>
                                                <div class="card-body megaoptions-border-space-sm">
                                                    <form class="mega-inline">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="card">
                                                                    <div class="d-flex p-20">
                                                                        <div class="form-check radio radio-primary me-3">
                                                                            <input class="form-check-input" id="radio14"
                                                                                type="radio" name="price_type"
                                                                                value="gallon" data-bs-original-title=""
                                                                                title="">
                                                                            <label class="form-check-label"
                                                                                for="radio14"></label>
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            <h6 class="mt-0 mega-title-badge">Gallon</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="card">
                                                                    <div class="d-flex p-20">
                                                                        <div class="form-check radio radio-secondary me-3">
                                                                            <input class="form-check-input" id="radio13"
                                                                                type="radio" name="price_type"
                                                                                value="liter" data-bs-original-title=""
                                                                                title="">
                                                                            <label class="form-check-label"
                                                                                for="radio13"></label>
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            <h6 class="mt-0 mega-title-badge">Liter</h6>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

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
