@extends('layouts.master')
@section('title', 'Reports | Profit & Loss Report')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>
                            Profit & Loss Report</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item"> Reports</li>
                            <li class="breadcrumb-item active">Profit & Loss Report </li>
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
                                <div class="col-lg-12">
                                    <div class="invoice p-3 mb-3">
                                        <div class="m-auto invoice-col">
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
                                        <hr>
                                        <div class="row mt-5 position-relative">
                                            <div class="position-absolute w-100 h-100 opacity-50 z-10 tbl-loading"
                                                style="display: none;">
                                                <div class="loader07"></div>
                                            </div>
                                            <div class="table-responsive table-custom">
                                                <table class="table text-left ">
                                                    <thead>
                                                        <tr class="success text-center">
                                                            <th colspan="3">
                                                                <h5>Income Statement <br></h5>
                                                            </th>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td colspan="3"><strong>From
                                                                    13th Feb, 2023
                                                                    To
                                                                    20th Feb, 2023</strong></td>
                                                        </tr>

                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>Total Sales</th>
                                                            <td></td>
                                                            <td class="text-right"><strong>$131075.00</strong></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3"></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Cost of Goods Sold</th>
                                                            <td></td>
                                                            <td class="text-right"><u><strong>($95085.95)</strong></u></td>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="3">
                                                                Inventory Adjustment
                                                            </th>
                                                        </tr>
                                                        <tr class="text-success">
                                                            <td>Positive Adjusted</td>
                                                            <td class="text-right"><u><strong>$1145.89</strong></u></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="text-danger">
                                                            <td>Negative Adjusted</td>
                                                            <td class="text-right"><u><strong>($953.03)</strong></u></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Total Adjusted</th>
                                                            <td></td>
                                                            <td class="text-right text-success"><strong>$192.86</strong>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th><span>Gross Profit</span></th>
                                                            <td></td>
                                                            <td class="text-right"><strong>$36181.91</strong></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3"></td>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="3">Operating Expenses</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Salaries</td>
                                                            <td class="text-right"><strong>$22100.00</strong></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>General Expenses</td>
                                                            <td class="text-right"><strong>$21000.00</strong></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Loan Interest</td>
                                                            <td class="text-right"><strong>-$0</strong></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>reports.asset_depriciation</td>
                                                            <td class="text-right"><strong>-$0</strong></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Total Expense</th>
                                                            <td></td>
                                                            <td class="text-right"><strong>($43100.00)</strong></td>
                                                        </tr>
                                                        <tr class="text-danger">
                                                            <th><span>Net Loss</span></th>
                                                            <td></td>
                                                            <td class="text-right"><strong>
                                                                    -$6918.09
                                                                </strong></td>
                                                        </tr>
                                                    </tbody>
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
    </div>
@endsection
