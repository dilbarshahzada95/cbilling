@extends('layouts.master')
@section('title', 'Reports | Leger ')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>
                            Leger </h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item"> Reports</li>
                            <li class="breadcrumb-item active">Leger </li>
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
                                        <div class="row invoice-info">
                                            <div class="col-sm-4 invoice-col">
                                                <div class="company-logo">

                                                    <address class="mt-2"><strong>Customer Name:
                                                        </strong>
                                                        0170000000<br> <strong>Phone:
                                                        </strong>
                                                        0170000000<br> <strong>Email: </strong>
                                                        support@creationfms.com<br> <strong>Address: </strong>
                                                        Mohammed Salem Bu Khamis street Star Tower 1 , Floor 11 - Office
                                                        1107 -
                                                        Ajman
                                                    </address>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 offset-sm-2 invoice-col float-right text-md-right">
                                                <h5>Account Summary</h5> <strong>Opening Balance:</strong>
                                                100000<br>
                                                <strong>Total invoice:</strong>
                                                5000<br>
                                                <span><strong>Total paid:</strong>
                                                    2500<br></span>
                                                <strong>Advance Balance:</strong>
                                                500<br>
                                                <strong>Balance:</strong>
                                                500<br>

                                            </div>
                                        </div>

                                        <div class="col-md-12 col-sm-12 ">
                                            <p class="text-center" style="text-align: center;"><strong>Showing all invoices
                                                    and payments between 01/01/2023 and 31/12/2023</strong></p>
                                            <div class="table-responsive">
                                                <div id="ledger_table_wrapper"
                                                    class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                                    <table class="table table-striped dataTable no-footer" id="ledger_table"
                                                        role="grid">
                                                        <thead>
                                                            <tr class="row-border blue-heading" role="row">
                                                                <th width="18%" class="text-center sorting_disabled"
                                                                    rowspan="1" colspan="1" style="width: 202.962px;">
                                                                    Date</th>
                                                                <th width="9%" class="text-center sorting_disabled"
                                                                    rowspan="1" colspan="1" style="width: 95.225px;">
                                                                    Reference No</th>
                                                                <th width="8%" class="text-center sorting_disabled"
                                                                    rowspan="1" colspan="1" style="width: 82.625px;">
                                                                    Type</th>
                                                                <th width="10%" class="text-center sorting_disabled"
                                                                    rowspan="1" colspan="1" style="width: 106.775px;">
                                                                    Location</th>
                                                                <th width="5%" class="text-center sorting_disabled"
                                                                    rowspan="1" colspan="1" style="width: 58.3625px;">
                                                                    Payment status</th>
                                                                <th width="10%" class="text-center sorting_disabled"
                                                                    rowspan="1" colspan="1" style="width: 107.438px;">
                                                                    Total</th>
                                                                <th width="10%" class="text-center sorting_disabled"
                                                                    rowspan="1" colspan="1" style="width: 105.775px;">
                                                                    Debit</th>
                                                                <th width="10%" class="text-center sorting_disabled"
                                                                    rowspan="1" colspan="1" style="width: 106.012px;">
                                                                    Credit</th>
                                                                <th width="5%" class="text-center sorting_disabled"
                                                                    rowspan="1" colspan="1" style="width: 58.3625px;">
                                                                    Payment Method</th>
                                                                <th width="15%" class="text-center sorting_disabled"
                                                                    rowspan="1" colspan="1" style="width: 166.062px;">
                                                                    Others</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>

                                                            <tr role="row" class="odd">
                                                                <td class="row-border">01/01/2023 00:00</td>
                                                                <td></td>
                                                                <td>Opening Balance</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td class="ws-nowrap align-right"> ₹ 31,995.00 </td>
                                                                <td class="ws-nowrap align-right"></td>
                                                                <td class="ws-nowrap align-right"></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="row-border">17/12/2022 10:06</td>
                                                                <td>1952</td>
                                                                <td>Sell</td>
                                                                <td>ddddd</td>
                                                                <td>Paid</td>
                                                                <td class="ws-nowrap align-right"> ₹ 31,995.00 </td>
                                                                <td class="ws-nowrap align-right"></td>
                                                                <td class="ws-nowrap align-right"></td>
                                                                <td></td>
                                                                <td></td>
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
    </div>
@endsection
