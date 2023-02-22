@extends('layouts.master')
@section('title', 'Reports | Balance Sheet Report')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>
                            Balance Sheet Report</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item"> Reports</li>
                            <li class="breadcrumb-item active">Balance Sheet Report </li>
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
                            <div class="row">

                                <div class="col-md-12 row">

                                    <div class="col-md-4 ">
                                        <label class="">DateFrom *</label>
                                        <input type="date" class="form-control" name="transaction_date">
                                    </div>
                                    <div class="col-md-4 ">
                                        <label class="">DateTo *</label>
                                        <input type="date" class="form-control" name="transaction_date">
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <div class="form-group">
                                            <div class="btn-list pull-right">
                                                <button class="btn btn-primary btn-pill"><span
                                                        id="showsearchloading"></span>
                                                    SEARCH</button>
                                                <button class="btn btn-success btn-pill">PDF</button>

                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card">

                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 invoice p-3 mb-3">
                                    <div class="row invoice-info">
                                        <div class="col-sm-4 m-auto invoice-col">
                                            <div class="company-logo text-center"><img
                                                    src="{{ asset('creation_billing.png') }}" alt="Acculance"
                                                    class="lg-logo">
                                                <address class="mt-2"> <strong>Phone:
                                                    </strong>
                                                    0170000000<br> <strong>Email: </strong>
                                                    support@creationfms.com<br> <strong>Address: </strong>
                                                    Mohammed Salem Bu Khamis street Star Tower 1 , Floor 11 - Office 1107 -
                                                    Ajman
                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 position-relative">
                                        <div class="position-absolute w-100 h-100 opacity-50 z-10 tbl-loading"
                                            style="display: none;">
                                            <div class="loader07"></div>
                                        </div>
                                        <div class="table-responsive w-100">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th colspan="2">
                                                            <h5>Incomes</h5>
                                                        </th>
                                                        <th colspan="2" class="red">
                                                            <h5>Liabilities</h5>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>Total Security/Asset=&gt;</th>
                                                        <th class="text-right">
                                                            $250000.00
                                                        </th>
                                                        <th>Supplier's Dues=&gt;</th>
                                                        <th class="text-right">
                                                            $128109.00
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Inventory Value=&gt;</th>
                                                        <th class="text-right">
                                                            $65681.80
                                                        </th>
                                                        <th>Bank Loan=&gt;</th>
                                                        <th class="text-right">
                                                            $190454.60
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Client's Dues=&gt;</th>
                                                        <th class="text-right">
                                                            $109495.25
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Bank Balance=&gt;</th>
                                                        <th class="text-right">
                                                            $424878.08
                                                        </th>
                                                    </tr>
                                                    <tr class="text-right">
                                                        <th>Total=&gt;</th>
                                                        <th>
                                                            $850055.13
                                                        </th>
                                                        <th>Total=&gt;</th>
                                                        <th>
                                                            $318563.60
                                                        </th>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="4" class="text-center"><strong>(Income -
                                                                Liabilities)</strong><br>
                                                            <h4 class="mt-2">
                                                                Total Asset:
                                                                <span class="text-success">$531491.53</span>
                                                            </h4>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
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
